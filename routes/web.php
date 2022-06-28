<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/logreg', function () {
    return view('logreg');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [\App\Http\Controllers\RegisterController::class,'register'])->name('register');
Route::post('/login', [\App\Http\Controllers\LoginController::class,'login'])->name('login');

Route::any("ansDesk",function(){
    return view('answerDesk');
});

Route::any("start",function(){
    return view('start');
});

Route::any("end",function(){
    return view('end');
});

Route::any("submitans",'QuestionController@submitans');
Route::any("startquiz",'QuestionController@startquiz');
Route::any("add",'QuestionController@add');
Route::any("update",'QuestionController@update');
Route::any("delete",'QuestionController@delete');
Route::any("questions",'QuestionController@show');
