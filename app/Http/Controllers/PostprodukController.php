<?php

namespace App\Http\Controllers;
use Request;
use DB;

class PostprodukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

			$data['aplikasi'] = DB::table('aplikasi')
            ->join('kategori','kategori.id','=','kategori_id')
            ->join('dev','dev.id','=','dev_id')
			->select('aplikasi.*','kategori.nama as katnam','dev.nama as sunam','aplikasi.nama as judul','aplikasi.deskripsi as pdesk','aplikasi.hargap as harga')
			->orderby('aplikasi.id','DESC')
            ->paginate('10');
            if(!$data) return redirect('/');
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
        if (!$data) {
            return redirect('/');
        } else {
            return view('produk.show',$data);
        }



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
