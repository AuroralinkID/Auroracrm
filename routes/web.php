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

//Sitemap

Route::get('/sitemap.xml', 'SitemapController@index');
Route::get('/sitemap/posts', 'SitemapController@posts');
Route::get('/sitemap/login', 'SitemapController@login');
Route::get('/sitemap/register', 'SitemapController@register');
Route::get('/sitemap/produk', 'SitemapController@produk');
Route::get('/sitemap/jasa', 'SitemapController@jasa');
Route::get('/sitemap/sysadmin', 'SitemapController@sysadmin');
Route::get('/sitemap/pickup', 'SitemapController@pickup');
Route::get('/sitemap/categories', 'SitemapController@categories');

Route::get('/blog','Blogcontroller@index');
Route::get('/blog/search','Blogcontroller@getSearch');
Route::get('/blog/kategori/{idkat}-{slug}', 'Blogcontroller@kategori');
Route::get('/blog/post/{slug}','Blogcontroller@post');
Route::get('/pdf/{$idservis}','FrontController@getPdf');
Route::get('/orderpdf/{$idorder}','FrontController@getOrderpdf');

Route::resource('produk', 'PostprodukController');
Route::get('/produk/{slug}','PostprodukController@show');

Route::resource('jasa', 'JasaController');

Route::resource('sysadmin', 'SysController');

Route::get('/','FormController@postLeads');
Route::get('/','SectionController@getIndex');


Route::get('/harga/web','FormController@webIndex');
Route::get('/harga/servis','FormController@servis');
Route::get('/harga/itsupport','FormController@support');
Route::get('/harga/sysadmin','FormController@sysadmin');
Route::get('/form','FormController@formIndex');
Route::get('/pickup','FormController@getServis');
Route::get('/project','FormController@getProject');
Route::get('/support','FormController@getSupport');
Route::get('/syadm','FormController@getSyadm');
Route::get('/portofolio','FrontController@postPortofolio');
Route::get('/flash', 'FormController@flash');
//Route::get('/harga','SectionController@getIndex');
//Route::get('/','FrontController@getShow');
 //   return view('home');
//});
