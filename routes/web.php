<?php

// Route::get('/', function () { return view('home'); });
//
// Route::get('/input', function () { return view('input'); });
// Route::post('/input', 'DataController@create');

Route::get('/', function () {

    return view('index');
});
Route::get('/lokasi', function () {

    return view('lokasi');
});
Route::get('/lokasi/input-data', function () {

    return view('input-data');
});
