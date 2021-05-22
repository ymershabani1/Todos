<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/new', 'App\Http\Controllers\PagesController@new');

Route::get('/todos', 'App\Http\Controllers\TodosController@index');
