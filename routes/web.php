<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Question\QuestionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

//test
Route::get('/test', [TestController::class, 'index'])->name('Test.index');
Route::get('/test/create', [TestController::class, 'create'])->name('Test.create');
Route::post('/test', [TestController::class, 'store'])->name('Test.store');
Route::get('/test/{id}/edit', [TestController::class, 'edit'])->name('Test.edit');
Route::put('/test/update', [TestController::class, 'update'])->name('Test.update');



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
})->middleware('auth')->name('admin.dashboard');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showlogin');
Route::post('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');





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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
