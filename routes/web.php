<?php
use App\todo;
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

Route::get('/', function (App\todo $todos) {
    $todos=todo::all();
    return view('welcome', compact('todos'));
});
Route::resource('todos', 'ToDoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
