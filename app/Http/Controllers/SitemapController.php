<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SitemapController extends Controller
{
    public function index()
    {
        $data['categories'] = DB::table('categories')->get();
        $data['blogs'] = DB::table('blog')
        ->join('categories','categories.id','=','categories_id')
        ->join('cms_users','cms_users.id','=','cms_users_id')
        ->select('blog.*','categories.name as katnam','cms_users.name as sunam','cms_users.photo as umage')
        ->orderby('blog.id','DESC')
        ->get();

      return response()->view('sitemap.index', [
        'posts' => $data,
        'kategori' => $data
      ])->header('Content-Type', 'text/xml');
    }
    public function posts()
    {
        $data['blogs'] = DB::table('blog');
    return response()->view('sitemap.posts', [
        'post' => $data,
    ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $data['cat'] = DB::table('categories');
    return response()->view('sitemap.categories', [
        'categories' => $data,
    ])->header('Content-Type', 'text/xml');
    }
}
