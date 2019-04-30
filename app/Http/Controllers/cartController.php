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

class cartController extends Controller
{
    public function getAdd() {
        //Create an Auth
        if(!CRUDBooster::isCreate() && $this->global_privilege==FALSE || $this->button_add==FALSE) {    
          CRUDBooster::redirect(CRUDBooster::adminPath(),trans("crudbooster.denied_access"));
        }
        
        $row = Jasa::find($id);
     
        if ($row->count() > 0) {
            Cart::add($id, $row->product_name, 1, $row->price, array());
            return Redirect::to('basket');
        } else {
            return Redirect::to('/');
        }
        //Please use cbView method instead view method from laravel
        $this->cbView('cart',$row);
      }
      public function cart(Request $request)
      {
        $stripToken= Request::input($row);
        $plan= 'prod_EyjZNdani9itGr';
        dd($stripToken);
      }
      public function store(Request $request){
      //
      }
      
      public function addToCart($id)
      {
        //
      }
      
      public function bayar()
      {
      
          //
      }
      public function index()
    {
      //

    }




}
