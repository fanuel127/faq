<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\Question\QuestionController;

// use App\Http\Controllers\Question\QuestionController;

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

Route::get('/', function () {
    return view('welcome');
});

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

Route::get('/user/add_user', function () {
    return view('users.add_user');
});

Route::get('/users/profile_user', function () {
    return view('users.profile_user');
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
// // Auth: routes();
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');


Route::get('/dashboard', [UserController::class, 'nombre'])->name('users.nombre');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showlogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//profile
// Route::post('/update/password', 'UserController@updatePassword')->name('update.password');
Route::post('/update/password', [UserController::class, 'updatePassword'])->name('update.password');


//route pour les pages des clients
Route::get('/client/question_list', function () {
    return view('client.question_list');
});
Route::get('/client/question_detail', function () {
    return view('client.question_detail');
});


// pour le status
Route::get('/users/status/{id}', [UserController::class, 'status'])->name('status');
Route::post('/users/list_user', [UserController::class, 'store'])->name('users.store');
Route::get('/users/list_user', [UserController::class, 'index'])->name('users.list_user');
Route::get('/list_user', [UserController::class, 'total'])->name('users.total');
Route::put('/users/edit_user/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/update/{id}', [UserController::class, 'edit'])->name('users.edit_user');
Route::get('/users/show_user/{id}', [UserController::class, 'show'])->name('users.show_user');
Route::get('/users/profile_user/{id}', [UserController::class, 'profil'])->name('users.profile_user');
// Route::get('/users/filter', [UserController::class, 'filter'])->name('users.filter');

// Routes for Users
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
    Route::get('/list_user', [UserController::class, 'filter'])->name('users.list_user');
    Route::get('/add_user', [UserController::class, 'create'])->name('users.add_user');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/show_user', [UserController::class, 'show'])->name('users.show_user');
    Route::get('/profile_user', [UserController::class, 'profil'])->name('users.profile_user');
    Route::get('/filter', [UserController::class, 'filter'])->name('users.filter');
});

//Route pour les questions
Route::post('/questions/list_question', [QuestionController::class, 'storeQuestions'])->name('questions.store');
Route::get('/list_question', [QuestionController::class, 'indexQuestions'])->name('questions.list_question');
Route::put('/questions/edit_question/{id}', [QuestionController::class, 'updateQuestions'])->name('questions.update');
Route::get('/questions/update/{id}', [QuestionController::class, 'editQuestions'])->name('questions.edit_question');
Route::get('/questions/show_question/{id}', [QuestionController::class, 'showQuestions'])->name('questions.show_question');
Route::get('/list_question', [QuestionController::class, 'totalQuestions'])->name('questions.total');




// routes for questions
Route::group(['prefix' => 'questions', 'as' => 'questions.'], function () {
    Route::get('/list_question', [QuestionController::class, 'indexQuestions'])->name('questions.list_question');
    Route::get('/add_question', [QuestionController::class, 'createQuestions'])->name('add_question');
    // Route::post('/', [QuestionController::class, 'storeQuestion'])->name('questions.store');
    Route::get('/questions/show_question/{id}', [QuestionController::class, 'showQuestions'])->name('show_question');
    Route::put('/{question}/edit_question', [QuestionController::class, 'editQuestions'])->name('edit');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
