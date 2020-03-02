<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

Auth::routes(['verify' => true]);

/* Route::get('/home', 'HomeController@index')->name('home'); */

Route::get('/tourists', 'TouristController@index');
Route::get('/tourists/{tourist}', 'TouristController@show');
Route::patch('/tourists/{tourist}', 'TouristController@update');

Route::get('/guides', 'GuideController@index');
Route::get('/guides/{guide}', 'GuideController@show');
Route::patch('/guides/{guide}', 'GuideController@update');


Route::get('/guides/{guide}/tasks', 'TasksController@index')->middleware('auth');
Route::get('/guides/{guide}/tasks/create', 'TasksController@create');
Route::post('/guides/{guide}/tasks', 'TasksController@store');
Route::put('/guides/{guide}/tasks/{task}', 'TasksController@update');
Route::delete('/tasks/{task}', 'TasksController@destory');

Route::post('/{guide}/reviews', 'ReviewController@store');

Route::get('/posts', 'PostController@index');

Route::get('/create', function () {
    return view('tasks.create');
});

Route::get('/tasks', function () {
    return view('tasks.index');
});