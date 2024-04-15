<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TinystepController;
use App\Http\Controllers\UserController;
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

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginUser'])->name('user.login');
Route::post('/register', [AuthController::class, 'registerUser'])->name('user.register');

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::resource('/goal', GoalController::class)->except('destroy');
    Route::get('/goal/ajax/index', [GoalController::class, 'ajaxIndex'])->name('goal.ajaxIndex');
    Route::get('/goal/{step}/makeTemplate', [GoalController::class, 'makeTemplate'])->name('goal.makeTemplate');
    Route::delete('/goal/destroy', [GoalController::class, 'destroy'])->name('goal.destroy');

    Route::resource('/step', StepController::class)->except(['update']);
    Route::put('/step/update', [StepController::class, 'update'])->name('step.update');
    Route::patch('/step/{step}/completeprogress', [StepController::class, 'completeProgress'])->name('step.completeProgress');
    Route::patch('/step/{step}/incompleteprogress', [StepController::class, 'incompleteProgress'])->name('step.incompleteProgress');
    Route::patch('/step/description/update', [StepController::class, 'updateDescription'])->name('step.updateDescription');
    Route::patch('/step/{step}/date/update', [StepController::class, 'updateDueDate'])->name('step.updateDueDate');

    Route::resource('/tinystep', TinystepController::class)->except('destroy');
    Route::patch('/tinystep/{tinystep}/updateprogress', [TinystepController::class, 'updateProgress'])->name('tinystep.updateProgress');
    Route::delete('/tinystep/destroy', [TinystepController::class, 'destroy'])->name('tinystep.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

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
});
