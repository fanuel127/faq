<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\Controller;
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
        return view ('users.list_user' , ['users' => $users]);
    }

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
            'gender' => 'required|in:male,female',
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
    /*public function show($id)
    {
        $user = User::find($id);
        return view('users.show_user')->with('users', $user);
    }*/
    public function show(User $user)
    {

        return view('users.show_user', compact('user'));
    }

       public function update(string $id , Request $request)
       {
           $data = $request->validate([
               'firstName' => 'required|string',
               'lastName',
               'gender' => 'required|in:male,female',
               'phoneNumber' => 'required',
               'password' => 'required|max:8|confirmed',
               'email' => 'required|email|unique:users,email',
               'role_id' => 'required|exists:role,id',

           ]);
           $user = User::find($id);
           $user-> update($data);
           return redirect(route('users.list_user'))-> with('Success','user update sucessfully');
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
      public function edit(string $id)
      {

          $user = User::find($id);

          return view('users.edit_user', compact('user'));
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
        $user = User::FindOrFail($id);
        $user->status = !$user->status;
        $user->save();
        return redirect('users.list_user')->with('success', 'Utilisateur active!');
    }
}
