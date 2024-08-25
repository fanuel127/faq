<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use Illuminate\Support\Facades\Hash;

//use Laravel\Ui\Presets\React;

class TestController extends Controller
{
    public function index()
    {
        $tests = test::all();
        return view('Tests.index', ['Tests' => $tests]);
    }
    public function create()
    {

        return view('Tests.create');
    }
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

        Test::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'gender' => $request['gender'],
            'phoneNumber' => $request['phoneNumber'],
            'role_id' =>  $request['role_id'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'password' => $request['password'],
        ]);
        return redirect(route('Tests.index'));
    }

public function edit( $id)
{
    $tests = Test::find($id);

    return view('tests.edit',['Tests' => $tests]);
}
public function update( $id, Request $request)
{

    $tests = Test::find($id);
    $data = $request->validate([
        'firstName' => 'required|string',
        'lastName' => 'required',
        'gender' => 'required|in:masculin,feminin',
        'phoneNumber' => 'required',
        'role_id' => 'required|exists:role,id',


    ]);

    $tests->save();
    $tests->update($data);
    return redirect(route('Test.index'))->with('success','User update sucessfully');


}
public function show($id)
{
    $tests = Test::find($id);
    if ($tests->gender =='male'){
        $image ='male.png';
    }else{
        $image = 'female.png';
    }

    return view('Tests.show' ,compact('test', 'image'));
}
}
