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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'UserController@index')->middleware('auth');
Route::get('/params/{id}', [ 'as' => 'user.edit', 'uses' => 'UserController@edit']);
//Route::get('/users/{username?}/edit', 'UserController@edit');
Route::patch('/params/{id}',  ['as' => 'user.update', 'uses' => 'UserController@update']);
//Route::delete('/users/{username?}', 'UserController@delete');
Route::delete('/params/{id}', [ 'as' => 'user.destroy', 'uses' => 'UserController@destroy']);