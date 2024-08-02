<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Models\Role;
use GrahamCampbell\ResultType\Success;

class UserController extends  Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.list_user')->with('users', $users);
        // return view('users.list_user', ['users' => $users]);


    }



    // public function search(Request $request)
    // {
    //     $posts = User::all();
    //     return view('users.list_user',compact('users','query'));
    // }
    // public function search(Request $request)
    // {
    //     $users = User::all();

    //     if ($request->has('search')) {
    //         $users = $users->filter(function ($user) use ($request) {
    //             return stripos($user->firstName, $request->input('search')) !== false
    //                 || stripos($user->gender, $request->input('search')) !== false;
    //         });
    //     }

    //     return view('users.list_user', compact('users'));
    // }

    public function total(Request $request)
    {
        $users = User::all();

        if ($request->has('search')) {
            $users = $users->filter(function ($user) use ($request) {
                return stripos($user->firstName, $request->input('search')) !== false
                    || stripos($user->gender, $request->input('search')) !== false;
            });
        }

        $usersCount = $users->count();
        if ($request->has('search')) {
            $users = $users->filter(function ($user) use ($request) {
                return stripos($user->firstName, $request->input('search')) !== false
                    || stripos($user->gender, $request->input('search')) !== false;
            });
        }

        if ($request->has('sort') && $request->input('sort') === 'asc') {
            $users = $users->sortBy('firstName');
        } elseif ($request->has('sort') && $request->input('sort') === 'desc') {
            $users = $users->sortByDesc('firstName');
        }

        return view('users.list_user', compact('users', 'usersCount'));
    }

    // public function ordre(Request $request)
    // {
    //     $users = User::all();

    //     if ($request->has('search')) {
    //         $users = $users->filter(function ($user) use ($request) {
    //             return stripos($user->firstName, $request->input('search')) !== false
    //                 || stripos($user->email, $request->input('search')) !== false;
    //         });
    //     }

    //     if ($request->has('sort') && $request->input('sort') === 'asc') {
    //         $users = $users->sortBy('firstName');
    //     } elseif ($request->has('sort') && $request->input('sort') === 'desc') {
    //         $users = $users->sortByDesc('firstName');
    //     }

    //     $usersCount = $users->count();

    //     return view('users.list_user', compact('users', 'usersCount'));
    // }

    public function listRole()
    {
        $roles = Role::all();
        return view('users.list_user')->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.add_user');
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
            'password' => $request['password'],
        ]);

        return redirect(route('users.list_user'))->with('success', 'Utilisateur Ajouter!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::find($id);
        return view('users.show_user')->with('users', $users);
    }
    //  public function show(User $users)
    //  {

    //      return view('users.show_user', compact('users'));
    //  }

    public function update(string $id, Request $request)
    {
        $users = User::find($id);
        $data = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required',
            'gender' => 'required|in:masculin,feminin',
            'phoneNumber' => 'required',
            'role_id' => 'required|exists:role,id',

        ]);

        $users->update($data);
        $users->save();
        return redirect()->route('users.list_user')->with('Success', 'utilisateur modifier');
    }
    //  public function update(User $user , Request $request)
    //  {
    //      $data = $request->validate([
    //          'firstName' => 'required|string',
    //          'lastName',
    //          'gender' => 'required|in:male,female',
    //          'phoneNumber' => 'required',
    //          'password' => 'required|max:8|confirmed',
    //          'email' => 'required|email|unique:users,email',
    //          'role_id' => 'required|exists:role,id',

    //      ]);
    //      $user -> update($data);
    //      return redirect(route('users.list_user'))->with('success','utilisateur modifier');
    //  }

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

        $users = User::find($id);
        return view('users.edit_user', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus(string $id)
    {
        $users = User::FindOrFail($id);
        $users->status = !$users->status;
        $users->save();
        return redirect('users.update')->with('success', 'Utilisateur active!');
    }

    public function status($userId)
    {
        $user = User::find($userId);

        if($user)
        {
            if($user->status) {
                $user->status = 1 ;
            }
            else
            {
                $user->status = 0 ;
            }
            $user->save();
        }

        return back();

    }
}
