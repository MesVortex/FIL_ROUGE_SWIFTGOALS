<?php

namespace App\Http\Controllers;

use App\Http\Requests\goalRequest;
use App\Models\Goal;
use App\Models\Step;
use Illuminate\Http\Request;

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

    public function ajaxIndex()
    {
        $userID = 1;
        $goals = Goal::where('userID', $userID)
            ->where('isTemplate', 0)
            ->get();
        return response()->json([
            'goals' =>$goals,
        ]);
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
        $steps = Step::where('goalID', $goal->id)->get();
        return view('user.goals.goalPage', compact('goal', 'steps'));
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
        // $goal->update($request->validated());
    }

    public function makeTemplate(Step $step)
    {
        $step->update([
            'isTemplate' => true,
        ]);
        return response()->json([
            'step' => $step,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $goal = Goal::find($request->goalID);
        $goal->delete();
        return response()->json([
            'success' => 'goal deleted successfully!',
        ]);
    }
}
