<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Pagination\Paginator;
use App\Models\Role;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\DB;

class UserController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate(10);
        // return view('users.list_user')->with('users', $users);

        $users = User::join('role', 'users.role_id', '=', 'role.id')
            ->select(
                'users.role_id',
                'users.id',
                'users.firstName',
                'users.lastName',
                'users.email',
                'users.gender',
                'users.phoneNumber',
                'users.status',
                'users.updated_at',
                'users.created_at',
                'role.role_name as role_name'
            )
            ->orderBy('users.firstName','asc')
            ->get();
        return view('users.list_user')->with('users', $users);
    }

    //modifier le mot de passe de l'utilisateur connecter dans la page profile_user
    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $old_password = $request->input('old_password');
        $new_password = $request->input('new_password');
        $confirm_new_password = $request->input('confirm_new_password');

        if (!Hash::check($old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'L\'ancien mot de passe est incorrect.']);
        }

        if ($new_password !== $confirm_new_password) {
            return back()->withErrors(['new_password' => 'Les deux nouveaux mots de passe ne correspondent pas.']);
        }

        $user->password = bcrypt($new_password);

        return back()->with('success', 'Le mot de passe a été modifié avec succès.');
    }


    public function nombre()
    {
        $totalQuestion = Question::count();
        $totalAllUsers = User::count();
        $totalUser = User::where('role_id', '2')->count();
        $totalAdmin = User::where('role_id', '1')->count();

        return view('admin.dashboard', [
            'totalAllUsers' => $totalAllUsers,
            'totalQuestion' => $totalQuestion,
            'totalAdmin' => $totalAdmin,
            'totalUser' => $totalUser
        ]);
    }

    public function total(Request $request)
    {
        $users = User::all();

        if ($request->has('search')) {
            $users = $users->filter(function ($user) use ($request) {
                return stripos($user->firstName, $request->input('search')) !== false
                    || stripos($user->lastName, $request->input('search')) !== false
                    || stripos($user->gender, $request->input('search')) !== false
                    || stripos($user->email, $request->input('search')) !== false;
            });
        }

        $usersCount = $users->count();
        if ($request->has('search')) {
            $users = $users->filter(function ($user) use ($request) {
                return stripos($user->firstName, $request->input('search')) !== false
                    || stripos($user->lastName, $request->input('search')) !== false
                    || stripos($user->gender, $request->input('search')) !== false
                    || stripos($user->email, $request->input('search')) !== false;
            });
        }

        if ($request->has('sort') && $request->input('sort') === 'asc') {
            $users = $users->sortBy('firstName');
        } elseif ($request->has('sort') && $request->input('sort') === 'desc') {
            $users = $users->sortByDesc('firstName');
        }

        return view('users.list_user', compact('users', 'usersCount'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        // Effectuer la recherche dans votre base de données ou autre logique
        $results = User::where('firstName', 'LIKE', "%{$query}%")->paginate(10);

        return response()->json([
            'data' => $results->items(),
            'current_page' => $results->currentPage(),
            'last_page' => $results->lastPage(),
            'total' => $results->total(),
            'links' => $results->links('pagination::bootstrap-4')->toHtml()
        ]);
    }


    public function listRole()
    {
        $roles = Role::all();
        return view('users.add_user', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.add_user', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string',
            'lastName',
            'gender' => 'required|in:masculin,feminin',
            'phoneNumber' => 'required|unique:users,phoneNumber',
            'password' => 'required|max:8|confirmed',
            'email' => 'required|email|unique:users,email',
            'role_id' => 'required|exists:role,id',

        ]);

        User::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'gender' => $request['gender'],
            'phoneNumber' => $request['phoneNumber'],
            'role_id' =>  $request['role_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect(url('users/list_user'))->with('success', 'Utilisateur Ajouter!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     $users = User::find($id);
    //     return view('users.show_user')->with('users', $users);
    // }

    public function show($id)
    {
        $users = User::findOrFail($id);

        // Détermine l'image à afficher en fonction du genre
        if ($users->gender == 'masculin') {
            $image = 'homme.png';
        } else {
            $image = 'fille.png';
        }

        return view('users.show_user', compact('users', 'image'));
    }

    // public function showp($id)
    // {
    //     $users = User::findOrFail($id);

    //     // Détermine l'image à afficher en fonction du genre
    //     if ($users->gender == 'masculin') {
    //         $image = 'homme.png';
    //     } else {
    //         $image = 'fille.png';
    //     }

    //     return view('users.profile_user', compact('users', 'image'));
    // }

    //  public function show(User $users)
    //  {

    //      return view('users.show_user', compact('users'));
    //  }

    public function update($id, Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required',
            'gender' => 'required|in:masculin,feminin',
            'phoneNumber' => 'required',
            'role_id' => 'required|exists:role,id',


        ]);

        User::whereId($id)->update($data);
        return redirect('users/list_user')->with('Success', 'utilisateur modifier');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //  public function edit(User $user)
    //  {
    //      return view('users.edit_user',['user' => $user]);
    //  }
    public function edit($id)
    {
        $roles = Role::all();
        $users = User::find($id);
        return view('users.edit_user', compact('users', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function toggleStatus(string $i)
    // {
    //     $user = User::FindOrFail($i);
    //     $user->status = !$user->status;
    //     $user->save();
    //     return redirect('users.update')->with('success', 'Utilisateur active!');
    // }

    public function status($id)
    {
        $user = User::find($id);
        $user->status = !$user->status;
        if ($user->save()) {
            return back();
        } else {
            return redirect(route('status'));
        };
    }
}
