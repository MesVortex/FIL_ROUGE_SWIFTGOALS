<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\Auth\ForgetPassword;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GoalController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TinystepController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\ForgotPasswordController;
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
//forget passwordRoute::get('/forget-password', [ForgotPasswordLinkController::class, 'index'])->name('forgetPassword');

Route::post('/forget-password', [ForgotPasswordController::class, 'forgetPasswordPost'])->name('forget');

Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'ResetPassword'])->name('getRsetPassword');
Route::get('/forget-password', [ForgotPasswordController::class, 'index'])->name('forget.index');

Route::post('/new-password', [ForgotPasswordController::class, 'NewPassword'])->name('NewPassword');







// Route::get('/forget-password',[ForgetPassword::class,'index']);
// Route::post('/forget-password',[ForgetPassword::class,'forgetPassword'])->name('forgetPassword');
// Route::get('/reset-password/{token}',[ForgetPassword::class,'ResetPassword'])->name('ResetPassword');
// Route::post('/reset-password',[ForgetPassword::class,'NewPassword'])->name('NewPassword');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginUser'])->name('user.login');
Route::post('/register', [AuthController::class, 'registerUser'])->name('user.register');

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/explore', [GoalController::class, 'explore'])->name('explore');
    Route::get('/explore/filter/{id}', [GoalController::class, 'filter'])->name('template.filter');
    
    Route::get('/explore/search', [GoalController::class, 'search'])->name('template.search');
    Route::get('/favorite/{goal}/add', [GoalController::class, 'addToFavorite'])->name('template.favorite.add');
    Route::get('/favorite/{goal}/remove', [GoalController::class, 'removeFromFavorite'])->name('template.favorite.remove');
    Route::get('/favorites', [GoalController::class, 'favorites'])->name('user.favorites');
    Route::post('/goal/changeBackground', [GoalController::class, 'changeBackground'])->name('goal.addBackground');
    Route::patch('/goal/{goal}/changeBackground', [GoalController::class, 'updateBackground'])->name('goal.updateBackground');
    Route::post('/goal/{goal}/template', [GoalController::class, 'copyTemplate'])->name('template.copy');
    Route::get('/goal/ajax/index', [GoalController::class, 'ajaxIndex'])->name('goal.ajaxIndex');
    Route::get('/goal/personal/templates', [GoalController::class, 'userTemplates'])->name('user.templates');
    Route::patch('/goal/{goal}/makeTemplate', [GoalController::class, 'makeTemplate'])->name('goal.makeTemplate');
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

    Route::resource('/question', QuestionController::class);

    Route::resource('/answer', AnswerController::class);

    Route::resource('/vote', VoteController::class)->except('destroy');
    Route::delete('/vote/destroy', [VoteController::class, 'destroy'])->name('vote.destroy');

    Route::post('/report', [ReportController::class, 'store'])->name('report.store');

    Route::post('/logout', [AuthController::class, 'logout'])->name('user.logout');

    Route::get('/home', function () {
        return view('user.home');
    })->name('home');
    
    Route::get('/goals/pinned', function () {
        return view('user.goals.pinnedGoals');
    })->name('pinned.goals');
            
    // Route::get('/community', function () {
    //     return view('user.community');
    // })->name('community');
    
    Route::get('/profile', function () {
        return view('user.profile');
    })->name('profile');
    
});


    Route::middleware(['auth', 'role:admin'])->group(function () {

        Route::get('/dashboard', [UserController::class, 'index'])->name('admin.dashboard');
        Route::get('/templates', [GoalController::class, 'adminTemplates'])->name('admin.templates');
        Route::get('/dashboard/users/search', [UserController::class, 'search'])->name('user.search');
        Route::patch('/user/{user}/ban', [UserController::class, 'banUser'])->name('user.ban');
        Route::get('/reports', [ReportController::class, 'index'])->name('admin.reports');
        Route::patch('/template/{goal}/ban', [GoalController::class, 'banTemplate'])->name('template.ban');
        Route::delete('/report/{report}/destroy', [ReportController::class, 'destroy'])->name('report.destroy');
        Route::resource('/category', CategoryController::class);

    });
    
    Route::resource('/goal', GoalController::class)->except('destroy');
