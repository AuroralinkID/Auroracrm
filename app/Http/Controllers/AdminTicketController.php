<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminTicketController extends \crocodicstudio\crudbooster\controllers\CBController {

	    public function cbInit() {

			# START CONFIGURATION DO NOT REMOVE THIS LINE
			$this->title_field = "judul";
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
			if(CRUDBooster::isSuperadmin()){ $this->$button_filter = true; } else { $this->button_filter = false; }
			$this->button_import = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_import = true; } else { $this->button_import = false; }
			$this->button_export = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_export = true; } else { $this->button_export = false; }
			$this->table = "ticket";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Pelanggan","name"=>"cms_users_id","join"=>"cms_users,name"];
			$this->col[] = ["label"=>"Nomer Ticket","name"=>"nomer_ticket"];
			$this->col[] = ["label"=>"Judul","name"=>"judul"];
//			$this->col[] = ["label"=>"Keterangan","name"=>"keterangan"];
			$this->col[] = ["label"=>"Screenshot","name"=>"screenshot","image"=>true];
			$this->col[] = ["label"=>"Devisi","name"=>"dev_id","join"=>"dev,nama"];
			$this->col[] = ["label"=>"Prioritas","name"=>"tprioritas_id","join"=>"tprioritas,nama"];
//			$this->col[] = ["label"=>"Kategori","name"=>"tkategori_id","join"=>"tkategori,nama"];
			$this->col[] = ["label"=>"Status","name"=>"status"];
			# END COLUMNS DO NOT REMOVE THIS LINE


			$nomer_ticket = DB::table('ticket')->max('id') + 1;
			$nomer_ticket = str_pad('TCKT#'.$nomer_ticket, 5, 0 , STR_PAD_LEFT);


			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Judul','name'=>'judul','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'Anda hanya dapat memasukkan huruf saja'];
			$this->form[] = ['label'=>'Kode Pelanggan','name'=>'cms_users_id','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>CRUDBooster::myId(),'readonly'=>true];
			$this->form[] = ['label'=>'Nomer Ticket','name'=>'nomer_ticket','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>$nomer_ticket,'readonly'=>true];
			$this->form[] = ['label'=>'Keterangan','name'=>'keterangan','type'=>'wysiwyg','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Screenshot','name'=>'screenshot','type'=>'upload','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Devisi','name'=>'dev_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'dev,nama'];
			$this->form[] = ['label'=>'Prioritas','name'=>'tprioritas_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'tprioritas,nama'];
			$this->form[] = ['label'=>'Kategori','name'=>'tkategori_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'tkategori,nama'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Judul','name'=>'judul','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10','placeholder'=>'Anda hanya dapat memasukkan huruf saja'];
			//$this->form[] = ['label'=>'Kode Pelanggan','name'=>'cms_users_id','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>'1','value'=>'1'];
			//$this->form[] = ['label'=>'Keterangan','name'=>'keterangan','type'=>'wysiwyg','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Screenshot','name'=>'screenshot','type'=>'upload','validation'=>'required|min:1|max:255','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Devisi','name'=>'dev_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'dev,nama'];
			//$this->form[] = ['label'=>'Prioritas','name'=>'tprioritas_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'tprioritas,nama'];
			//$this->form[] = ['label'=>'Kategori','name'=>'tkategori_id','type'=>'radio','validation'=>'required','width'=>'col-sm-10','datatable'=>'tkategori,nama'];
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
			$this->addaction[] = ['label'=>'Close Ticket','url'=>CRUDBooster::mainpath('set-status/close/[id]'),'icon'=>'fa fa-mouse-pointer','color'=>'warning','showIf'=>"[status] == 'open'",'confirmation' => true];
			$this->addaction[] = ['label'=>'Buka Ticket','url'=>CRUDBooster::mainpath('set-status/open/[id]'),'icon'=>'fa fa-undo','color'=>'info','showIf'=>"[status] == 'close'",'confirmation' => true];
//			$this->addaction[] = ['label'=>'Set Batal','url'=>CRUDBooster::mainpath('set-status/batal/[id]'),'icon'=>'fa fa-ban','color'=>'danger','showIf'=>"[status] =='progress'", 'confirmation' => true];
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
			$this->table_row_color[] = ['condition'=>"[status] == 'open'","color"=>"warning"];
			$this->table_row_color[] = ['condition'=>"[status] == 'close'","color"=>"success"];  	          

	        
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
	    	if($column_index=='7'){
	    		if($column_value=='open'){
	    			$column_value = "<label style='padding:5px;font-size:12px' class='label label-warning'>open</label>";
	    		}else{
	    			$column_value = "<label style='padding:5px;font-size:12px' class='label label-success'>close</label>";
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
	        //Your code here
		//	$config['content'] = "Ada Ticket Masuk";
		//	$config['to'] = CRUDBooster::adminPath('ticket');
		//	$config['cms_users_id'] = CRUDBooster::isSuperadmin(); //This is an array of id users
		//	CRUDBooster::sendNotification($config);


			//kirim email setelah buat tiket
			//Send Email
			$data = ['name'=>'John Doe','address'=>'Lorem ipsum dolor...'];
			$row = CRUDBooster::first($this->table,$id);
			$member = CRUDBooster::first('cms_users',$row->cms_users_id);
			CRUDBooster::sendEmail(['to'=>$member->email,'data'=>$data,'template'=>'ticket_baru']);
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
		    if(Request::get('status') == 'close') {
				$row = CRUDBooster::first($this->table,$id);
				$member = CRUDBooster::first('cms_users',$row->cms_users_id);
				$data = ['name'=>$cms_users->name];
				CRUDBooster::sendEmail(['to'=>$member->email,'data'=>$data,'template'=>'ticket_selesai']);

			}	
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
			DB::table('ticket')->where('id',$id)->update(['status'=>$status]);
			
			//This will redirect back and gives a message
			CRUDBooster::redirect($_SERVER['HTTP_REFERER'],"Ticket Berhasil Di update !","info");
		}
	}