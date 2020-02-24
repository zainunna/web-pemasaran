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

Route::get('/', function () {
    return view('welcome');
});
  


Route::get('form', function () {
    return view('layouts.app');
});
  
Route::get('/add-to-cart/{id}', [
    'uses' => 'CartController@getAddC',
    'as' => 'cart.addToCart'
]);
Route::get('/reduce/{id}', [
    'uses' => 'CartController@getReduceByOne',
    'as' => 'cart.reduceByOne'
]);
Route::get('/remove/{id}', [
    'uses' => 'CartController@getRemoveItem',
    'as' => 'cart.remove'
]);
Route::get('/shopping-cart', [
    'uses' => 'CartController@getCart',
    'as' => 'cart.index'
]);
Route::get('/checkout', [
    'uses' => 'CartController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);
Route::post('/checkout', [
    'uses' => 'CartController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);




Route::resource('barang','barangController');
Route::resource('beli','beliController');
Route::Resource('home', 'TampilanController');
Route::Resource('berita', 'BeritaController');

    

// Route::post('/transaksi', 'BeliController@addBeli')->name('beli.transaksi');
Route::get('/barang/{id}', 'BeliController@getBarang');
Route::post('/cart', 'BeliController@addToCart');
Route::get('/cart', 'BeliController@getCart');
// Route::delete('/cart/{id}', 'BeliController@removeCart');

Route::get('/transaksi', 'OrderController@addOrder')->name('order.transaksi');

Auth::routes();

