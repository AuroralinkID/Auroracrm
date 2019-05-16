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


	$validator = Validator::make(Request::all(),
	[
	'email' => 'required|unique:cms_users|max:255',
	'password' => 'required',
	'nama' => 'required|string|min:3|max:10',
	'alamat' => 'required|min:1|max:20',
	'telepon' => 'required|min:1|max:13',
	]);

	if ($validator->fails()) 
	{
		$message = $validator->errors()->all('Mohon Masukan Data Dengan Benar !!!');
		return redirect()->back()->with(['message'=>implode(', ',$message),'message_type'=>'danger']);
	}
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
		
		
		$pesan = 'Registrasi Berhasil Silahkan Periksa Email Anda';
		return redirect()->back()->with(['message'=>$pesan,'message_type'=>'success']);
	
	
}

		public function getVerify($ida) {	

		$users = DB::table(config('crudbooster.USER_TABLE'))->where("id",$ida)->first(); 	
		if($ida == $users->id) {
			
			DB::table(config('crudbooster.USER_TABLE'))->where('email', $users->email)->update(['status' => 'Active']);
			$pesanv = 'Verifikasi Berhasil Dilakukan ^_^';	
			return redirect()->route('getLogin')->with(['message'=>$pesanv,'message_type'=>'success']);
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
