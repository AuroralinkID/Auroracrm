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

class FrontController extends Controller
{

	// register
	public function getDaftar(\Illuminate\Http\Request $request){
			
		$data['page_title'] = 'Register |';		

	return view('register',$data);
}
public function postDaftar(\Illuminate\Http\Request $req){

	$this->validate($req, [
		'email' => 'required|unique:cms_users|max:255',
		'password' => 'required',
		'nama' => 'required',
		'alamat' => 'required',
		'telepon' => 'required',
		'alamat' => 'required',
	]);

		$pass = Request::get('password');
		$pass2 = bcrypt($pass);
		$save['name'] = Request::get('nama');
		$save['email'] = Request::get('email');
		$save['password'] = $pass2;
		$save['id_cms_privileges'] = 3;
		$save['telepon'] = Request::get('telepon');
		$save['alamat'] = Request::get('alamat');
		$save['verify'] = \Hash::make(Request::get('email'));
		$save['created_at'] = Carbon::now();
		DB::table('cms_users')->insert($save);
		$lastinsertid = DB::getPdo()->lastInsertId();
		
		
		$inilinkna = url('verify/'.$lastinsertid);
		

		$data = ['linkna'=> $inilinkna,'name'=> $save['name']];
		CRUDBooster::sendEmail(['to'=>$save['email'],'data'=>$data,'template'=>'verifikas_email_member']);
		
		
		Session::flash('success', 'Registrasi Berhasil Silahkan Periksa Email Anda');
		Session::flash('message', "Registrasi Berhasil Silahkan Periksa Email Anda");
		return redirect()->back();
	
	
}

		public function getVerify($ida) {	

		$users = DB::table(config('crudbooster.USER_TABLE'))->where("id",$ida)->first(); 	
		if($ida == $users->id) {
			
			DB::table(config('crudbooster.USER_TABLE'))->where('email', $users->email)->update(['status' => 'Active']);
				
			return redirect()->route('getLogin')->with(['message'=>'Verifikasi Berhasil Dilakukan ^_^','message_type'=>'success']);
		}else{
			return view('register');			
			}



}

public function getPdf($idservis)
{
  $myid = CRUDBooster::myId();

	$usr = DB::table('servis')->where('id',$idservis)->first();
	
	$gars= DB::table('servis')
	->join('sgaransi','sgaransi.id','=','sgaransi_id')
	->select('sgaransi.*','sgaransi.nama as status')
	->where('servis.id',$usr->id)
	->first();
	
	$teams = DB::table('servis')
	->join('team','team.id','=','team_id')
	->select('team.*','team.nama as tnama')
	->where('servis.id',$usr->id)
	->first();

//	$bias = DB::table('servis_detail')
//	->join('produk','produk.id','=','produk_id')
//	->select('servis_detail.*','produk.nama as judul','produk.sku as prosku')
//	->where('servis_id',$usr->id)
//	->get();

  $pdf = PDF::loadView('tts', compact('usr','gars','teams','bias'));
  return $pdf->stream('tts.pdf');
}	


public function getOrderpdf($idorder)
{
	$myid = CRUDBooster::myId();
	$data = [];
	$data['export'] = true;
	$data['page_title'] = 'Invoice';  
	$data['idorder'] = $id;

	$ord = DB::table('order')->where('id',$idorder)->first();
	$ords = DB::table('order_detail')
	->join('produk','produk.id','=','produk_id')
	->select('order_detail.*','produk.nama as judul','produk.sku as prosku')
	->where('order_id',$ord->id)
	->get();
	$disc = DB::table('order')
	->join('servis','servis.id','=','servis_id')
	->join('diskon','diskon.id','=','diskon_id')
	->select('order.*','servis.biaya as biaya','diskon.nilai as disc')
	->where('order.id',$ord->id)
	->get();
		   
	$pdf = PDF::loadView('invoice', compact('ord','ords','disc'));
	return $pdf->stream('invoice.pdf');
}


public function getIndex()
{
	$myid = CRUDBooster::myId();
	$data = [];
	$data['export'] = true;
	$data['page_title'] = 'Halaman Harga';  
	$data['jasa'] = $id;
 
	$data['jasa'] = DB::table('jasa')
	->join('jkategori','jkategori.id','=','jkategori_id',)
	->select('jasa.*','jasa.nama as judul','jkategori.nama as jid','jasa.biaya as jasah','jasa.deskripsi as jdesk','jasa.fitur as fitur','jasa.fitur1 as fitur1','jasa.fitur2 as fitur2','jasa.fitur3 as fitur3')
	->orderby('jasa.id','DESC')
	->take(4)
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
	->select('pabout.*','pabout.judul as pajud','pabout.logo as papict','pabout.deskripsi as padesk')
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

	$data['playanan'] = DB::table('playanan')
	->select('playanan.*','playanan.judul as pljud','playanan.jdsatu as pjsatu','playanan.jdua as pjdua','playanan.jtiga as pjtiga','playanan.logo as plog','playanan.deskripsi as pldesk','playanan.desksatu as plsatu','playanan.deskdua as pldua','playanan.desktiga as pltiga')
	->orderby('playanan.id','DESC')
	->take(6)
	->get();

	$data['Fontawesome'] = Fontawesome::getIcons();


//	$data = Fontawesome::getIcons();
	return view('home',$data)->render();
//	return view('crudbooster::components.list_icon', compact('data'))->render();
}
public function cart()
{

	return view('cart');
}

public function bayar()
{

	return view('bayar');
}
	public function postLogin() {		

			$validator = Validator::make(Request::all(),			
				[
				'email'=>'required|email|exists:'.config('crudbooster.USER_TABLE'),
				'password'=>'required'			
				]
			);
			
			if ($validator->fails()) 
			{
				$message = $validator->errors()->all();
				return redirect()->back()->with(['message'=>implode(', ',$message),'message_type'=>'danger']);
			}

			$email 		= Request::input("email");
			$password 	= Request::input("password");
			$users 		= DB::table(config('crudbooster.USER_TABLE'))->where("email",$email)->first(); 		

			if(\Hash::check($password,$users->password)) {
				$priv = DB::table("cms_privileges")->where("id",$users->id_cms_privileges)->first();

				$roles = DB::table('cms_privileges_roles')
				->where('id_cms_privileges',$users->id_cms_privileges)
				->join('cms_moduls','cms_moduls.id','=','id_cms_moduls')
				->select('cms_moduls.name','cms_moduls.path','is_visible','is_create','is_read','is_edit','is_delete')
				->get();
				
				$photo = ($users->photo)?asset($users->photo):asset('vendor/crudbooster/avatar.jpg');
				Session::put('admin_id',$users->id);			
				Session::put('admin_is_superadmin',$priv->is_superadmin);
				Session::put('admin_name',$users->name);	
				Session::put('admin_photo',$photo);
				Session::put('admin_privileges_roles',$roles);
				Session::put("admin_privileges",$users->id_cms_privileges);
				Session::put('admin_privileges_name',$priv->name);			
				Session::put('admin_lock',0);
				Session::put('theme_color',$priv->theme_color);
				Session::put("appname",CRUDBooster::getSetting('appname'));		

				CRUDBooster::insertLog(trans("crudbooster.log_login",['email'=>$users->email,'ip'=>Request::server('REMOTE_ADDR')]));		

				$cb_hook_session = new \App\Http\Controllers\CBHook;
				$cb_hook_session->afterLogin();

				return redirect(CRUDBooster::adminPath());
			}else{
				return redirect()->route('getLogin')->with('message', trans('crudbooster.alert_password_wrong'));			
			}		
		}
		
	

		

}
