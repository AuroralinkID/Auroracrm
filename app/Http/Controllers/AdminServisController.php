<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminServisController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "id";
			$this->limit = "20";
			$this->orderby = "id,desc";
			$this->global_privilege = true;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_text";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_show = true; } else { $this->button_show = false; }
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "servis";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Nama Pelanggan","name"=>"cms_users_id","join"=>"cms_users,name"];
			$this->col[] = ["label"=>"Kode Servis","name"=>"kode_servis"];
			$this->col[] = ["label"=>"Unit","name"=>"unit"];
			$this->col[] = ["label"=>"Kategori","name"=>"k_servis_id","join"=>"k_servis,nama"];
			$this->col[] = ["label"=>"Garansi","name"=>"sgaransi_id","join"=>"sgaransi,nama"];
			$this->col[] = ["label"=>"Teknisi","name"=>"team_id","join"=>"team,nama"];
			$this->col[] = ["label"=>"Status","name"=>"status"];
			$this->col[] = ["label"=>"Biaya","name"=>"biaya","callback_php"=>'"Rp. ".number_format($row->biaya)'];
			# END COLUMNS DO NOT REMOVE THIS LINE

			$kode_servis = DB::table('servis')->max('id') + 1;
			$kode_servis = str_pad('SRVS#'.$kode_servis, 5, 0 , STR_PAD_LEFT);

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Kode Pelanggan','name'=>'cms_users_id','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>CRUDBooster::myId(),'readonly'=>true];
			$this->form[] = ['label'=>'Nomer Ticket','name'=>'kode_servis','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>$kode_servis,'readonly'=>true];
			$this->form[] = ['label'=>'Unit','name'=>'unit','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kategori','name'=>'k_servis_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'k_servis,nama'];
			$this->form[] = ['label'=>'Garansi','name'=>'sgaransi_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'sgaransi,nama'];
			$this->form[] = ['label'=>'Snid','name'=>'snid','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Keluhan','name'=>'keluhan','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Teknisi','name'=>'team_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'team','datamodal_columns'=>'nama','datamodal_size'=>'small'];
			$this->form[] = ['label'=>'Biaya','name'=>'biaya','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Kode Pelanggan','name'=>'cms_users_id','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>CRUDBooster::myId(),'readonly'=>true];
			//$this->form[] = ['label'=>'Nomer Ticket','name'=>'kode_servis','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>$kode_servis,'readonly'=>true];
			//$this->form[] = ['label'=>'Unit','name'=>'unit','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Kategori','name'=>'k_servis_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'k_servis,nama'];
			//$this->form[] = ['label'=>'Garansi','name'=>'sgaransi_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'sgaransi,nama'];
			//$this->form[] = ['label'=>'Snid','name'=>'snid','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Keluhan','name'=>'keluhan','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Teknisi','name'=>'team_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'team','datamodal_columns'=>'nama','datamodal_size'=>'small'];
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
				$this->addaction[] = ['label'=>'Set dalam-pengecaken','url'=>CRUDBooster::mainpath('set-status/dalam-pengecaken/[id]'),'icon'=>'fa fa-search','color'=>'danger','showIf'=>"[status] == 'dalam-antiran'",'confirmation' => true];
				$this->addaction[] = ['label'=>'Set dalam-pengerjaan','url'=>CRUDBooster::mainpath('set-status/dalam-pengerjaan/[id]'),'icon'=>'fa fa-refresh','color'=>'warning','showIf'=>"[status] == 'dalam-pengecaken'",'confirmation' => true];
				$this->addaction[] = ['label'=>'Set menunggu-part','url'=>CRUDBooster::mainpath('set-status/menunggu-part/[id]'),'icon'=>'fa fa-gears','color'=>'info','showIf'=>"[status] == 'dalam-pengerjaan'",'confirmation' => true];
				$this->addaction[] = ['label'=>'Set Selesai','url'=>CRUDBooster::mainpath('set-status/selesai/[id]'),'icon'=>'fa fa-sign-out','color'=>'success','showIf'=>"[status] == 'menunggu-part'",'confirmation' => true];
				$this->addaction[] = ['label'=>'Set Diambil','url'=>CRUDBooster::mainpath('set-status/diambil/[id]'),'icon'=>'fa fa-check','color'=>'info','showIf'=>"[status] == 'selesai'",'confirmation' => true];

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
	        $this->table_row_color = array();     	          

	        
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
		//	if($column_index=='7'){
		//			$column_value = [];
	    //			$column_value == ['dalam-antiran'=> label style=>'padding:5px;font-size:12px' class='label label-danger'>dalam-antiran</label>"];
		//			$column_value = "<label style='padding:5px;font-size:12px' class='label label-warning'>dalam-pengecaken</label>";
		//			$column_value = "<label style='padding:5px;font-size:12px' class='label label-info'>dalam-pengerjaan</label>";
		//			$column_value = "<label style='padding:5px;font-size:12px' class='label label-warning'>menunggu-part</label>";
		//			$column_value = "<label style='padding:5px;font-size:12px' class='label label-success'>selesai</label>";
		//			$column_value = "<label style='padding:5px;font-size:12px' class='label label-success'>diambil</label>";
	    ///	}
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
	        //Send Email
			$data = ['name'=>'John Doe','address'=>'Lorem ipsum dolor...'];
			$row = CRUDBooster::first($this->table,$id);
			$member = CRUDBooster::first('cms_users',$row->cms_users_id);
			CRUDBooster::sendEmail(['to'=>$member->email,'data'=>$data,'template'=>'servis_baru']);
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
		public function getSetStatus($status,$id) {
			DB::table('servis')->where('id',$id)->update(['status'=>$status]);
			
			//This will redirect back and gives a message
			CRUDBooster::redirect($_SERVER['HTTP_REFERER'],"Ticket Berhasil Di update !","info");

		}
	    //By the way, you can still create your own method in here... :) 


	}