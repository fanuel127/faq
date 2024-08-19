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
    public function storeQuestion(Request $request)
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

        Question::create([
            'questionName' => $request->questionName,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'answer' => $request->answer,
            'photo' =>  $request->photo,
            'video' =>  $request->video,
        ]);

        return redirect(url('questions/list_question'))->with('success', 'Questions Ajouter!');
    }

    public function update($id, Request $request)
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
    public function show($id)
    {
        $questions = Question::find($id);
        $answers = $questions->answers;
        return view('questions.show_question')->with( $questions , $answers);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $questions = Question::find($id);
        return view('questions.edit_question',compact('questions'));
    }


}
