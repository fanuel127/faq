<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Log;
use App\Models\Question;


use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexQuestions(Request $request)
    {
        $categories = Category::all();
        $questions = Question::join('category', 'questions.category_id', '=', 'category.id')
            ->select(
                'questions.category_id',
                'questions.id',
                'questions.questionName',
                'questions.description',
                'questions.photo',
                'questions.photo2',
                'questions.video',
                'questions.answer',
                'questions.updated_at',
                'questions.created_at',
                'category.name'
            )
            ->orderBy('questions.questionName', 'asc')->paginate(6);

        $query = Question::query();

        // Filtre par catégorie
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Gestion du tri
        if ($request->filled('sortField') && $request->filled('sortOrder')) {
            $sortField = $request->input('sortField'); // 'questionName' par exemple
            $sortOrder = $request->input('sortOrder'); // 'asc' ou 'desc'

            if ($sortField === 'questionName') {
                $query->orderBy('questionName', $sortOrder); // Assurez-vous que le champ est correct
            }
        }

        // Récupérez les questions filtrées
        $questions = $query->paginate(10);

        $totalQuestion = Question::count();

        // ->get();
        return view('questions.list_question', compact('questions', $questions, 'categories','totalQuestion'));
    }
    public function indexQuestionsclient(Request $request)
    {
        // $questions = Question::paginate(10);
        // return view ('questions.list_question')->with('questions', $questions);
        $categories = Category::all();
        $questions = Question::join('category', 'questions.category_id', '=', 'category.id')
            ->select(
                'questions.category_id',
                'questions.id',
                'questions.questionName',
                'questions.description',
                'questions.photo',
                'questions.photo2',
                'questions.video',
                'questions.answer',
                'questions.updated_at',
                'questions.created_at',
                'category.name'
            )
            ->orderBy('questions.questionName', 'asc');
            $query = Question::query();

            // Filtre par catégorie
            if ($request->filled('category_id')) {
                $query->where('category_id', $request->input('category_id'));
            }
        // ->get();
        $questions = $query->paginate(8);

        return view('client.question_list', compact('questions', $questions, 'categories'));
    }

    public function showQuestions($id)
    {
        // $questions = Question::paginate(10);
        // return view ('questions.list_question')->with('questions', $questions);
        $categories = Category::all();
        $questions = Question::join('category', 'questions.category_id', '=', 'category.id')
            ->select(
                'questions.category_id',
                'questions.id',
                'questions.questionName',
                'questions.description',
                'questions.photo',
                'questions.photo2',
                'questions.video',
                'questions.answer',
                'questions.updated_at',
                'questions.created_at',
                'category.name'
            )
            ->orderBy('questions.questionName', 'asc')
            ->where('questions.id', $id)
            ->first();
        return view('questions.show_question', compact('questions', $questions, 'categories'));
    }
    public function showQuestionsclient($id)
    {
        // $questions = Question::paginate(10);
        // return view ('questions.list_question')->with('questions', $questions);
        $questions = Question::join('category', 'questions.category_id', '=', 'category.id')
            ->select(
                'questions.category_id',
                'questions.id',
                'questions.questionName',
                'questions.description',
                'questions.photo',
                'questions.photo2',
                'questions.video',
                'questions.answer',
                'questions.updated_at',
                'questions.created_at',
                'category.name'
            )
            ->orderBy('questions.questionName', 'asc')
            ->where('questions.id', $id)
            ->first();
        return view('client.question_detail', compact('questions', $questions));
    }

    public function totalQuestions(Request $request)
    {

        $categories = Category::all();
        $query = Question::query();

        // Filtre par catégorie
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Gestion du tri
        if ($request->filled('sortField') && $request->filled('sortOrder')) {
            $sortField = $request->input('sortField'); // 'questionName' par exemple
            $sortOrder = $request->input('sortOrder'); // 'asc' ou 'desc'

            if ($sortField === 'questionName') {
                $query->orderBy('questionName', $sortOrder); // Assurez-vous que le champ est correct
            }
        }

        // Récupérez les questions filtrées
        $questions = $query->paginate(10);

        $totalQuestion = Question::count();

        return view('questions.list_question', compact('questions', 'categories','totalQuestion'));
    }

    public function totalQuestionsclient(Request $request)
    {

        $categories = Category::all();
        $query = Question::query();

        // Filtre par catégorie
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        // Récupérez les questions filtrées
        $questions = $query->paginate(8);

        $totalQuestion = Question::count();

        return view('client.question_list', compact('questions', 'categories','totalQuestion'));
    }

    public function listCategoryQuestion()
    {
        $categories = Category::all();
        return view('questions.list_question')->with('categories', $categories);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $categories = Category::all();

        $totalQuestion = Question::count();

        $questions = Question::query()
            ->where('questionName', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->with('category') // Charger la relation category
            ->orWhereHas('category', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->paginate(10); // Utilisez paginate si vous souhaitez paginer les résultats

        return view('questions.list_question', compact('questions', 'search', 'categories','totalQuestion'));
    }
    public function searchQuestionsclient(Request $request)
    {
        $search = $request->input('search_client_question');

        $categories = Category::all();

        $questions = Question::query()
            ->where('questionName', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->with('category') // Charger la relation category
            ->orWhereHas('category', function ($query) use ($search) {
                $query->where('name', 'like', "%$search%");
            })
            ->paginate(8); // Utilisez paginate si vous souhaitez paginer les résultats

        return view('client.question_list', compact('questions', 'search', 'categories'));
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
            'video' => 'required',
            'photo' => 'required',
            'photo2' => 'required',

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

        return redirect(url('questions/add_question'))->with('Success', 'Question Ajoutée !');
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
        return redirect('/questions/list_question')->with('success', 'question modifiée');
    }


    public function createQuestions()
    {
        $questions = Question::all();
        $categories = Category::all();
        return view('questions.add_question', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
