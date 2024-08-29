<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;


use Illuminate\Support\Facades\DB;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexQuestions()
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
             ->get(
             );
        return view('questions.list_question')->with('questions', $questions);
    }

    public function showQuestions($id)
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
            ->where('questions.id',$id)
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

        ]);

        //  $request->validate([
        //     'questionName' => 'required',
        //     'category_id' => 'required|exists:Category,id',
        //     'description' => 'required|string',
        //     'answer' => 'required|string',
        //     'video' => 'required|string',
        //     'photo' => 'required',
        //     // 'user_id' => 'required|exists:user,id',
        // ]);

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
        $questions = Question::find($id);
        return view('questions.show_question',compact('questions'));
// Retrieving a question by its ID

        // $question = Question::find($id);
        // Retrieving a question by its ID
        $question = Question::with('user')->find($id);
        $answers = $question->answers;
        $photo = $question->photo;
        $video = $question->video;
        // Accessing the user who created the question
        $user = $question->user;
        return view('questions.show_question', compact($question, $answers, $photo, $video, $user));
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
