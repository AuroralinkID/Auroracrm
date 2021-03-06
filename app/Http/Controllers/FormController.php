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
    public function getServis(){

        $data['page_title'] = 'Pickup |';		

        return view('pickup',$data);
    }

    public function postServis(\Illuminate\Http\Request $req){
          if(CRUDBooster::myid()){
          }else{
            $pesan = '!! Maaf Anda Harus Masuk Terlebih Dahulu !!';
            return redirect()->back()->with(['message'=> $pesan,'message_type'=>'warning']);
            }

        $validator = Validator::make(Request::all(),			
        [
           // 'email'=>'required|email|exists:'.config('crudbooster.USER_TABLE'),
            //'password'=>'required'			
            ]
        
    //      if(CRUDBooster::myid()){
    //      }else{
    //        return redirect()->route('getLogin')->with('message',('Anda harus mendaftar dulu'));
    //        }
    );

        if ($validator->fails()) 
        {
            $message = $validator->errors()->all('Tolong Masukan Data Dengan Benar !!!!');
            return redirect()->back()->with(['message'=>implode(', ',$message),'message_type'=>'danger']);
        }
        $kode_servis = DB::table('servis')->max('id') + 1;
        $kode_servis = str_pad('SRVS#'.$kode_servis, 5, 0 , STR_PAD_LEFT);
        $save['kode_servis'] = $kode_servis;
        $save['created_at'] = Carbon::now();
        $save['nama'] = htmlentities(Request::get('nama'));
        $save['unit_id'] = Request::get('unit');
        $save['email'] = htmlentities(Request::get('email'));
        $save['telepon'] = htmlentities(Request::get('telp'));
		$save['alamat'] = htmlentities(Request::get('alamat'));
		$save['kelengkapan'] = Request::get('kelengkapan');
        $save['keluhan'] = htmlentities(Request::get('keluhan'));
        $save['team_id'] = CRUDBooster::myId();
        $save['sgaransi_id'] = Request::get('garansi');
        $save['status'] = 'request-pickup';
        $save['snid'] = htmlentities(Request::get('snid'));
        $save['model'] = htmlentities(Request::get('model'));
        DB::table('servis')->insert($save);
        $serv= ['name'=> $save['nama'],'noserv'=> $save['kode_servis'],'model'=> $save['model'],'telp'=> $save['telepon'],'sn'=> $save['snid']];
        //Notifikasi kirim email//
      //  CRUDBooster::sendEmail(['to'=>$save['email'],'data'=>$serv,'template'=>'pickup_servis']); 
        $config['content'] = "Ada Servis Baru";
                        $config['to'] = CRUDBooster::adminPath('servis');
                        $config['id_cms_users'] = [1]; //The Id of the user that is going to receive notification. This could be an array of id users [1,2,3,4,5]
						CRUDBooster::sendNotification($config);
        
        $pesan = 'Data Berhasil Di Simpan Silahkan Check Email Anda';
        return redirect()->back()->with(['message'=> $pesan,'message_type'=>'success']);   
        
        
        
    }

    public function getProject(){

        $data['aplikasi'] = DB::table('aplikasi')
        ->join('kategori','kategori.id','=','kategori_id')
        ->join('dev','dev.id','=','dev_id')
        ->select('aplikasi.*','kategori.nama as katnam','dev.nama as sunam','aplikasi.nama as judul','aplikasi.deskripsi as pdesk','aplikasi.hargap as harga')
        ->orderby('aplikasi.id','DESC')
        ->paginate('20');
        
        return view('project',$data);
    }
    public function postProject(\Illuminate\Http\Request $req){
        if(CRUDBooster::myid()){
        }else{
          $pesan = 'Maaf Anda Harus Masuk Terlebih Dahulu !!';
          return redirect()->back()->with(['message'=> $pesan,'message_type'=>'warning']);
          }
        $validator = Validator::make(Request::all(),			
        [
        'email'=>'required|unique:cms_users|max:255',
        'nama' => 'required|string|min:3',
        'telepon' => 'required',
        'deskripsi' => 'required|string|min:3',
        'alamat' => 'required|string|min:3',			
        ]
    );
        if ($validator->fails()) 
        {
            $message = $validator->errors()->all('Tolong Masukan Data Dengan Benar !!!!');
            return redirect()->back()->with(['message'=>implode(', ',$message),'message_type'=>'danger']);
        }
        
        $save['pt'] = htmlentities(Request::get('pt'));
        $save['nama'] = htmlentities(Request::get('nama'));
        $save['alamat'] = htmlentities(Request::get('alamat'));
        $save['email'] = htmlentities(Request::get('email'));
        $save['telepon'] = htmlentities(Request::get('telepon'));
		$save['deskripsi'] = htmlentities(Request::get('deskripsi'));
        $save['kategori_id'] = Request::get('kategori');
        $save['aplikasi_id'] = Request::get('produk'); 
		$save['tgl_mulai'] = htmlentities(Request::get('openp'));
		$save['tgl_selesai'] = htmlentities(Request::get('finishp'));
		$save['status'] = 'mulai';
		$save['team_id'] = '4';
        DB::table('project')->insert($save);
        $project= ['name'=> $save['nama'],'desk'=> $save['deskripsi'],'start'=> $save['tgl_mulai'],'end'=> $save['tgl_selesai'],'telp'=> $save['telepon'],'buy'=> $save['harga_penawaran'],'pay'=> $save['harga_kesepakatan']];
        CRUDBooster::sendEmail(['to'=>$save['email'],'data'=>$project,'template'=>'project_id']);
        
        $config['content'] = "Ada Project Baru";
        $config['to'] = CRUDBooster::adminPath('project');
        $config['id_cms_users'] = [1]; //The Id of the user that is going to receive notification. This could be an array of id users [1,2,3,4,5]
        CRUDBooster::sendNotification($config);

        $pesan = 'Data Berhasil Di Simpan Silahkan Check Email Anda';
        return redirect()->back()->with(['message'=> $pesan,'message_type'=>'success']);
        

    }
    public function getSupport(){

        $data['jasa'] = DB::table('jasa')
        ->join('jkategori','jkategori.id','=','jkategori_id')
        ->select('jasa.*','jkategori.nama as jnam')
        ->orderby('jasa.id','DESC')
        ->paginate('20');		

        return view('support',$data);
    }
    public function postSupport(\Illuminate\Http\Request $req){
        if(CRUDBooster::myid()){
        }else{
          $pesan = ' Maaf Anda Harus Masuk Terlebih Dahulu !!';
          return redirect()->back()->with(['message'=> $pesan,'message_type'=>'warning']);
          }
        $kode_support = DB::table('support')->max('id') + 1;
        $kode_support = str_pad('P-SUP#'.$kode_support, 5, 0 , STR_PAD_LEFT);
        $save['kode_project'] = $kode_support;
        $save['pt'] = htmlentities(Request::get('pt'));
        $save['nama'] = htmlentities(Request::get('nama'));
        $save['alamat'] = htmlentities(Request::get('alamat'));
        $save['email'] = htmlentities(Request::get('email'));
        $save['telepon'] = htmlentities(Request::get('telepon'));
        $save['deskripsi'] = htmlentities(Request::get('deskripsi'));
        $save['jasa_id'] = Request::get('jasa');
        DB::table('support')->insert($save);
        
        $support= ['name'=> $save['nama'],'desk'=> $save['deskripsi'],'kode'=> $save['kode_project'],'telp'=> $save['telepon']];
        CRUDBooster::sendEmail(['to'=>$save['email'],'data'=>$support,'template'=>'support']);
        $config['content'] = "Ada Trouble Baru";
        $config['to'] = CRUDBooster::adminPath('support');
        $config['id_cms_users'] = [1]; //The Id of the user that is going to receive notification. This could be an array of id users [1,2,3,4,5]
        CRUDBooster::sendNotification($config);
                        
        
        $pesan = 'Data Berhasil Di Simpan Silahkan Check Email Anda';
		return redirect()->back()->with(['message'=> $pesan,'message_type'=>'success']);

    }
    
    public function getSyadm(){

        $data['sys'] = DB::table('jasa_sysadmin')
        ->select('jasa_sysadmin.*')
        ->orderby('jasa_sysadmin.id','DESC')
        ->paginate('20');    

        return view('syadm',$data);
    }
    public function postSysadmin(\Illuminate\Http\Request $req){
        if(CRUDBooster::myid()){
        }else{
          $pesan = 'Maaf Anda Harus Masuk Terlebih Dahulu !!';
          return redirect()->back()->with(['message'=> $pesan,'message_type'=>'warning']);
          }
        $kode_sys = DB::table('sysadmin')->max('id') + 1;
        $kode_sys = str_pad('P-SYS#'.$kode_sys, 5, 0 , STR_PAD_LEFT);
        $save['kode_project'] = $kode_sys;
        $save['pt'] = htmlentities(Request::get('pt'));
        $save['nama'] = htmlentities(Request::get('nama'));
        $save['alamat'] = htmlentities(Request::get('alamat'));
        $save['email'] = htmlentities(Request::get('email'));
        $save['telepon'] = htmlentities(Request::get('telepon'));
        $save['deskripsi'] = htmlentities(Request::get('deskripsi'));
        $save['jasa_sysadmin_id'] = Request::get('jasa');
        DB::table('sysadmin')->insert($save);
        
        $sys= ['name'=> $save['nama'],'desk'=> $save['deskripsi'],'kode'=> $save['kode_project'],'telp'=> $save['telepon']];
        CRUDBooster::sendEmail(['to'=>$save['email'],'data'=>$sys,'template'=>'sysadmin']);
        $config['content'] = "Ada Job Baru Sysadmin";
        $config['to'] = CRUDBooster::adminPath('sysadmin');
        $config['id_cms_users'] = [1]; //The Id of the user that is going to receive notification. This could be an array of id users [1,2,3,4,5]
		CRUDBooster::sendNotification($config);
        
        $pesan = 'Data Berhasil Di Simpan Silahkan Check Email Anda';
		return redirect()->back()->with(['message'=> $pesan,'message_type'=>'success']);

    }
    public function getLeads(\Illuminate\Http\Request $request){

        $data['page_title'] = 'Home';

        Session::flash('success', 'Pesan berhasil di kirim');
        return view('success');
    }
    public function postLeads(\Illuminate\Http\Request $req){

        $validator = Validator::make(Request::all(),			
        [
        'email'=>'required|unique:cms_users|max:255',
        'nama' => 'required|string|min:3|max:255',
        'telepon' => 'required',
        'komentar' => 'required|string|min:3|max:255',			
        ]
    );
        if ($validator->fails()) 
        {
            $message = $validator->errors()->all('"Tolong Masukan Data Dengan Benar !!!!"');
            return redirect()->back()->with(['message'=>implode(', ',$message),'message_type'=>'danger']);
        }
		$save['nama'] = htmlentities(Request::get('nama'));
		$save['email'] = htmlentities(Request::get('email'));
        $save['telepon'] = htmlentities(Request::get('telepon'));
        $save['komentar'] = htmlentities(Request::get('komentar'));
		$save['created_at'] = Carbon::now();
        DB::table('lead')->insert($save);


        $pesan = '"Pesan berhasil di kirim"';
		return redirect()->back()->with(['message'=> $pesan,'message_type'=>'success']);    
    
    }
}