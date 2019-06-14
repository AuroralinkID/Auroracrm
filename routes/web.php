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
CRUDBooster::routeController('/','FormController');
Route::get('/pdf/{$idservis}','FrontController@getPdf');
Route::get('/orderpdf/{$idorder}','FrontController@getOrderpdf');

Route::resource('produk', 'PostprodukController');


Route::get('/','FormController@postLeads');
Route::get('/','SectionController@getIndex');
Route::get('/produk','PostprodukController@getIndex');
Route::get('/produk/{id}','PostprodukController@show');
Route::get('/harga/web','FormController@webIndex');
Route::get('/harga/servis','FormController@servis');
Route::get('/harga/itsupport','FormController@support');
Route::get('/harga/sysadmin','FormController@sysadmin');
Route::get('/form','FormController@formIndex');
Route::get('/pickup','FormController@getServis');
Route::get('form/project','FormController@getProject');
Route::get('/support','FormController@getSupport');
Route::get('/syadm','FormController@getSyadm');
Route::get('/portofolio','FrontController@postPortofolio');
Route::get('/flash', 'FormController@flash');
//Route::get('/harga','SectionController@getIndex');
//Route::get('/','FrontController@getShow');
 //   return view('home');
//});
