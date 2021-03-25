<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');
//Route::get('/berkas', 'BerkasController@create');
//Route::get('/berkas', 'BerkasController@index');
//Route::post('/berkas', 'BerkasController@store');
//Route::delete('/berkas/{berkas}', 'BerkasController@destroy');
Route::resource('berkas', 'BerkasController');

//Route::get('/permohonans', 'PermohonansController@index');
//Route::get('/permohonans/create', 'PermohonansController@create');
//Route::get('/permohonans/{permohonan}', 'PermohonansController@show');
//Route::post('/permohonans', 'PermohonansController@store');
//Route::delete('/permohonans/{permohonan}', 'PermohonansController@destroy');
Route::resource('permohonans', 'PermohonansController');

Route::get('/about', 'PagesController@about');
