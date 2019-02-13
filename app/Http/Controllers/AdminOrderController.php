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
			$this->global_privilege = false;
			$this->button_table_action = true;
			$this->button_bulk_action = true;
			$this->button_action_style = "button_text";
			$this->button_add = true;
			$this->button_edit = true;
			$this->button_delete = true;
			$this->button_detail = true;
			$this->button_show = true;
			$this->button_filter = true;
			$this->button_import = false;
			$this->button_export = false;
			$this->table = "order";
			# END CONFIGURATION DO NOT REMOVE THIS LINE

			# START COLUMNS DO NOT REMOVE THIS LINE
			$this->col = [];
			$this->col[] = ["label"=>"Tanggal Order","name"=>"created_at"];
			$this->col[] = ["label"=>"Nomer Order","name"=>"nomer_order"];
			$this->col[] = ["label"=>"Pelanggan","name"=>"pelanggan_id","join"=>"pelanggan,nama"];
			$this->col[] = ["label"=>"Total","name"=>"total","callback_php"=>'number_format($row->total)'];
			$this->col[] = ["label"=>"Diskon","name"=>"diskon"];
			$this->col[] = ["label"=>"Pajak","name"=>"pajak","callback_php"=>'number_format($row->diskon)'];
			$this->col[] = ["label"=>"Grand Total","name"=>"grand_total","callback_php"=>'number_format($row->grand_total)'];
			$this->col[] = ["label"=>"Status","name"=>"status"];
			# END COLUMNS DO NOT REMOVE THIS LINE

			$nomer_order = DB::table('order')->max('id') + 1;
			$nomer_order = str_pad($nomer_order, 5, 0 , STR_PAD_LEFT);

			# START FORM DO NOT REMOVE THIS LINE
//			$this->form = [];
//			$this->form[] = ['label'=>'Pelanggan','name'=>'pelanggan_id','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'pelanggan,nama','datatable_format'=>'nama,\' - \',telepon'];
//			$this->form[] = ['label'=>'Nomer Order','name'=>'nomer_order','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','readonly'=>'1'];
//			$this->form[] = ['label'=>'Order Detail','name'=>'order_detail','type'=>'child','width'=>'col-sm-10','table'=>'order_detail','foreign_key'=>'order_id'];
//			$this->form[] = ['label'=>'Total','name'=>'total','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','readonly'=>'true'];
//			$this->form[] = ['label'=>'Tax','name'=>'pajak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
//			$this->form[] = ['label'=>'Discount','name'=>'diskon','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
//			$this->form[] = ['label'=>'Grand Total','name'=>'grand_total','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','readonly'=>'1'];
			# END FORM DO NOT REMOVE THIS LINE

			# OLD START FORM
			//			$this->form = [];
			//			$this->form[] = ['label'=>'Pelanggan','name'=>'pelanggan_id','type'=>'datamodal','validation'=>'required|integer|min:0','width'=>'col-sm-10','datamodal_table'=>'pelanggan','datamodal_columns'=>'nama','datamodal_size'=>'large'];
			//			$this->form[] = ['label'=>'Nomer Order','name'=>'nomer_order','type'=>'number','validation'=>'required','width'=>'col-sm-10'];
			//			$this->form[] = ['label'=>'Total','name'=>'total','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//			$this->form[] = ['label'=>'Pajak','name'=>'pajak','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//			$this->form[] = ['label'=>'Diskon','name'=>'diskon','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			//			$this->form[] = ['label'=>'Grand Total','name'=>'grand_total','type'=>'money','validation'=>'required|integer|min:0','width'=>'col-sm-10'];
			
			
			
			$this->form = [];
			$this->form[] = ['label'=>'Pelanggan','name'=>'pelanggan_id','type'=>'select2','validation'=>'required|integer|min:0','width'=>'col-sm-10','datatable'=>'pelanggan,nama','datatable_format'=>"nama,' - ',telepon"];
			$this->form[] = ['label'=>'Nomer Order','name'=>'nomer_order','type'=>'text','validation'=>'required|min:1|max:255','width'=>'col-sm-10','value'=>$nomer_order,'readonly'=>true];
			
			
			$columns = [];
			$columns[] = ['label'=>'Produk','name'=>'produk_id','type'=>'datamodal','datamodal_table'=>'produk','datamodal_columns'=>'nama,sku,harga_jual,stock','datamodal_select_to'=>'harga_jual:harga,sku:produk_sku','required'=>true];
			$columns[] = ['label'=>'Product SKU','name'=>'produk_sku','type'=>'text','readonly'=>true,'required'=>true];
			$columns[] = ['label'=>'Harga','name'=>'harga','type'=>'number','readonly'=>true,'required'=>true];
			$columns[] = ['label'=>'QTY','name'=>'qty','type'=>'number','required'=>true];
			$columns[] = ['label'=>'Sub Total','name'=>'sub_total','type'=>'number','formula'=>'[harga] * [qty]','readonly'=>true,'required'=>true];
//			$this->form[] = ['label'=>'Order Detail','type'=>'child','columns'=>$columns,'table'=>'order_detail','foreign_key'=>'order_id'];
			$this->form[] = ['label'=>'Order Detail','name'=>'order_detail','type'=>'child','columns'=>$columns,'table'=>'order_detail','foreign_key'=>'order_id'];			

			$this->form[] = ['label'=>'Total','name'=>'total','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','readonly'=>'true','value'=>0];
			$this->form[] = ['label'=>'Pajak','name'=>'pajak','type'=>'number','validation'=>'required|integer|min:0','width'=>'col-sm-10','value'=>0];
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
			$this->addaction[] = ['label'=>'Belum Bayar','url'=>CRUDBooster::mainpath('set-status/lunas/[id]'),'icon'=>'fa fa-money','color'=>'warning','showIf'=>"[status] == 'pending'"];
			$this->addaction[] = ['label'=>'Sudah Bayar','url'=>CRUDBooster::mainpath('set-status/pending/[id]'),'icon'=>'fa fa-money','color'=>'success','showIf'=>"[status] == 'lunas'", 'confirmation' => true];


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
	    	$order_detail = DB::table('order_detail')->where('order_id',$id)->get();	    	
	    	foreach($order_detail as $od) {
	    		$p = DB::table('produk')->where('id',$od->produk_id)->first();
	    		DB::table('produk')->where('id',$od->produk_id)->update(['stock'=> abs($p->stock - $od->qty) ]);
	    	}
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
			DB::table('order')->where('id',$id)->update(['status'=>$status]);
			
			//This will redirect back and gives a message
			CRUDBooster::redirect($_SERVER['HTTP_REFERER'],"The status Order has been updated !","info");
		 }


	}