<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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
//route controller test
Route::get('/test', [TestController::class, 'index'])->name('Tests.index');
Route::get('/test/create', [TestController::class, 'create'])->name('Tests.create');
Route::post('/test', [TestController::class, 'store'])->name('Tests.store');
Route::get('/test/show/{id}', [TestController::class, 'show'])->name('Tests.show');

Route::get('/question', [QuestionController::class, 'indexQuestion'])->name('question.index');

// Route::put('/test/{id}/edit', [TestController::class, 'edit'])->name('Test.edit');
Route::put('/test/edit', [TestController::class, 'update'])->name('Tests.edit');

//route view test

Route::get('/test/edit', function () {
    return view('tests.edit');
});
Route::get('/test/create', function () {
    return view('tests.create');
});
Route::get('/test/show', function () {
    return view('tests.show');
});
Route::get('/test', function () {
    return view('tests.index');
});
//question
Route::get('/question', function () {
    return view('question.index');
});
Route::get('/question/create', function () {
    return view('question.create');
});
Route::get('/question/edit', function () {
    return view('question.edit');
});
Route::get('/question/show', function () {
    return view('question.show');
});

// route view for user
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/user/add_user', function () {
    return view('users.add_user');
});

Route::resource("/user", UserController::class);

Route::get('/users/edit_user', function () {
    return view('users.edit_user');
});
Route::get('/users/list_user', function () {
    return view('users.list_user');
});

Route::get('/users/show_user', function () {
    return view('users.show_user');
});
//store
Route::get('/user/store', function () {
    return view('users.list_user');
});
//update
//  Route::get('/users/update/{id}', function() {
//      return view('users.list_user');
//  });

// route view for question
Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions/add_question', function () {
    return view('questions.add_question');
});

Route::get('/questions/list_question', function () {
    return view('questions.list_question');
});

Route::get('/questions/edit_question', function () {
    return view('questions.edit_question');
});

Route::get('/questions/show_question', function () {
    return view('questions.show_question');
});

//Route dashboard 1
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/login', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/register', function () {
    return view('auth.register');
})->name('auth.register');


// Password reset link request routes...
Route::get('password/email', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.email');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.request');
Route::post('password/reset/{token}', 'Auth\ResetPasswordController@postReset')->name('password.reset');

Route::get('/dashboard', [UserController::class, 'nombre']);

// pour le status
Route::get('/users/status/{id}', [UserController::class, 'status'])->name('status');
Route::post('/users/list_user', [UserController::class, 'store'])->name('users.store');
Route::get('/users/list_user', [UserController::class, 'index'])->name('users.list_user');
Route::get('/list_user', [UserController::class, 'total'])->name('users.total');
Route::put('/users/edit_user/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/update/{id}', [UserController::class, 'edit'])->name('users.edit_user');
Route::get('/users/show_user/{id}', [UserController::class, 'show'])->name('users.show_user');

// Routes for Users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('/list_user', [UserController::class, 'index'])->name('users.list_user');
    Route::get('/add_user', [UserController::class, 'create'])->name('users.add_user');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/show_user', [UserController::class, 'show'])->name('users.show_user');

});
//Route pour les questions
Route::post('/questions/list_question', [QuestionController::class, 'storeQuestion'])->name('questions.store');
Route::get('/list_question', [QuestionController::class, 'indexQuestion'])->name('questions.list_question');

// routes for questions
Route::group(['prefix' => 'questions', 'as' => 'questions.'], function () {
    Route::get('/list_question', [QuestionController::class, 'indexQuestion'])->name('questions.list_question');
    Route::get('/add_question', [QuestionController::class, 'createQuestion'])->name('add_question');
    Route::post('/', [QuestionController::class, 'storeQuestion'])->name('questions.store');
    Route::get('/{question}', [QuestionController::class, 'showQuestion'])->name('show_question');
    Route::put('/{question}/edit_question', [QuestionController::class, 'editQuestion'])->name('edit');
});




// route controller
