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

Route::get('/home','UserController@showHome')->name('home_route');
// Route::get('/home/week','UserController@showWeek');
Route::get('/home/alltasks','UserController@showAlltasks');
Route::get('/home/profile','UserController@showProfile');
Route::get('/home/completedtasks','UserController@showCompleted');

Route::resource('/tasks', 'TaskController');
Route::get('/tasks/completed/{task}', 'TaskController@completed')->name('task_completed');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
