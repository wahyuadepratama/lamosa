<?php


Auth::routes();
Route::get('/', function () {

    return view('index');
});
Route::get('/lokasi','LocationController@index');
Route::get('/lokasi/input-data', function () {

    return view('input-data');
});

Route::get('/home', 'HomeController@index')->name('home');
