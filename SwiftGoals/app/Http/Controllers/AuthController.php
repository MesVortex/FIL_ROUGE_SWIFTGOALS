<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
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
    public function loginUser(LoginRequest $request)
    {
        // $fields = $request->validated();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect('/dashboard');
            } else if ($user->role == 'client') {
                return redirect()->intended('/home');
            }
        }
        return redirect('/login')->with('error', 'Login details are not valid');
    }

    public function registerUser(RegisterRequest $request)
    {
        $fields = $request->validated();
        $fields['password'] = Hash::make($fields['password']);
        $fields['role'] = 'client';
        $user = User::create($fields);
        if (!$user) {
            return redirect('/register')->with('error', 'Something went wrong');
        }
        Auth::login($user);
        return redirect('/home');
    }

    public function logout(User $user){
        auth()->logout();
        return redirect('/login');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
