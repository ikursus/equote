<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hubungi', function () {
  return view('template_hubungi');
});

# Bahagian dashboard
Route::get('/dashboard', 'DashboardController@admin');

# Bahagian Users
Route::get('/users', 'UsersController@index');
# Route papar borang tambah user
Route::get('/users/new', 'UsersController@create');
# Route terima data dari borang tambah user
Route::post('/users/new', 'UsersController@store');
# Route papar borang edit user
Route::get('/users/{id}/edit', 'UsersController@edit');
# Route terima data dari borang edit user dan update database
Route::patch('/users/{id}/edit', 'UsersController@update');
# Route untuk hapuskan user berdasarkan ID
Route::delete('/users/{id}', 'UsersController@destroy');

# Bahagian Produk
Route::get('/produk', 'ProductsController@index');
Route::get('/produk/baru', 'ProductsController@create');
Route::post('/produk/baru', 'ProductsController@store');
Route::get('/produk/{id}/edit', 'ProductsController@edit');
