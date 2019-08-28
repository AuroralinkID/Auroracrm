<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function index(){
        $data['categories'] = DB::table('categories')->get();
        $data['blogs'] = DB::table('blog')
        ->join('categories','categories.id','=','categories_id')
        ->join('cms_users','cms_users.id','=','cms_users_id')
        ->select('blog.*','categories.name as katnam','cms_users.name as sunam','cms_users.photo as umage')
        ->orderby('blog.id','DESC')
        ->get();

        return view('blog',$data);
    }

    public function post($slug){
        $blog= DB::table('blog')
        ->join('categories','categories_id','=','categories_id')
        ->join('cms_users','cms_users.id','=','cms_users_id')
        ->select('blog.*','categories.name as name_categories','cms_users.name as name_author')
        ->where('blog.slug', $slug)
        ->first();

        $data['blog'] = $blog;

        return view('post', $data);
    }

    public function kategori($idkat){
        $cat = DB::table('categories')->where('name', $idkat)->first();


        $data['blogs'] = DB::table('blog')
        ->join('categories','categories.id','=','categories_id')
        ->join('cms_users','cms_users.id','=','cms_users_id')
        ->select('blog.*','categories.name as katnam','cms_users.name as sunam')
        ->orderby('blog.id','ASC')
        ->where('blog.categories_id', $idkat)
        ->paginate('6');

        $data['cat'] = $cat;
        $data['categories'] = DB::table('categories')->get();

        // dd($data);
        return view('kategori', $data);

    }
    public function getSearch(Request $req){
        if($req->get('s')=='') return redirect('/');
        $data['blogs'] = DB::table('blog')
        ->join('categories','categories.id','=','categories_id')
        ->join('cms_users','cms_users.id','=','cms_users_id')
        ->select('blog.*','categories.name as katnam','cms_users.name as sunam')
        ->where('blog.title','like','%'.$req->get('s').'%')
        ->paginate('5');
        return view('kategori', $data);

    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
