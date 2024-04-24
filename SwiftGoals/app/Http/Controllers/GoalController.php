<?php

namespace App\Http\Controllers;

use App\Http\Requests\goalRequest;
use App\Http\Requests\ImageRequest;
use App\Models\Category;
use App\Models\Goal;
use App\Models\Step;
use App\Models\Tinystep;
use App\trait\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GoalController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userID = auth()->user()->id;
        $goals = Goal::withCount(['steps' => function ($query) {
            $query->where('isComplete', 1);
        }])
            ->where('userID', $userID)
            ->where('isTemplate', 0)
            ->where('isBanned', 0)
            ->get();

        return view('user.goals.goals', compact('goals'));
    }

    public function ajaxIndex()
    {
        $userID = auth()->user()->id;
        $goals = Goal::where('userID', $userID)
            ->where('isTemplate', 0)
            ->get();
        return response()->json([
            'goals' => $goals,
        ]);
    }

    public function explore()
    {
        $templates = Goal::where('isTemplate', 1)
            ->with('categories', 'users')
            ->paginate(9);
        $categories = Category::all();
        return view('user.explore', compact('templates', 'categories'));
    }

    public function filter(int $id)
    {
        if ($id == 0) {
            $templates = Goal::where('isTemplate', 1)
                ->with('categories', 'users', 'image')
                ->get();
            return response()->json([
                'templates' => $templates,
                'currentFilter' => 'All',
            ]);
        } else {
            $templates = Goal::where('isTemplate', 1)
                ->where('categoryID', $id)
                ->with('categories', 'users', 'image')
                ->get();
            return response()->json([
                'templates' => $templates,
                'currentFilter' => '',
            ]);
        }
    }

    public function search(Request $request)
    {
        $query = $request->search;

        if ($query != '') {
            $templates = Goal::where('isTemplate', 1)
                ->where('title', 'like', '%' . $query . '%')
                ->orWhere('mainGoal', 'like', '%' . $query . '%')
                ->with('categories', 'users', 'image')
                ->orderBy('id', 'desc')
                ->get();

            return response()->json([
                'templates' => $templates,
                'currentFilter' => $query,
            ]);
        } else {
            $templates = Goal::where('isTemplate', 1)
                ->with('categories', 'users', 'image')
                ->get();
            return response()->json([
                'templates' => $templates,
                'currentFilter' => 'All',
            ]);
        }
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
        $newGoal = Goal::create($data);
        return response()->json([
            'success' => 'goal added successfully!',
            'goal' => $newGoal,
        ]);
    }

    public function changeBackground(ImageRequest $request)
    {

        $goal = Goal::where('id', $request->goalID)->first();
        $this->storeImg($goal, $request->file('image'));

        return redirect()->back()->with('success', 'Background Updated successfully!');
    }

    public function copyTemplate(Goal $goal)
    {
        $goalCopy = Goal::where('id', $goal->id)->with('steps')->first();
        $goalCopy->userID = auth()->user()->id;
        $goalCopy->isTemplate = 0;
        $goalCopy->categotyID = null;
        $newGoal = Goal::create($goalCopy->toArray());

        foreach ($goalCopy->steps as $step) {
            $newStep = Step::where('id', $step->id)->with('tinysteps')->first();
            $newStep = Step::create($step->toArray());
            $newStep->goalID = $newGoal->id;
            $newStep->save();
            foreach ($newStep->tinysteps as $tinystep) {
                $tinystep = Tinystep::create($tinystep->toArray());
                $tinystep->stepID = $newStep->id;
                $tinystep->save();
            }
        }

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
        $highPrioritysteps = Step::where('goalID', $goal->id)
            ->where('priority', 1)
            ->get();
        $mediumPrioritysteps = Step::where('goalID', $goal->id)
            ->where('priority', 2)
            ->get();
        $lowPrioritysteps = Step::where('goalID', $goal->id)
            ->where('priority', 3)
            ->get();

        $categories = Category::all();

        if ($goal->isTemplate == 1 && Auth::user()->id != $goal->userID) {
            return view('user.goals.template', compact('goal', 'highPrioritysteps', 'mediumPrioritysteps', 'lowPrioritysteps'));
        }
        return view('user.goals.goalPage', compact('goal', 'highPrioritysteps', 'mediumPrioritysteps', 'lowPrioritysteps', 'categories'));
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

    public function makeTemplate(Request $request, Goal $goal)
    {
        $validation = $request->validate([
            'category' => 'required|exists:categories,id',
        ]);

        $goal->update([
            'isTemplate' => true,
            'categoryID' => $validation['category'],
        ]);
        return response()->json([
            'step' => $goal,
            'success' => 'this goal is now a template!',
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

    public function banTemplate(Goal $goal)
    {
        if ($goal->isBanned == 1) {
            $goal->update([
                'isBanned' => 0,
            ]);

            return response()->json([
                'success' => 'Complete!',
                'message' => 'Template Restored Successfully!',
            ]);

        } else {
            $goal->update([
                'isBanned' => 1,
            ]);

            return response()->json([
                'success' => 'Complete!',
                'message' => 'Template Banned Successfully!',
            ]);
        }
    }
}
