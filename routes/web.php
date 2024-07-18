<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
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

Auth::routes();
Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');

//Auth::routes();
Route::get('/liste', [App\Http\Controllers\ListeController::class, 'index'])->name('liste');

//Auth::routes();
Route::get('/question', [App\Http\Controllers\QuestionController::class, 'index'])->name('question');
