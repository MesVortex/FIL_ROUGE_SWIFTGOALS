<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = auth()->user()->id;
        $questions = Question::all();
        $userQuestions = Question::where('clientID', $userID)->get();
        return view('user.community', compact('questions', 'userQuestions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request)
    {
        $fields = $request->validated();
        $fields['clientID'] = auth()->user()->id;
        $newQuestion = Question::create($fields);
        return redirect()->back()->with('success', 'question added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $question = Question::where('id',$question->id)->with('answers')->first();
        return response()->json([
            'question' => $question
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
