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
				$save['created_at'] = Carbon::now();
				DB::table('cms_users')->insert($save);
				
				Session::flash('success', 'Registrasi Berhasil Silahkan Login');
				Session::flash('message', "Registrasi Berhasil Silahkan Login");
				return redirect()->back();
			
			
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
