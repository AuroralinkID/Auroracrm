<?php

namespace App\Http\Controllers;
use Session;
use Request;
use DB;
use Hash;
use CRUDBooster;
use Cart;
use Carbon\Carbon;
use General;
use Location;
use Illuminate\Support\Facades\Validator;
use RajaOngkir;
use PDF;
use crocodicstudio\crudbooster\fonts\Fontawesome;

class SectionController extends Controller
{
    //
    public function getIndex()
    {
        $myid = CRUDBooster::myId();
        $data = [];
        $data['export'] = true;
        $data['page_title'] = 'Halaman Harga';  
        $data['jasa'] = $id;
     
        $data['jasa'] = DB::table('jasa')
        ->join('jkategori','jkategori.id','=','jkategori_id')
        ->select('jasa.*','jasa.nama as judul','jkategori.nama as jid','jasa.biaya as jasah','jasa.deskripsi as jdesk','jasa.fitur as fitur','jasa.fitur1 as fitur1','jasa.fitur2 as fitur2','jasa.fitur3 as fitur3')
        ->orderby('jasa.id','DESC')
        ->take(1)
        ->get();
    
        $data['porto'] = DB::table('post')
        ->select('post.*','post.judul as pjud','post.gambar as ppict','post.tags as tags','post.konten as desk')
        ->orderby('post.id','DESC')
        ->take(12)
        ->get();
    
        $data['team'] = DB::table('team')
        ->join('dev','dev.id','=','dev_id',)
        ->select('team.*','team.nama as tnam','dev.nama as tid','team.profil as tdesk','team.foto as tfot')
        ->orderby('team.id','DESC')
        ->take(3)
        ->get();
    
        $data['pabout'] = DB::table('pabout')
        ->select('pabout.*','pabout.judul as pajud','pabout.logo as papict','pabout.deskripsi as padesk','pabout.visi as pvi','pabout.misi_satu as pm1','pabout.misi_dua as pm2','pabout.misi_tiga as pm3')
        ->orderby('pabout.id','DESC')
        ->take(1)
        ->get();
    
        $data['phero'] = DB::table('phero')
        ->select('phero.*','phero.judul as herjud','phero.logo as herlog','phero.deskripsi as herdesk')
        ->orderby('phero.id','DESC')
        ->take(1)
        ->get();
    
        $data['pklien'] = DB::table('pklien')
        ->select('pklien.*','pklien.judul as pkjud','pklien.logo as pklog','pklien.deskripsi as pkdesk')
        ->orderby('pklien.id','DESC')
        ->take(5)
        ->get();
    
        $data['webdev'] = DB::table('webdev')
        ->select('webdev.*','webdev.judul as title','webdev.konten as webkon','webdev.tags as webtag','webdev.web_satu as websat','webdev.web_dua as webdu','webdev.web_tiga as webtig','webdev.web_empat as webpat','webdev.web_lima as webli','webdev.web_enam as webnam')
        ->orderby('webdev.id','DESC')
        ->take(1)
        ->get();

        $data['postservis'] = DB::table('postservis')
        ->select('postservis.*','postservis.judul as title','postservis.konten as webkon','postservis.tags as webtag','postservis.kategori as servkat','postservis.servis_satu as servsat','postservis.servis_dua as servdu','postservis.servis_tiga as servtig','postservis.servis_empat as servpat','postservis.servis_lima as servli','postservis.servis_enam as servnam')
        ->orderby('postservis.id','DESC')
        ->take(1)
        ->get();

        $data['postsupport'] = DB::table('postsupport')
        ->select('postsupport.*','postsupport.judul as title','postsupport.konten as webkon','postsupport.tags as webtag')
        ->orderby('postsupport.id','DESC')
        ->take(1)
        ->get();
     
        $data['postsyadmin'] = DB::table('postsyadmin')
        ->select('postsyadmin.*','postsyadmin.judul as title','postsyadmin.konten as webkon','postsyadmin.tags as webtag')
        ->orderby('postsyadmin.id','DESC')
        ->take(1)
        ->get();
        
        $data['Fontawesome'] = Fontawesome::getIcons();
    
    
    //	$data = Fontawesome::getIcons();
        return view('home',$data)->render();
    //	return view('crudbooster::components.list_icon', compact('data'))->render();
    }
}
