<?php

//Route::middleware('auth')->group(function () {
    
    Route::get('/todos', 'TodoController@index')->name('todo.index');

    Route::get('/todos/create', 'TodoController@create');

    Route::get('/todos/{id}/edit', 'TodoController@edit');

    Route::post('/todos/create', 'TodoController@store');

    Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');

    Route::delete('/todos/{todo}/delete', 'TodoController@delete')->name('todo.delete');

    Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');

    Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', 'UserController@index');

Route::post('/upload', 'UserController@uploadAvatar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
