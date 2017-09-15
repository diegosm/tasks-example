<?php

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

Route::get('/tasks','TasksController@index')->name('tasks.index');
Route::get('/tasks/create', 'TasksController@create')->name('tasks.create');
Route::post('/tasks', 'TasksController@store')->name('tasks.store');
Route::get('/tasks/{task}/edit', 'TasksController@edit')->name('tasks.edit');
Route::put('/tasks/{task}', 'TasksController@update')->name('tasks.update');
Route::delete('/tasks/{task}', 'TasksController@destroy')->name('tasks.delete');