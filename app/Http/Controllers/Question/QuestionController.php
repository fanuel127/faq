<?php

namespace App\Http\Controllers\Question;

use Illuminate\Http\Request;

use App\Models\Question;
class QuestionController extends    QuestionController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view ('questions.list_question')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.add_question');
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
            'questionName'=> 'required|max:255',
            'category_id'=>'required',
            'description'=> 'required',
            'answer' => 'required',
            'photo'=>'required',
        ]);
        $input = $request->all();
        Question::create($input);
        return redirect('question')->with('flash_message', 'Question created successfully.');
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = Question::find($id);
        $input = $request->all();
        $question->update($input);
        return redirect('question')->with('flash_message', 'Question updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect('question')->with('flash_message', 'Question deleted!');

    }
}
