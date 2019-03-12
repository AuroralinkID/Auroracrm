<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminOrderController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = true;
			$this->button_table_action = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_table_action = true; } else { $this->button_table_action = false; }
			$this->button_bulk_action = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_bulk_action = true; } else { $this->button_bulk_action = false; }
			$this->button_action_style = "button_text";
			$this->button_add = true;
			$this->button_edit = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_edit = true; } else { $this->button_edit = false; }
			$this->button_delete = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_delete = true; } else { $this->button_delete = false; }
			$this->button_detail = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_detail = true; } else { $this->button_detail = false; }
			$this->button_show = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_show = true; } else { $this->button_show = false; }
			$this->button_filter = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_filter = true; } else { $this->button_filter = false; }
			$this->button_import = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_import = true; } else { $this->button_import = false; }
			$this->button_export = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_export = true; } else { $this->button_export = false; }
			$this->table = "order";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Tanggal Order","name"=>"created_at"];
			$this->col[] = ["label"=>"Nomer Order","name"=>"nomer_order"];
			$this->col[] = ["label"=>"Users","name"=>"cms_users_id","join"=>"cms_users,name"];
//			$this->col[] = ["label"=>"Nama","name"=>"nama"];
//			$this->col[] = ["label"=>"Email","name"=>"email"];
//			$this->col[] = ["label"=>"Telepon","name"=>"telepon"];
//			$this->col[] = ["label"=>"Email","name"=>"email"];
			$this->col[] = ["label"=>"Total","name"=>"total","callback_php"=>'"Rp. ".number_format($row->total)'];
			$this->col[] = ["label"=>"Diskon","name"=>"diskon","callback_php"=>'"Rp. ".number_format($row->diskon)'];
			$this->col[] = ["label"=>"Biaya Servis","name"=>"pajak","callback_php"=>'"Rp. ".number_format($row->pajak)'];
