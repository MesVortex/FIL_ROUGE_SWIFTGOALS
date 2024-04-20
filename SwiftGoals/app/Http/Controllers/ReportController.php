<?php

namespace App\Http\Controllers;

use App\Http\Requests\reportRequest;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
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
    public function store(reportRequest $request)
    {
        $fields = $request->validated();
        if($fields['content'] == 'other'){
            $request->validate([
                'reportDescription' => 'required|string|max:255',
            ]);

            $fields['content'] = $request->reportDescription;
        }
        $newReport = Report::create($fields);

        return response()->json([
            'report' => $newReport,
            'success' => 'report submitted!',
            'message' => 'thank you for your feedeback',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
