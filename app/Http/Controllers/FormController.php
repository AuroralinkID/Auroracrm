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
class FormController extends Controller
{
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
        ->take(4)
        ->get();

        $data['produk'] = DB::table('produk')
        ->join('kategori','kategori.id','=','kategori_id')
        ->join('supplier','supplier.id','=','supplier_id')
        ->select('produk.*','produk.nama as pronam','produk.fitur as profit','produk.fitur_satu as profit1','produk.fitur_dua as profit2','produk.fitur_tiga as profit3','produk.fitur_empat as profit4','produk.fitur_lima as profit5','produk.deskripsi as prodesk','kategori.nama as prokat','produk.harga_jual as prohar','produk.harga_beli as proharg','produk.sku as prosku')
        ->orderby('produk.id','DESC')
        ->take(4)
        ->get();

        $data['servis'] = DB::table('g_servis')
//        ->join('jkategori','jkategori.id','=','jkategori_id')
        ->select('g_servis.*','g_servis.nama_servis as judul','g_servis.desk_servis as desk','g_servis.harga_awal as price')
        ->orderby('g_servis.id','DESC')
        ->take(4)
        ->get();

        $data['sysadmin'] = DB::table('jasa_sysadmin')
        //        ->join('jkategori','jkategori.id','=','jkategori_id')
                ->select('jasa_sysadmin.*','jasa_sysadmin.nama as judul','jasa_sysadmin.desk as desk','jasa_sysadmin.harga_awal as price')
                ->orderby('jasa_sysadmin.id','DESC')
                ->take(4)
                ->get();

        return view('harga',$data);
    }   
    public function webIndex()
    {
        $myid = CRUDBooster::myId();
        $data = [];
        $data['export'] = true;
        $data['page_title'] = 'Halaman Form';  
        $data['jasa'] = $id;
     
        return view('web');
    } 
    public function servis()
    {
 //
        return view('servis');
    } 
    public function support()
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
        ->take(4)
        ->get();
        return view('itsupport');
    } 
    public function sysadmin()
    {
        $myid = CRUDBooster::myId();
        $data = [];
        $data['export'] = true;
        $data['page_title'] = 'Halaman Form';  
        $data['jasa'] = $id;
     
        return view('sysadmin');
    } 
    public function formIndex()
    {
        $myid = CRUDBooster::myId();
        $data = [];
        $data['export'] = true;
        $data['page_title'] = 'Halaman Form';  
        $data['jasa'] = $id;
     
        return view('form',$data);
    } 
    public function getAdd(){

        $data['page_title'] = 'Pickup |';		

        return view('pickup',$data);
    }

    public function postPickup(){


            return view('pickup');
        
        
    }

    public function getProject(){

        $data['page_title'] = 'Register |';		

        return view('project',$data);
    }
    public function getSupport(){

        $data['page_title'] = 'Register |';		

        return view('support',$data);
    }
    public function getSyadm(){

        $data['page_title'] = 'Register |';		

        return view('syadm',$data);
    }
    public function getLeads(\Illuminate\Http\Request $request){

        $data['page_title'] = 'Home';

        Session::flash('success', 'Pesan berhasil di kirim');
        return view('home');
    }
    public function postLeads(\Illuminate\Http\Request $req){

        $this->validate($req, [
            'email' => 'required|unique:cms_users|max:255',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',

        ]);


		$save['name'] = Request::get('nama');
		$save['email'] = Request::get('email');
		$save['telepon'] = Request::get('telepon');
		$save['created_at'] = Carbon::now();
        DB::table('lead')->insert($save);
        
        Session::flash('success', 'Pesan berhasil di kirim');
		return redirect()->back();

    }
}