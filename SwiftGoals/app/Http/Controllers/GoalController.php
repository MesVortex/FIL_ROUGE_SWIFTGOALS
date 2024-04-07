<?php

namespace App\Http\Controllers;

use App\Http\Requests\goalRequest;
use App\Models\Goal;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = 1;
        $goals = Goal::where('userID', $userID)
            ->where('isTemplate', 0)
            ->get();
        return view('user.goals.goals', compact('goals'));
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
    public function store(goalRequest $request)
    {
        $data = $request->validated();
        $data['userID'] = 1;
        $newGoal = Goal::create($data);
        return response()->json([
            'success' => 'goal added successfully!',
            'goal' => $newGoal,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Goal $goal)
    {
        return view('user.goals.goalPage', compact('goal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(goalRequest $request, Goal $goal)
    {
        $goal->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Goal $goal)
    {
        $goal->delete();
        return redirect()->back()->with('success', 'goal deleted successfully!');
    }
}