//			$this->col[] = ["label"=>"Biaya Servis","name"=>"servis","callback_php"=>'"Rp. ".number_format($row->pajak)'];
			$this->col[] = ["label"=>"Grand Total","name"=>"grand_total","callback_php"=>'"Rp. ".number_format($row->grand_total)'];
			$this->col[] = ["label"=>"Status","name"=>"status"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			$nomer_order = DB::table('order')->max('id') + 1;
			$nomer_order = str_pad('INV/ORDER/'.$nomer_order, 5, 0 , STR_PAD_LEFT);

			//$cms_users_id = CRUDBooster::myName();


			#$biaya_servis = DB::table('servis')->first()->biaya;
			# START FORM DO NOT REMOVE THIS LINE
			
			$this->form = [];
			$this->form[] = ['label'=>'Kode Pelanggan','name'=>'cms_users_id','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>CRUDBooster::myId(),'readonly'=>true];
			$this->form[] = ['label'=>'Nama','name'=>'nama','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Alamat','name'=>'alamat','type'=>'textarea','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Telepon','name'=>'telepon','type'=>'number','validation'=>'required','width'=>'col-sm-10'];	
			$this->form[] = ['label'=>'Nomer Order','name'=>'nomer_order','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>$nomer_order,'readonly'=>true];
			
			
			$columns = [];
			$columns[] = ['label'=>'Produk','name'=>'produk_id','type'=>'datamodal','datamodal_table'=>'produk','datamodal_columns'=>'nama,sku,harga_jual,stock','datamodal_select_to'=>'harga_jual:harga,sku:produk_sku','required'=>true];
			$columns[] = ['label'=>'Product SKU','name'=>'produk_sku','type'=>'text','readonly'=>true,'required'=>true];
			$columns[] = ['label'=>'Harga','name'=>'harga','type'=>'number','readonly'=>true,'required'=>true];
			$columns[] = ['label'=>'QTY','name'=>'qty','type'=>'number','required'=>true];
			$columns[] = ['label'=>'Sub Total','name'=>'sub_total','type'=>'number','formula'=>'[harga] * [qty]','readonly'=>true,'required'=>true];
			$this->form[] = ['label'=>'Order Detail','name'=>'order_detail','type'=>'child','columns'=>$columns,'table'=>'order_detail','foreign_key'=>'order_id'];			

			$this->form[] = ['label'=>'Total','name'=>'total','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','readonly'=>'true','value'=>0];
//			$this->form[] = ['label'=>'Biaya Servis','name'=>'servis','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','value'=>0];
			$this->form[] = ['label'=>'Biaya Servis','name'=>'pajak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','value'=>0];
			$this->form[] = ['label'=>'Diskon','name'=>'diskon','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','value'=>0];
			$this->form[] = ['label'=>'Grand Total','name'=>'grand_total','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','readonly'=>true,'value'=>0];
			# OLD END FORM

			/* 
	        | ---------------------------------------------------------------------- 
	        | Sub Module
	        | ----------------------------------------------------------------------     
			| @label          = Label of action 
			| @path           = Path of sub module
			| @foreign_key 	  = foreign key of sub table/module
			| @button_color   = Bootstrap Class (primary,success,warning,danger)
			| @button_icon    = Font Awesome Class  
			| @parent_columns = Sparate with comma, e.g : name,created_at
	        | 
	        */
	        $this->sub_module = array();
		//	$this->sub_module[] = ['label'=>'bayar','path'=>'pembayaran','button_color'=>'warning','button_icon'=>'fa fa-pencil-square-o','parent_columns'=>'id,sku,nama,stock','foreign_key'=>'produk_id'];

	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Action Button / Menu
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
	        | @icon        = Font awesome class icon. e.g : fa fa-bars
	        | @color 	   = Default is primary. (primary, warning, succecss, info)     
	        | @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
	        | 
	        */
			$this->addaction = [];
			if(CRUDBooster::isSuperadmin()){
			$this->addaction[] = ['label'=>'Belum Bayar','url'=>CRUDBooster::mainpath('set-status/lunas/[id]'),'icon'=>'fa fa-money','color'=>'warning','showIf'=>"[status] == 'pending'"];
			$this->addaction[] = ['label'=>'Sudah Bayar','url'=>CRUDBooster::mainpath('set-status/pending/[id]'),'icon'=>'fa fa-money','color'=>'success','showIf'=>"[status] == 'lunas'", 'confirmation' => true];
			}
			//$this->addaction[] = ['label'=>'Bayar','url'=>CRUDBooster::mainpath('pembayaran/detail/[id]'),'icon'=>'fa fa-money','color'=>'warning','showIf'=>"[status] == 'pending'"];
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add More Button Selected
	        | ----------------------------------------------------------------------     
	        | @label       = Label of action 
	        | @icon 	   = Icon from fontawesome
	        | @name 	   = Name of button 
	        | Then about the action, you should code at actionButtonSelected method 
	        | 
	        */
	        $this->button_selected = array();

	                
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add alert message to this module at overheader
	        | ----------------------------------------------------------------------     
	        | @message = Text of message 
	        | @type    = warning,success,danger,info        
	        | 
	        */
	        $this->alert        = array();
	                

	        
	        /* 
	        | ---------------------------------------------------------------------- 
	        | Add more button to header button 
	        | ----------------------------------------------------------------------     
	        | @label = Name of button 
	        | @url   = URL Target
	        | @icon  = Icon from Awesome.
	        | 
	        */
	        $this->index_button = array();



	        /* 
	        | ---------------------------------------------------------------------- 
	        | Customize Table Row Color
	        | ----------------------------------------------------------------------     
	        | @condition = If condition. You may use field alias. E.g : [id] == 1
	        | @color = Default is none. You can use bootstrap success,info,warning,danger,primary.        
	        | 
	        */
	        $this->table_row_color = array();     	          
			//$this->table_row_color[] = ["nama"=>"[produk] == 'active'","color"=>"success"];
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
			*/
			
	        $this->index_statistic = array();
	//		$this->index_statistic[] = ['label'=>'Lorem Ipsum','count'=>DB::order($this->table)->count(),'icon'=>'fa fa-bars','color'=>'red','width'=>'col-sm-3'];

	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js ="
			$(function() {
				
				setInterval(function() {
					var total = 0;
					$('#table-orderdetail tbody .sub_total').each(function() {
						total += parseInt($(this).text());
					})
					$('#total').val(total);

					var grand_total = 0;
					grand_total += total;
					grand_total += parseInt($('#pajak').val());
					grand_total -= parseInt($('#diskon').val());
					
					$('#grand_total').val(grand_total);
				},500);
			})
		";

            /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code before index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it before index table
	        | $this->pre_index_html = "<p>test</p>";
	        |
	        */
	        $this->pre_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include HTML Code after index table 
	        | ---------------------------------------------------------------------- 
	        | html code to display it after index table
	        | $this->post_index_html = "<p>test</p>";
	        |
	        */
	        $this->post_index_html = null;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include Javascript File 
	        | ---------------------------------------------------------------------- 
	        | URL of your javascript each array 
	        | $this->load_js[] = asset("myfile.js");
	        |
	        */
	        $this->load_js = array();
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Add css style at body 
	        | ---------------------------------------------------------------------- 
	        | css code in the variable 
	        | $this->style_css = ".style{....}";
	        |
	        */
	        $this->style_css = NULL;
	        
	        
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | Include css File 
	        | ---------------------------------------------------------------------- 
	        | URL of your css each array 
	        | $this->load_css[] = asset("myfile.css");
	        |
	        */
	        $this->load_css = array();
	        
	        
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for button selected
	    | ---------------------------------------------------------------------- 
	    | @id_selected = the id selected
	    | @button_name = the name of button
	    |
	    */
	    public function actionButtonSelected($id_selected,$button_name) {
	        //Your code here
	            
	    }


	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate query of index result 
	    | ---------------------------------------------------------------------- 
	    | @query = current sql query 
	    |
	    */
	    public function hook_query_index(&$query) {
	        //Your code here
		 if(!CRUDBooster::isSuperadmin()){
			$query->where('cms_users_id',CRUDBooster::myId());


		 }
//		$query->where('cms_users_id',CRUDBooster::myId());
//		$query->where('cms_users_id',CRUDBooster::isSuperadmin());
//		 $query->where('cms_users_id',CRUDBooster::getCurrentId());
//		 $query->where('cms_users_id',CRUDBooster::getCurrentMethod());  

	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
			//Your code here
			if($column_index=='8'){
	    		if($column_value=='pending'){
	    			$column_value = "<label style='padding:5px;font-size:12px' class='label label-warning'>pending</label>";
	    		}else{
	    			$column_value = "<label style='padding:5px;font-size:12px' class='label label-success'>lunas</label>";
	    		}
	    	}
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before add data is execute
	    | ---------------------------------------------------------------------- 
	    | @arr
	    |
	    */
	    public function hook_before_add(&$postdata) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after add public static function called 
	    | ---------------------------------------------------------------------- 
	    | @id = last insert id
	    | 
	    */
	    public function hook_after_add($id) {   
			if(CRUDBooster::isSuperadmin()){    
	        //Your code here
	    	$order_detail = DB::table('order_detail')->where('order_id',$id)->get();	    	
	    	foreach($order_detail as $od) {
	    		$p = DB::table('produk')->where('id',$od->produk_id)->first();
	    		DB::table('produk')->where('id',$od->produk_id)->update(['stock'=> abs($p->stock - $od->qty) ]);
			}
		}

			
			
			$row = CRUDBooster::first($this->table,$id);
			$member = CRUDBooster::first('cms_users',$row->cms_users_id);
			$no_order = DB::table('order')->where('id',$id)->first()->nomer_order;
			$data = ['name'=> $member->name,'idorder'=> $no_order];
			CRUDBooster::sendEmail(['to'=>$member->email,'data'=>$data,'template'=>'order_berhasil']);



			$config['content'] = "Ada Order Baru";
			$config['to'] = CRUDBooster::adminPath('order');
			$config['id_cms_users'] = [1]; //The Id of the user that is going to receive notification. This could be an array of id users [1,2,3,4,5]
			CRUDBooster::sendNotification($config);


	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate data input before update data is execute
	    | ---------------------------------------------------------------------- 
	    | @postdata = input post data 
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_edit(&$postdata,$id) {        
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after edit public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_edit($id) {
	        //Your code here 
//			if(Request::get('status') == 'pending') {
//				$row = CRUDBooster::first($this->table,$id);
//				$member = CRUDBooster::first('member',$row->member_id);
//				$data = ['name'=>$member->name ];
//				CRUDBooster::sendEmail(['to'=>$member->email,'data'=>$data,'template'=>'email_after_paid');
//			}
	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command before delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_before_delete($id) {
	        //Your code here

	    }

	    /* 
	    | ---------------------------------------------------------------------- 
	    | Hook for execute command after delete public static function called
	    | ----------------------------------------------------------------------     
	    | @id       = current id 
	    | 
	    */
	    public function hook_after_delete($id) {
	        //Your code here

	    }



		//By the way, you can still create your own method in here... :) 
		public function getSetStatus($status,$id) {
			DB::table('order')->where('id',$id)->update(['status'=>$status]);
			
			//This will redirect back and gives a message
			CRUDBooster::redirect($_SERVER['HTTP_REFERER'],"The status Order has been updated !","info");
		 }


	}
