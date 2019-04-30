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

class ChargeController extends Controller
{
    public function getIndex(){

        return view('stripe');
    }
    public function store(Request $request){
        $stripToken= Request::input('stripe_token');
        $plan= 'prod_EyjZNdani9itGr';

        $myid = CRUDBooster::myId();
        //dd($myid);
        dd($newSubscriptions);
        //dd($newSubcriptions);
    }
}
