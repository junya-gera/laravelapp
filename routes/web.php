<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{id?}/{pass?}', 'HelloController@index'); // HelloController の index アクションを呼び出す
