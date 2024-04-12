<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TinystepController;
use App\Models\Step;
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
    return view('admin.categorie');
})->name('dashboard');


Route::resource('/goal', GoalController::class)->except('destroy');
Route::get('/goal/ajax/index', [GoalController::class, 'ajaxIndex'])->name('goal.ajaxIndex');
Route::delete('/goal/destroy', [GoalController::class, 'destroy'])->name('goal.destroy');

Route::resource('/step', StepController::class)->except(['update', 'destroy', 'show']);
Route::get('/step/show', [StepController::class, 'show'])->name('step.show');
Route::delete('/step/destroy', [StepController::class, 'destroy'])->name('step.destroy');
Route::put('/step/update', [StepController::class, 'update'])->name('step.update');

Route::resource('/tinyStep', TinystepController::class)->except(['update', 'destroy']);
Route::put('/tinyStep/update', [TinystepController::class, 'update'])->name('tinyStep.update');
Route::delete('/tinyStep/destroy', [TinystepController::class, 'destroy'])->name('tinyStep.destroy');