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
Route::get('/login', function () {

    return view('login');
});
Route::get('/register', function () {

    return view('sign-up');
});
Route::get('/bank-sampah', function () {

    return view('bank_sampah');
});
Route::get('/transaksi', function () {

    return view('bank_sampah_');
});
Route::get('/profile', function () {

    return view('profile');
});
Route::get('/jenis-sampah', function () {

    return view('jenis-sampah');
});
