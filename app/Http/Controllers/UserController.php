<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
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
        return view ('users.list_user')->with('users', $users);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'gender' => 'required',
            'phoneNumber'=> 'required',
            'password' => 'required|max:8|confirmed',
            'email' => 'required',
            'role_id' => 'required|exists:role,id',
            'status' => 'required',
        ]);
        $input = $request->all();
        User::create($input);
        return redirect('users.list_user')->with('flash_message', 'Utilisateur Ajouter!');
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
        return view('users.show_user',compact('user'));
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'Utilisateur Modifier!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            User::destroy($id);
            return redirect('user')->with('flash_message', 'Utilisateur Suprime!');
    }
}
