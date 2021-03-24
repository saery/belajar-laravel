<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');
Route::get('/berkas', 'BerkasController@index');
Route::get('/about', 'PagesController@about');

Route::get('/permohonans', 'PermohonansController@index');
Route::get('/permohonans/create', 'PermohonansController@create');
Route::get('/permohonans/{permohonan}', 'PermohonansController@show');
Route::post('/permohonans', 'PermohonansController@store');

