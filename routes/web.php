<?php

use Illuminate\Support\Facades\Route;

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
// route view for user
Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/add_user', function () {
    return view('add_user');
});

/*Route::get('/users/edit_user', function () {
    return view('edit_user');
});*/
Route::get('/users/{user}/edit', 'User\UserController@edit') -> name('users.edit');

Route::get('/users/list_user', function () {
    return view('list');
});

/*Route::get('/users/show_user', function () {
    return view('show');
});*/
Route::get('/users/{user}/show', 'User\UserController@show') -> name('users.show');

// route view for question
Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions/add_question', function () {
    return view('add_question');
});

Route::get('/questions/list_question', function () {
    return view('list_question');
});

Route::get('/questions/edit_question', function () {
    return view('edit_question');
});

Route::get('/questions/show_question', function () {
    return view('show_question');
});



// Routes for Users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
Route::get('/list_user', [UserController::class, 'index'])->name('users.list_user');
Route::get('/add_user', [UserController::class, 'create'])->name('users.add_user');
Route::post('/', [UserController::class, 'store'])->name('users.store');
Route::get('/show_user', [UserController::class, 'show'])->name('users.show_user');
Route::put('/edit_user', [UserController::class, 'edit'])->name('users.edit_user');
});

// routes for questions
Route::group(['prefix' => 'questions', 'as' => 'questions.'], function () {
    Route::get('/', [QuestionController::class, 'index'])->name('list_question');
    Route::get('/create', [QuestionController::class, 'create'])->name('add_question');
    Route::post('/', [QuestionController::class, 'store'])->name('store');
    Route::get('/{question}', [QuestionController::class, 'show'])->name('show_question');
    Route::put('/{question}/edit_question', [QuestionController::class, 'edit_question'])->name('edit');
});




// route controller

