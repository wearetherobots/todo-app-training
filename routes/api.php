<?php

use Illuminate\Support\Facades\Route;

Route::get('todos', 'TodoController@index');

Route::post('todos', 'TodoController@store');

Route::put('todos/{id}', 'TodoController@update');

Route::delete('todos/{id}', 'TodoController@delete');
