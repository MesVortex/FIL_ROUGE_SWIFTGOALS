<?php

namespace App\Http\Controllers;

use App\Http\Requests\TinyStepRequest;
use App\Models\Tinystep;
use Illuminate\Http\Request;

class TinystepController extends Controller
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
    public function store(TinyStepRequest $request)
    {
        $data = $request->validated();
        $newTinyStep = Tinystep::create($data);
        return response()->json([
            'tinyStep' => $newTinyStep,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tinystep $tinystep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tinystep $tinystep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TinyStepRequest $request, Tinystep $tinystep)
    {
        $data = $request->validated();
        $updatedStep = $tinystep->update($data);
        return response()->json([
            'tinyStep' => $updatedStep,
        ]);
    }

    public function updateProgress(Tinystep $tinystep)
    {
        if ($tinystep->isComplete) {
            $success = $tinystep->update([
                'isComplete' => false,
            ]);
        } else {
            $success = $tinystep->update([
                'isComplete' => true,
            ]);
        }
        return response()->json([
            'sucess' => $success,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $tinyStep = Tinystep::find($request->tinyStepID);
        $tinyStep->delete();
        return response()->json([
            'success' => 'tiny step deleted successfully!',
        ]);
    }
}
