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
        $users = User::paginate(10);
        return view('admin.index')->with('users', $users);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    //user

    public function listRole()
    {
        $roles = Role::all();
        return view('users.list_user')->with('roles', $roles);
    }

    public function dashboard()
    {
        return view('admin.dashboard');
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


    }

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

    //questions

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexQuestions()
    {
        $questions = Question::paginate(10);
        return view ('questions.list_question')->with('questions', $questions);

    }
    public function listCategoryEdit()
    {
        $categories = Category::all();
        return view('questions.edit_question' , compact('categories'));
    }

    public function listCategoryAdd()
    {
        $categories = Category::all();
        return view('questions.add_question' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuestions(Request $request)
    {
        $request->validate([
            'questionName'=> 'required|string|max:255',
            'category_id'=>'required|string|exists:category,id',
            'description'=> 'required',
            'answer' => 'required',
            'video' => 'nullable' ,
            'photo'=>'required',
        ]);

        // $imagePath =
        // $request->file('image') ?
        // $request->file('image')->store('images','public') :
        // $videoPath =
        // $request->file('video') ?
        // $request->file('video')->store('videos','public') : null ;

        Question::createQuestions([
            'questionName' => $request->questionName,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'answer' => $request->answer,
            'photo' =>  $request->photo,
            'video' =>  $request->video,
        ]);

        return redirect(url('questions/list_question'))->with('success', 'Questions Ajouter!');
    }

    public function updateQuestions($id, Request $request)
    {
        $data = $request->validate([
            'questionName' => 'required|string',
            'category_id' => 'required|exists:category,id',
            'description' => 'required',
            'answer' => 'required',
            'photo' => 'required',
            'video' =>  'required',
        ]);

        Question::whereId($id)->update($data);

        // return redirect()->url('/questions/list_question')->with('Success', '');
        return redirect('/questions/list_question')->with('success', 'question modifier');

    }

    public function createQuestions()
    {
        return view('questions.add_question');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showQuestions($id)
    {
        $questions = Question::find($id);
        $answers = $questions->answers;
        return view('questions.show_question')->with( 'questions' , $answers);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editQuestions($id)
    {
        $questions = Question::find($id);
        return view('questions.edit_question',compact('questions'));
    }
}
