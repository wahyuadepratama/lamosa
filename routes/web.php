<?php


Auth::routes();
Route::get('/', function () {

    return view('index');
});
Route::get('/lokasi','LocationController@index');
Route::get('/lokasi/input-data', function () {

    return view('input-data');
});
Route::get('/logout','UserController@logout');
Route::get('/bank-sampah', function () {

    return view('bank_sampah');
});
Route::get('/transaksi', function () {

    return view('bank_sampah_');
});
