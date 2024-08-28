<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Support\Facades\Hash;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class AdminController extends Controller
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
            ->orderBy('users.firstName', 'asc')->paginate(4);
            // ->get();
        return view('users.list_user', compact('users', $users));
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
            );
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
            dd($users->toSql()); // View the generated SQL query here

        }

        // Vérifier si l'utilisateur a sélectionné le sexe
        if ($request->has('gender')) {
            $gender = $request->input('gender');
            $users->where('gender', $gender); // Filtre par sexe
            dd($users->toSql()); // View the generated SQL query here
        }


        // Vérifier si l'utilisateur a sélectionné le status
        if ($request->has('status')) {
            $status = $request->input('status');
            $users->where('status', $status); // Filtre par status
            dd($users->toSql()); // View the generated SQL query here

        }

        $users =  $users->get(); //Exécute la requête et récupère les résultats

        // Récupérer la liste des roles
        $roles = Role::all();

        return view('users.list_user', compact('users', 'roles')); // Envoie les données à la vue
    }

    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     // Effectuer la recherche dans votre base de données ou autre logique
    //     $results = User::where('firstName', 'LIKE', "%{$query}%")->paginate(10);

    //     return response()->json([
    //         'data' => $results->items(),
    //         'current_page' => $results->currentPage(),
    //         'last_page' => $results->lastPage(),
    //         'total' => $results->total(),
    //         'links' => $results->links('pagination::bootstrap-4')->toHtml()
    //     ]);
    // }

    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('users.add_user', compact('roles','users'));
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
            ->where('users.id',$id)
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
            ->where('users.id',$id)
            ->first();

        // Détermine l'image à afficher en fonction du genre
        if ($users->gender == 'masculin') {
            $image = 'homme.png';
        } else {
            $image = 'female.png';
        }

        return view('users.profile_user', compact('users', 'image',$image));
    }

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

    // public function status($id)
    // {

    //     //    $status = optional($i)->status; // Cela retourne null si $objet est null
    //     $users->status = !$users->status;
    //     if ($users->save()) {

    //         return redirect(route('users.list_user'))->with('success', 'Utilisateur active!');
    //     } else {
    //         return redirect(route('status'));
    //     };
    // }




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
        // $questions = Question::paginate(10);
        // return view ('questions.list_question')->with('questions', $questions);
        $questions = Question::join('category', 'question.category_id', '=', 'category.id')
            ->select(
                'question.category_id',
                'question.id',
                'question.questionName',
                'question.description',
                'question.photo',
                'question.photo2',
                'question.video',
                'question.answer',
                'question.updated_at',
                'question.created_at',
                'category.name'
            )
            ->orderBy('question.questionName', 'asc')->paginate(6);
            // ->get();
        return view('questions.list_question')->with('questions', $questions);
    }

    public function showQuestions($id)
    {
        // $questions = Question::paginate(10);
        // return view ('questions.list_question')->with('questions', $questions);
        $questions = Question::join('category', 'question.category_id', '=', 'category.id')
            ->select(
                'question.category_id',
                'question.id',
                'question.questionName',
                'question.description',
                'question.photo',
                'question.photo2',
                'question.video',
                'question.answer',
                'question.updated_at',
                'question.created_at',
                'category.name'
            )
            ->orderBy('question.questionName', 'asc')
            ->where('question.id',$id)
            ->first();
        return view('questions.show_question')->with('questions', $questions);
    }

    public function totalQuestions(Request $request)
    {
        $questions = Question::all();

        if ($request->has('search')) {
            $questions = $questions->filter(function ($question) use ($request) {
                return stripos($question->questionName, $request->input('search')) !== false
                    || stripos($question->description, $request->input('search')) !== false;
            });
        }

        $questionsCount = $questions->count();
        if ($request->has('search')) {
            $questions = $questions->filter(function ($question) use ($request) {
                return stripos($question->questionName, $request->input('search')) !== false
                    || stripos($question->description, $request->input('search')) !== false;
            });
        }

        if ($request->has('sort') && $request->input('sort') === 'asc') {
            $questions = $questions->sortBy('questionName');
        } elseif ($request->has('sort') && $request->input('sort') === 'desc') {
            $questions = $questions->sortByDesc('questionName');
        }

        return view('questions.list_question', compact('questions', 'questionsCount'));

        return view('questions.list_question')->with('questions', $questions);
    }
    public function listCategoryQuestion()
    {


        $categories = Category::all();
        return view('questions.list_question')->with('categories', $categories);

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
            'questionName' => 'required|string|max:255',
            'category_id' => 'required|string|exists:category,id',
            'description' => 'required',
            'answer' => 'required',



            'video' => 'nullable',
            'photo' => 'required',
            'photo2' => 'required',

        $input = $request->validate([
            'questionName' => 'required',
            'category_id' => 'required|unique|exists:user,id',
            'description' => 'required',
            'answer' => 'required',
            'video' => 'required',
            'photo' => 'required|unique',
            'user_id' => 'required|exists:user,id',
        ])

        ]);


        Question::create([
            'questionName' => $request['questionName'],
            'category_id' => $request['category_id'],
            'description' => $request['description'],
            'answer' => $request['answer'],
            'photo' =>  $request['photo'],
            'photo2' =>  $request['photo2'],
            'video' =>  $request['video'],
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
        ]);

        Question::whereId($id)->update($data);

        // return redirect()->url('/questions/list_question')->with('Success', '');
        return redirect('/questions/list_question')->with('success', 'question modifier');

    }


    public function createQuestions()
    {
        $categories = Category::all();
        return view('questions.add_question', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sowQuestions($id)
    {



        $question = Question::find($id);
        $answers = $question->answers;
        return view('questions.show_question')->with($question, $answers);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editQuestions($id)
    {
        $categories = Category::all();
        $questions = Question::find($id);
        return view('questions.edit_question', compact('questions', 'categories'));
    }
}
