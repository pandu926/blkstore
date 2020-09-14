<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/dashboard', 'AdminController@index');
Route::get('/admin/daftar', 'AdminController@daftar');
Route::post('/admin/daftar', 'AdminController@store');

Route::get('/penjual/daftar', 'PenjualController@index');
Route::post('/penjual/daftar', 'PenjualController@store');
Route::get('/penjual/edit/{id}', 'PenjualController@edit');
Route::post('/penjual/edit/{id}', 'PenjualController@update'); 

Route::get('/bokep/{slug}', 'HomeController@show');
route::get('/kategori', 'HomeController@cek');
Route::get('/kategori/{slug}','HomeController@tag');
route::get('/admin/edit/{slug}', 'AdminController@edit');

// halaman home route
Route::post('/', 'HomeController@store');
Route::get('/produk/{id_barang}', 'HomeController@show');
Route::get('/keranjang', 'HomeController@keranjang');
Route::get('/checkout', 'HomeController@checkout');


Auth::routes();






