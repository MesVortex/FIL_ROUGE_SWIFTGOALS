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
        $data['description'] = 'jfkdjh';
        $newStep = Step::create($data);
        return response()->json([
            'step' => $newStep,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $step = Step::where('id', $request->stepID)->with('tinySteps')->get();
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
        $data['description'] = 'jfkdjh';
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $step = Step::find($request->stepID);
        $step->delete();
        return response()->json([
            'success' => 'step deleted successfully!',
        ]);

    }
}
