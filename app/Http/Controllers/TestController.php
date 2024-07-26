<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;
use Laravel\Ui\Presets\React;

class TestController extends Controller
{
    public function index()
    {
        $test = test::all();
        return view('Tests.index', ['Tests' => $test]);
    }
    public function create()
    {

        return view('Tests.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName' => 'required',
            'description' => 'required',

        ]);
        $newTest = test::create($data);
        return redirect(route('Test.index'));
    }

public function edit(Test $test)
{

    return view('tests.edit',['Test' => $test]);
}
public function update(Test $test, Request $request)
{
    $data = $request->validate([
        'firstName' => 'required',
        'description' => 'required',

    ]);
    $test->update($data);
    return redirect(route('Test.index'))->with('success','test update sucessfully');


}
}
