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
