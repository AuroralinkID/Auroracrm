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
CRUDBooster::routeController('/','FrontController');
Route::get('/pdf/{$idservis}','FrontController@getPdf');
Route::get('/orderpdf/{$idorder}','FrontController@getOrderpdf');


Route::get('/','FrontController@getIndex');
Route::get('/jasa','cartController@index');
Route::get('/cart','cartController@cart');
Route::get('addtocart/{id}','cartController@addTocart');
Route::get('/charge','ChargeController@getIndex');
Route::post('/charge','ChargeController@store');
Route::get('/portofolio','FrontController@postPortofolio');
Route::get('/harga','FrontController@postHarga');
//Route::get('/','FrontController@getShow');
 //   return view('home');
//});
