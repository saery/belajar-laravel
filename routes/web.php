<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@home');

Route::get('/berkas', 'BerkasController@create');
Route::get('/berkas', 'BerkasController@index');
Route::get('/berkas/{berkas}', 'BerkasController@show');
Route::get('/berkas/edit/{berkas}', 'BerkasController@edit')->name('berkas_edit');
Route::patch('/berkas/{berkas}', 'BerkasController@update')->name("berkas_update");
Route::post('/berkas', 'BerkasController@store');
Route::delete('/berkas/{berkas}', 'BerkasController@destroy');
//Route::resource('berkas', 'BerkasController');

Route::get('/permohonans/cetak-pdf', 'PermohonansController@print')->name('print');
//Route::get('/permohonans', 'PermohonansController@index');
//Route::get('/permohonans/create', 'PermohonansController@create');
//Route::get('/permohonans/{permohonan}', 'PermohonansController@show');
//Route::post('/permohonans', 'PermohonansController@store');
//Route::delete('/permohonans/{permohonan}', 'PermohonansController@destroy');

Route::resource('permohonans', 'PermohonansController');





Route::resource('about', 'AboutController');


