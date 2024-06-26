<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoteRequest;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(VoteRequest $request)
    {
        $fields = $request->validated();
        $fields['clientID'] = auth()->user()->id;
        $fields['type'] = 'upVote';
        $newVote = Vote::create($fields);
        return response()->json([
            'vote' => $newVote
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VoteRequest $request)
    {
        Vote::where('clientID', auth()->user()->id)->where('questionID', $request->questionID)->delete();
        return redirect()->back()->with('success', 'vote removed successfully!');
    }
}
