<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/home', function () {
    return view('user.home');
})->name('home');

Route::get('/goals', function () {
    return view('user.goals.goals');
})->name('goals');

Route::get('/goals/pinned', function () {
    return view('user.goals.pinnedGoals');
})->name('pinned.goals');

Route::get('/goals/id', function () {
    return view('user.goals.goalPage');
})->name('goal.page');

Route::get('/explore', function () {
    return view('user.explore');
})->name('explore');

Route::get('/community', function () {
    return view('user.community');
})->name('community');

Route::get('/profile', function () {
    return view('user.profile');
})->name('profile');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');