@extends('layout.layout')
@section('title')
Daftar Produk
@endsection
@section('header')
@endsection
@section('content')
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2> List Produk</h2></strong></p>
  <footer class="blockquote-footer">Berikut Adalah List Produk<cite title="Source Title"> beserta harga penawaran</cite></footer>
</blockquote>
<section  id="harga">
<div class="container">
    <div class="row row-flex">
    @foreach($aplikasi as $key => $prod)
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div >
                
                    <span>#{{$prod->nama}}</span>
                    <span>{{$prod->katnam}}</span>
                    <span>Rp.{{number_format($prod->hargap)}}</span>
                </div>
                
                <ul>
                    <li>Deadline {{$prod->deadline}}</li>
                    <li>{{$prod->f1}}</li>
                    <li>{{$prod->f2}}</li>
                    <li>{{$prod->f3}}</li>
                    <li>{{$prod->f4}}</li>
                    <li>{{$prod->f5}}</li>
                    <li>{{$prod->f6}}</li>
                </ul>
                <a href="{{ url('produk', $prod->id) }}">Detail</a>
                <a href="#">Demo</a>
                           
            </div>
        </div>
        @endforeach
   </div>
</div>
</section>
@endsection
@section('footer')
@endsection