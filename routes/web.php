<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');
Route::get('/berkas', 'BerkasController@index');
Route::get('/about', 'PagesController@about');

