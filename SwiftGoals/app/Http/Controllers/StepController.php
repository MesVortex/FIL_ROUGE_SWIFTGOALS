<?php

namespace App\Http\Controllers;

use App\Http\Requests\StepRequest;
use App\Models\Step;
use Illuminate\Http\Request;

class StepController extends Controller
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
    public function store(StepRequest $request)
    {
        $data = $request->validated();
        $newStep = Step::create($data);
        return response()->json([
            'step' => $newStep,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Step $step)
    {
        $step = Step::where('id', $step->id)->with('tinySteps')->first();
        return response()->json([
            'step' => $step,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Step $step)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StepRequest $request)
    {
        $step = Step::find($request->stepID);
        $data = $request->validated();
        $updatedStep = $step->update($data);
        return response()->json([
            'step' => $updatedStep,
        ]);
    }

    public function updateDescription(Request $request)
    {
        $step = Step::find($request->stepID);
        $updatedStep = $step->update([
            'description' => $request->stepDescription,
        ]);
        return response()->json([
            'step' => $updatedStep,
        ]);
    }

    public function updateDueDate(Request $request, Step $step)
    {
        $step->update([
            'dueDate' => $request->date,
        ]);
        return response()->json([
            'step' => $step,
        ]);
    }

    public function completeProgress(Step $step)
    {
        $step->update([
            'isComplete' => true,
        ]);
        return response()->json([
            'step' => $step,
        ]);
    }

    public function incompleteProgress(Step $step)
    {
        $step->update([
            'isComplete' => false,
        ]);
        return response()->json([
            'step' => $step,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Step $step)
    {
        $step->delete();
        return response()->json([
            'success' => 'step deleted successfully!',
        ]);

    }
}
