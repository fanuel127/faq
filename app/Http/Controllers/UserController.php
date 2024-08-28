<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Question;
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
        $roles = Role::all();
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
            ->orderBy('users.lastName', 'asc')->paginate(5);
        // ->get();
        return view('users.list_user', compact('users', $users, 'roles'));
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

    // public function total(Request $request)
    // {
    //     $users = User::paginate(20);

    //     if ($request->has('search')) {
    //         $users = $users->filter(function ($user) use ($request) {
    //             return stripos($user->firstName, $request->input('search')) !== false
    //                 || stripos($user->lastName, $request->input('search')) !== false
    //                 || stripos($user->gender, $request->input('search')) !== false
    //                 || stripos($user->email, $request->input('search')) !== false;
    //         });
    //     }

    //     $usersCount = $users->count();
    //     if ($request->has('search')) {
    //         $users = $users->filter(function ($user) use ($request) {
    //             return stripos($user->firstName, $request->input('search')) !== false
    //                 || stripos($user->lastName, $request->input('search')) !== false
    //                 || stripos($user->gender, $request->input('search')) !== false
    //                 || stripos($user->email, $request->input('search')) !== false;
    //         });
    //     }

    //     if ($request->has('sort') && $request->input('sort') === 'asc') {
    //         $users = $users->sortBy('firstName');
    //     } elseif ($request->has('sort') && $request->input('sort') === 'desc') {
    //         $users = $users->sortByDesc('firstName');
    //     }

    //     return view('users.list_user', compact('users', 'usersCount'));
    // }

    public function filter(Request $request)
    {
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
            ->orderBy('users.lastName', 'asc')
            ->paginate(5);
        // Début de la requête Eloquent

        // Vérifier si l'utilisateur a sélectionné un ordre de tri et un champ
        if ($request->has('order') && $request->has('sort')) {
            $order = $request->input('order');
            $sort = $request->input('sort');

            if ($order === 'asc') {
                $users->orderBy($sort, 'asc'); // Trie par le champ sélectionné croissant
            } else if ($order === 'desc') {
                $users->orderBy($sort, 'desc'); // Trie par le champ sélectionné décroissant
            }
        }

        // Vérifier si l'utilisateur a sélectionné une role
        if ($request->has('role')) {
            $role = $request->input('role');
            $users->where('role_id', $role); // Filtre par role
            // dd($users->toSql()); // View the generated SQL query here

        }

        // Vérifier si l'utilisateur a sélectionné le sexe
        if ($request->has('gender')) {
            $gender = $request->input('gender');
            $users->where('gender', $gender); // Filtre par sexe
            // dd($users->toSql()); // View the generated SQL query here
        }


        // Vérifier si l'utilisateur a sélectionné le status
        if ($request->has('status')) {
            $status = $request->input('status');
            $users->where('status', $status); // Filtre par status
            // dd($users->toSql()); // View the generated SQL query here

        }

        // $users =  $users->get(); //Exécute la requête et récupère les résultats

        // Récupérer la liste des roles
        $roles = Role::all();

        return view('users.list_user', compact('users', 'roles')); // Envoie les données à la vue
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $roles = Role::all();

        $users = User::query()
            ->where('firstName', 'like', "%$search%")
            ->orWhere('lastName', 'like', "%$search%")
            ->orWhere('gender', 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ->with('role') // Charger la relation category
            ->orWhereHas('role', function ($query) use ($search) {
                $query->where('role_name', 'like', "%$search%");
            })
            ->paginate(5); // Utilisez paginate si vous souhaitez paginer les résultats

        return view('users.list_user', compact('users', 'search', 'roles'));
    }

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

    public function show($id)
    {
        // $users = User::findOrFail($id);
        $users = User::join('role', 'users.role_id', '=', 'role.id')
            ->select(
                'users.role_id',
                'users.id',
                'users.firstName',
                'users.lastName',
                'users.gender',
                'users.email',
                'users.phoneNumber',
                'users.status',
                'users.updated_at',
                'users.created_at',
                'role.role_name'
            )
            ->where('users.id', $id)
            ->first();

        // Détermine l'image à afficher en fonction du genre
        if ($users->gender == 'masculin') {
            $image = 'homme.png';
        } else {
            $image = 'female.png';
        }

        return view('users.show_user', compact('users', 'image', $users));
    }

    public function profil($id)
    {
        $users = User::join('role', 'users.role_id', '=', 'role.id')
            ->select(
                'users.role_id',
                'users.id',
                'users.firstName',
                'users.lastName',
                'users.gender',
                'users.email',
                'users.phoneNumber',
                'users.status',
                'users.updated_at',
                'users.created_at',
                'role.role_name'
            )
            ->where('users.id', $id) // Assurez-vous de filtrer par l'utilisateur connecté
            ->first();

        // Déterminer l'image à afficher en fonction du genre
        if (Auth::user()->gender == 'masculin') {
            $image = 'image/homme.png';
        } else {
            $image = 'image/female.png';
        }

        return view('users.profile_user', compact('users', 'image'));
    }

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
