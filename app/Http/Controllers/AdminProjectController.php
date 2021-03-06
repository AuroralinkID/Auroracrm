<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminProjectController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "nama";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = true;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_text";
			$this->button_add = true;
		//	if(CRUDBooster::isSuperadmin()){ $this->$button_add = true; } else { $this->button_add = false; }
			$this->button_edit = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_edit = true; } else { $this->button_edit = false; }
			$this->button_delete = true;
		//	if(CRUDBooster::isSuperadmin()){ $this->$button_delete = true; } else { $this->button_delete = false; }
			$this->button_detail = true;
		//	if(CRUDBooster::isSuperadmin()){ $this->$button_detail = true; } else { $this->button_detail = false; }
			$this->button_show = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_show = true; } else { $this->button_show = false; }
			$this->button_filter = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_filter = true; } else { $this->button_filter = false; }
			$this->button_import = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_import = true; } else { $this->button_import = false; }
			$this->button_export = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_export = true; } else { $this->button_export = false; }
			$this->table = "project";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
		//	$this->col[] = ["label"=>"Nama Pelanggan","name"=>"cms_users_id","join"=>"cms_users,name"];
			$this->col[] = ["label"=>"PT","name"=>"pt"];
			$this->col[] = ["label"=>"Nama","name"=>"nama"];
		//	$this->col[] = ["label"=>"Deskripsi","name"=>"deskripsi"];
		//	$this->col[] = ["label"=>"Kategori","name"=>"kategori_id","join"=>"kategori,nama"];
			$this->col[] = ["label"=>"Produk","name"=>"aplikasi_id","join"=>"aplikasi,nama"];
			$this->col[] = ["label"=>"Tgl Mulai","name"=>"tgl_mulai"];
			$this->col[] = ["label"=>"Tgl Mulai","name"=>"tgl_selesai"];
			$this->col[] = ["label"=>"Status","name"=>"status"];
			$this->col[] = ["label"=>"Pelaksana","name"=>"team_id","join"=>"team,nama"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Kode Pelanggan','name'=>'cms_users_id','type'=>'hidden','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>CRUDBooster::myId(),'readonly'=>true];
			$this->form[] = ['label'=>'Nama PT','name'=>'pt','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'Nama PT'];
			$this->form[] = ['label'=>'Nama','name'=>'nama','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'Nama Pelanggan'];
			$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Alamat','name'=>'alamat','type'=>'textarea','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Telepon','name'=>'telepon','type'=>'number','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Deskripsi','name'=>'deskripsi','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kategori','name'=>'kategori_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'dkategori','datamodal_columns'=>'nama','datamodal_size'=>'small'];
			$this->form[] = ['label'=>'Produk','name'=>'aplikasi_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'produk','datamodal_columns'=>'nama','datamodal_size'=>'small'];
			$this->form[] = ['label'=>'Tgl Mulai','name'=>'tgl_mulai','type'=>'date','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Tgl Selesai','name'=>'tgl_selesai','type'=>'date','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
		//	$this->form[] = ['label'=>'Status','name'=>'status','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
		//	$this->form[] = ['label'=>'Harga Penawaran','name'=>'harga_penawaran','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
		//	$this->form[] = ['label'=>'Harga Kesepakatan','name'=>'harga_kesepakatan','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Pelaksana','name'=>'team_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'team','datamodal_columns'=>'nama','datamodal_size'=>'small'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Nama','name'=>'nama','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'Anda hanya dapat memasukkan huruf saja'];
			//$this->form[] = ['label'=>'Deskripsi','name'=>'deskripsi','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kategori','name'=>'kategori_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'kategori','datamodal_columns'=>'nama','datamodal_size'=>'small'];
			//$this->form[] = ['label'=>'Tgl Mulai','name'=>'tgl_mulai','type'=>'date','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Tgl Selesai','name'=>'tgl_selesai','type'=>'date','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Status','name'=>'status','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Harga Penawaran','name'=>'harga_penawaran','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Harga Kesepakatan','name'=>'harga_kesepakatan','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Pelaksana','name'=>'team_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'team','datamodal_columns'=>'nama','datamodal_size'=>'small'];
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
			$this->addaction[] = ['label'=>'Set Mulai','url'=>CRUDBooster::mainpath('set-status/mulai/[id]'),'icon'=>'fa fa-sign-in','color'=>'warning','showIf'=>"[status] == 'rencana'"];
			$this->addaction[] = ['label'=>'Set On progress','url'=>CRUDBooster::mainpath('set-status/progress/[id]'),'icon'=>'fa fa-refresh','color'=>'warning','showIf'=>"[status] == 'mulai'"];
			$this->addaction[] = ['label'=>'Set Batal','url'=>CRUDBooster::mainpath('set-status/batal/[id]'),'icon'=>'fa fa-ban','color'=>'danger','showIf'=>"[status] =='progress'", 'confirmation' => true];
	//		$this->addaction[] = ['label'=>'Set Batal','url'=>CRUDBooster::mainpath('set-status/batal/[id]'),'icon'=>'fa fa-money','color'=>'warning','showIf'=>"[status] == 'progress"];
			$this->addaction[] = ['label'=>'Selesai','url'=>CRUDBooster::mainpath('set-status/selesai/[id]'),'icon'=>'fa fa-check','color'=>'success','showIf'=>"[status] == 'progress'", 'confirmation' => true];
			}

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
	        $this->table_row_color = [];     	          
			$this->table_row_color[] = ['condition'=>"[status] == 'rencana'","color"=>"warning"];
			$this->table_row_color[] = ['condition'=>"[status] == 'progress'","color"=>"success"];
			$this->table_row_color[] = ['condition'=>"[status] == 'batal'","color"=>"danger"];
			$this->table_row_color[] = ['condition'=>"[status] == 'selesai'","color"=>"info"];
	        
	        /*
	        | ---------------------------------------------------------------------- 
	        | You may use this bellow array to add statistic at dashboard 
	        | ---------------------------------------------------------------------- 
	        | @label, @count, @icon, @color 
	        |
	        */
	        $this->index_statistic = array();



	        /*
	        | ---------------------------------------------------------------------- 
	        | Add javascript at body 
	        | ---------------------------------------------------------------------- 
	        | javascript code in the variable 
	        | $this->script_js = "function() { ... }";
	        |
	        */
	        $this->script_js = NULL;


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
	    }

	    /*
	    | ---------------------------------------------------------------------- 
	    | Hook for manipulate row of index table html 
	    | ---------------------------------------------------------------------- 
	    |
	    */    
	    public function hook_row_index($column_index,&$column_value) {	        
	    	//Your code here
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
	        //Your code here

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
			DB::table('project')->where('id',$id)->update(['status'=>$status]);
			
			//This will redirect back and gives a message
			CRUDBooster::redirect($_SERVER['HTTP_REFERER'],"The status Order has been updated !","info");
		 }

	}