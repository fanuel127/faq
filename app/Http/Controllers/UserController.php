<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Role;

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
    }

    public function listRole()
    {

        $roles= Role::all();
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
            'gender' => 'required|in:male,female',
            'phoneNumber' => 'required',
            'password' => 'required|max:8|confirmed',
            'email' => 'required|email|unique',
            'role_id' => 'required|exists:role,id',

        ]);

        User::create([
            'firstname' => $request['firstname'],
            'lastName' => $request['lastname'],
            'gender' => $request['gender'],
            'phoneNumber' => $request['phoneNumber'],
            'role_id' =>  $request['role_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('user')->with('flash_message', 'Utilisateur Ajouter!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*public function show($id)
    {
        $user = User::find($id);
        return view('users.show_user')->with('users', $user);
    }*/
    public function show(User $user)
    {
       // $roles = Role::all();
        return view('users.show_user', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::find($id);
        return view('users.edit_user')->with('users', $user);
    }*/
    public function edit(User $user)
    {
        return view('users.edit_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function activate(Request $request, User $user)
    {
        // Check if the user is already active
        if ($user->is_active) {
            return response()->json([
                'message' => 'utilisateur est deja active.',
            ], 400);
        }

        // Activate the user
        $user->is_active = true;
        $user->save();

        return response()->json([
            'message' => 'utilisateur a été activé.',
        ], 200);
    }

    /**
     * Deactivate a user account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Request $request, User $user)
    {
        // Check if the user is already inactive
        if (!$user->is_active) {
            return response()->json([
                'message' => 'utilisateur est déjà inactif.',
            ], 400);
        }

        // Deactivate the user
        $user->is_active = false;
        $user->save();

        return response()->json([
            'message' => 'utilisateur a été désactivé.',
        ], 200);
    }
}
