<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hubungi', function () {
  return view('template_hubungi');
});

Route::get('/dashboard', function () {
  return view('template_dashboard');
});

Route::get('/senarai-users', function () {
  return view('template_users_list');
});

Route::get('/senarai-produk', function () {
  return view('template_products_list');
});

Route::get('/senarai-quotations', function () {
  return view('template_quotations_list');
});