<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;

class AnswersController extends Controller
{


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //validate the form data
        $validated = $request->validate([
            'content' => 'required|min:15',
            'question_id' => 'required|integer',
      ]);

      $answer = new Answer();
      $answer->content = $validated['content'];

      $question = Question::findOrFail($validated['question_id']);


      $answer = $question->answers()->save($answer);

      return redirect()->route('questions.show',$question->id);

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
