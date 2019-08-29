<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SitemapController extends Controller
{
    public function index()
    {
        $data['categories'] = DB::table('categories')->get();
        $data['blogs'] = DB::table('blog')->get();
        $data['produk'] = DB::table('produk')->get();
        $data['user'] = DB::table('cms_users')->get();
        $data['jasa'] = DB::table('jasa')->get();
        $data['servis'] = DB::table('servis')->get();
        $data['sys'] = DB::table('jasa_sysadmin')->get();

      return response()->view('sitemap.index', [
        'blogs' => $data,
        'categories' => $data,
        'produk' => $data,
        'user' => $data,
        'jasa' => $data,
        'servis' => $data,
        'sys' => $data
      ])->header('Content-Type', 'text/xml');
    }
    public function posts()
    {
        $data['blogs'] = DB::table('blog');
    return response()->view('sitemap.posts', [
        'blogs' => $data,
    ])->header('Content-Type', 'text/xml');

    }

    public function categories()
    {
        $data['cat'] = DB::table('categories');
    return response()->view('sitemap.categories', [
        'cat' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function login()
    {
        $data['user'] = DB::table('cms_users');
    return response()->view('sitemap.login', [
        'user' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function jasa()
    {
        $data['jasa'] = DB::table('jasa');
    return response()->view('sitemap.jasa', [
        'jasa' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function produk()
    {
        $data['produk'] = DB::table('produk');
    return response()->view('sitemap.produk', [
        'produk' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function sysadmin()
    {
        $data['sys'] = DB::table('jasa_sysadmin');
    return response()->view('sitemap.sysadmin', [
        'sys' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function register()
    {
        $data['users'] = DB::table('cms_users');
    return response()->view('sitemap.register', [
        'users' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function pickup()
    {
        $data['servis'] = DB::table('servis');
    return response()->view('sitemap.pickup', [
        'servis' => $data,
    ])->header('Content-Type', 'text/xml');
    }

}
