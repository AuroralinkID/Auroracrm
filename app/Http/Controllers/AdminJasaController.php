<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminJasaController extends \crocodicstudio\crudbooster\controllers\CBController {

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
			if(CRUDBooster::isSuperadmin()){ $this->$button_add= true; } else { $this->button_add = false; }
			$this->button_edit = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_edit = true; } else { $this->button_edit = false; }
			$this->button_delete = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_delete = true; } else { $this->button_delete = false; }
			$this->button_detail = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_show = true; } else { $this->button_show = false; }
			$this->button_filter = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_filter = true; } else { $this->button_filter = false; }
			$this->button_import = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_import = true; } else { $this->button_import = false; }
			$this->button_export = true;
			if(CRUDBooster::isSuperadmin()){ $this->$button_export = true; } else { $this->button_export = false; }
			$this->table = "jasa";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Nama","name"=>"nama"];
			$this->col[] = ["label"=>"Deskripsi","name"=>"deskripsi"];
			$this->col[] = ["label"=>"Fitur","name"=>"fitur"];
			$this->col[] = ["label"=>"Kategori","name"=>"jkategori_id","join"=>"jkategori,nama"];
		//	$this->col[] = ["label"=>"Fitur1","name"=>"fitur1"];
		//	$this->col[] = ["label"=>"Fitur2","name"=>"fitur2"];
		//	$this->col[] = ["label"=>"Fitur3","name"=>"fitur3"];
			$this->col[] = ["label"=>"Gambar","name"=>"gambar","image"=>true];
			$this->col[] = ["label"=>"Biaya","name"=>"biaya","callback_php"=>'"Rp. ".number_format($row->biaya)'];
			# END COLUMNS DO NOT REMOVE THIS LINE

			# START FORM DO NOT REMOVE THIS LINE
			$this->form = [];
			$this->form[] = ['label'=>'Nama','name'=>'nama','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Deskripsi','name'=>'deskripsi','type'=>'textarea','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Fitur','name'=>'fitur','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Fitur 1','name'=>'fitur1','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Fitur 2','name'=>'fitur2','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Fitur 3','name'=>'fitur3','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Gambar','name'=>'gambar','type'=>'upload','validation'=>'required','width'=>'col-sm-10'];
			$this->form[] = ['label'=>'Kategori','name'=>'jkategori_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'jkategori','datamodal_columns'=>'nama','datamodal_size'=>'small'];
			$this->form[] = ['label'=>'Biaya','name'=>'biaya','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//$this->form = [];
			//$this->form[] = ['label'=>'Nama','name'=>'nama','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Deskripsi','name'=>'deskripsi','type'=>'textarea','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Fitur','name'=>'fitur','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Fitur 1','name'=>'fitur1','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Fitur 2','name'=>'fitur2','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Fitur 3','name'=>'fitur3','type'=>'text','validation'=>'required','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Gambar','name'=>'gambar','type'=>'upload','validation'=>'required','width'=>'col-sm-10','datamodal_table'=>'kategori','datamodal_columns'=>'nama','datamodal_size'=>'large'];
			//$this->form[] = ['label'=>'Kategori','name'=>'jkategori_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//$this->form[] = ['label'=>'Biaya','name'=>'biaya','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
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
			$this->addaction[] = ['label'=>'Set Onsite','url'=>CRUDBooster::mainpath('set-status/onsite/[id]'),'icon'=>'fa fa-support','color'=>'danger','showIf'=>"[status] == 'remote'"];
			$this->addaction[] = ['label'=>'Set Remote','url'=>CRUDBooster::mainpath('set-status/remote/[id]'),'icon'=>'fa fa-laptop','color'=>'warning','showIf'=>"[status] == 'onsite'"];
			$this->addaction[] = ['label'=>'Set Selesai','url'=>CRUDBooster::mainpath('set-status/selesai/[id]'),'icon'=>'fa fa-money','color'=>'info','showIf'=>"[status] == 'remote'", 'confirmation' => true];
			$this->addaction[] = ['label'=>'Set Selesai','url'=>CRUDBooster::mainpath('set-status/selesai/[id]'),'icon'=>'fa fa-money','color'=>'info','showIf'=>"[status] == 'onsite'", 'confirmation' => true];
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
			DB::table('jasa')->where('id',$id)->update(['status'=>$status]);
			
			//This will redirect back and gives a message
			CRUDBooster::redirect($_SERVER['HTTP_REFERER'],"The status Order has been updated !","info");
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
			->select('jasa.*','jasa.nama as judul','jasa.jkategori_id as jid','jasa.biaya as jasah','jasa.deskripsi as jdesk','jasa.fitur as fitur','jasa.fitur1 as fitur1','jasa.fitur2 as fitur2','jasa.fitur3 as fitur3')
			->orderby('jasa.id','DESC')
			->take(20)
			->get();
		
		//	$data['jk'] = DB::table('jasa')
		//	->join('jkategori','jkategori.id','=','jkategori_id',)
		//	->select('jkategori.*','jkategori.nama as jnama')
		//	->where('jasa.id',$data['jk']->id)
		//	->first();
		
		
			return view('jasa',$data);
		}
	}