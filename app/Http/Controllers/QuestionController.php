<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //go to the model and get a group of records
        $questions = Question::orderBy('id','desc')->paginate(10);

        //return the view and pass in the group of records to loop through
        return view('questions.index')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the form data
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);

        //if successful we want to redirect
        $question = new Question();
        $question->title = $validated['title'];
        $question->description = $request->description;



        //if successful we want to redirect
        if($question->save()){
            return redirect()->route('questions.show', $question->id);
        } else{
            return redirect()->route('questions.create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //use the model to get one record from the data base
        $question = Question::findOrFail($id);
        return view('questions.show')->with('question', $question);
        //show the view nd pass the record to the view
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
