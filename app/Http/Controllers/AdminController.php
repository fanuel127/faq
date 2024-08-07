<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Support\Facades\Hash;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $users = User::all();
        return view('admin.index')->with('users', $users);
    }

    //user

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
            'gender' => 'required|in:male,female',
            'phoneNumber' => 'required',
            'role_id' => 'required|exists:role,id',

        ]);

        $users->update($data);
        $users->save();
        return redirect()->route('users.list_user')->with('Success', 'utilisateur modifier');
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
    // public function toggleStatus(string $id)
    // {
    //     $users = User::FindOrFail($id);
    //     $users->status = !$users->status;
    //     $users->save();
    //     return redirect('users.list_user')->with('success', 'Utilisateur active!');
    // }
    public function status($id)
    {
       $user = User::find($id);
    //    $status = optional($i)->status; // Cela retourne null si $objet est null
       $user->status =!$user->status;
      if( $user->save()){

          return redirect(route('users.list_user'))->with('success', 'Utilisateur active!');
        }else{
          return redirect(route('status'));

      };
       


    public function search(Request $request)
    {
        $query = $request->input('query');

        $users = User::where('firstName', 'like', "%$query%")
            ->orWhere('email', 'like', "%$query%")
            ->get();

        return view('admin.search', [
            'users' => $users,
            'query' => $query,
        ]);
    }

    // questions
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexQuestion()
    {
        $questions = Question::all();
        return view ('questions.list_question')->with('questions', $questions);

    }
    public function listCategoryQuestion()
    {

        $categories=Category::all();
        return view('questions.list_question')->with('categories', $categories);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuestion(Request $request)
    {
        $input = $request->validate([
            'questionName'=> 'required',
            'category_id'=>'required|unique|exists:user,id',
            'description'=> 'required',
            'answer' => 'required',
            'video' => 'required' ,
            'photo'=>'required|unique',
            'user_id' => 'required|exists:user,id',
        ]);
        $input = $request->all();
        Question::createQuestion($input);
        return redirect('questions.list_question')->with('flash_message', 'Question created successfully.');
    }

    public function createQuestion()
    {
        return view('questions.add_question');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showQuestion($id)
    {
        $question = Question::find($id);
        $answers = $question->answers;
        return view('questions.show_question')->with( $question , $answers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editQuestion($id)
    {
        $question = Question::find($id);
        return view('questions.edit_question')->with('questions', $question);
    }
}
