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

Route::get('/','FormController@postLeads');
Route::get('/','SectionController@getIndex');
Route::get('/harga','FormController@getIndex');
Route::get('/harga/web','FormController@webIndex');
Route::get('/harga/servis','FormController@servis');
Route::get('/harga/itsupport','FormController@support');
Route::get('/harga/sysadmin','FormController@sysadmin');
Route::get('/form','FormController@formIndex');
Route::get('/pickup','FormController@getAdd');
Route::get('/project','FormController@getProject');
Route::get('/support','FormController@getSupport');
Route::get('/syadm','FormController@getSyadm');
Route::get('/jasa','cartController@index');
Route::get('/cart','cartController@cart');
Route::get('addtocart/{id}','cartController@addTocart');
Route::get('/charge','ChargeController@getIndex');
Route::post('/charge','ChargeController@store');
Route::get('/portofolio','FrontController@postPortofolio');
//Route::get('/harga','SectionController@getIndex');
//Route::get('/','FrontController@getShow');
 //   return view('home');
//});
