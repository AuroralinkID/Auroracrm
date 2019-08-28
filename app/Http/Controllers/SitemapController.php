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

      return response()->view('sitemap.index', [
        'blogs' => $data,
        'categories' => $data,
        'produk' => $data,
        'user' => $data
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
    public function sysadmin()
    {
        $data['user'] = DB::table('cms_users');
    return response()->view('sitemap.login', [
        'user' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function jasa()
    {
        $data['cat'] = DB::table('categories');
    return response()->view('sitemap.jasa', [
        'cat' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function produk()
    {
        $data['produk'] = DB::table('produk');
    return response()->view('sitemap.produk', [
        'produk' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function login()
    {
        $data['cat'] = DB::table('categories');
    return response()->view('sitemap.sysadmin', [
        'cat' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function register()
    {
        $data['cat'] = DB::table('categories');
    return response()->view('sitemap.register', [
        'cat' => $data,
    ])->header('Content-Type', 'text/xml');
    }
    public function pickup()
    {
        $data['cat'] = DB::table('categories');
    return response()->view('sitemap.pickup', [
        'cat' => $data,
    ])->header('Content-Type', 'text/xml');
    }

}
