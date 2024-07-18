<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Question\QuestionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// route view
Route::get('/', function () {
    return view('welcome');
});

// Routes for Users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
Route::get('/', [UserController::class, 'index'])->name('users.list_user');
Route::get('/add_user', [UserController::class, 'create'])->name('users.add_user');
Route::post('/', [UserController::class, 'store'])->name('users.store');
Route::get('/{user}', [UserController::class, 'show'])->name('users.show_user');
Route::get('/{user}/edit_user', [UserController::class, 'edit'])->name('users.edit_user');
Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});

// routes for questions
Route::group(['prefix' => 'questions', 'as' => 'questions.'], function () {
    Route::get('/', [QuestionController::class, 'index'])->name('list_question');
    Route::get('/create', [QuestionController::class, 'create'])->name('add_question');
    Route::post('/', [QuestionController::class, 'store'])->name('store');
    Route::get('/{question}', [QuestionController::class, 'show'])->name('show_question');
    Route::get('/{question}/edit_question', [QuestionController::class, 'edit_question'])->name('edit');
    Route::put('/{question}', [QuestionController::class, 'update'])->name('update');
    Route::delete('/{question}', [QuestionController::class, 'destroy'])->name('destroy');
});




// route controller

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
