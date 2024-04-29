<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 'client')->get();

        return view('admin.dashboard', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->search;

        if ($query != '') {
            $users = User::where('role', 'client')
                ->where('name', 'like', '%' . $query . '%')
                ->orWhere('email', 'like', '%' . $query . '%')
                ->get();

            return response()->json([
                'users' => $users,
            ]);
        } else {
            $users = User::where('role', 'client')
                ->get();
            return response()->json([
                'users' => $users,
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(UserRequest $request)
    {
        $fields = $request->validated();
        $success = Auth::user()->update($fields);
        return redirect()->back()->with('success', 'personal info updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function banUser(User $user)
    {
        if ($user->isBanned == 1) {
            $user->update([
                'isBanned' => 0,
            ]);

            return response()->json([
                'success' => 'Complete!',
                'message' => 'User Unblocked Successfully!',
                'user' => $user,
            ]);

        } else {
            $user->update([
                'isBanned' => 1,
            ]);

            return response()->json([
                'success' => 'Complete!',
                'message' => 'Template Blocked Successfully!',
                'user' => $user,
            ]);
        }
    }
}
