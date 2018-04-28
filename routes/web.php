<?php


Auth::routes();
Route::get('/logout','UserController@logout');

Route::get('/', function () {
    return view('index');
});

Route::get('/lokasi','LocationController@index');
Route::get('/lokasi/input-data', function () {
    return view('input-data');
});

route::get('/transaksi', function() {
  return view('transaksi');
});
Route::get('/transaksi/{id}','JunkBankController@show');
Route::get('/bank-sampah','JunkBankController@index');
Route::get('/profile', 'MessagesController@index');

Route::post('/transaksi/send', 'MessagesController@store');
Route::get('/jenis-sampah', function(){
  return view('jenis-sampah');
});
