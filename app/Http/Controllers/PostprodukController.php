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

class PostprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
			$myid = CRUDBooster::myId();
			$data = [];
			$data['export'] = true;
			$data['page_title'] = 'Halaman Produk';  
			$data['aplikasi'] = $id;
			$data['aplikasi'] = DB::table('aplikasi')
            ->join('kategori','kategori.id','=','kategori_id')
            ->join('dev','dev.id','=','dev_id')
			->select('aplikasi.*','kategori.nama as katnam','dev.nama as sunam','aplikasi.nama as judul','aplikasi.deskripsi as pdesk','aplikasi.hargap as harga')
			->orderby('aplikasi.id','DESC')
            ->paginate('10');
            
            return view('produk.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data['app'] = DB::table('aplikasi')->where('id',$id)->first();

        return view('produk.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
