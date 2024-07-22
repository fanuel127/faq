<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Question;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view ('question.list_question')->with('questions', $questions);

    }
    public function listCategory()
    {

        $categories=Category::all();
        return view('question.list_question')->with('categories', $categories);
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
            'questionName'=> 'required',
            'category_id'=>'required|unique|exists:user,id',
            'description'=> 'required',
            'answer' => 'required',
            'photo'=>'required|unique',
            'user_id' => 'required|exists:user,id',
        ]);
        $input = $request->all();
        Question::create($input);
        return redirect('question.add_question')->with('flash_message', 'Question created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
    public function edit($id)
    {
        $question = Question::find($id);
        return view('questions.edit_question')->with('questions', $question);
    }


}
