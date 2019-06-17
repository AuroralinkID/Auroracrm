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

<!--
<div class="container">
<div class="col 6">
</div>
</div>
<div class="container">
<div class="inner_wrapper">
<div class="col 6">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Devisi</th>
      <th scope="col">Deadline</th>
      <th scope="col">Harga Penawaran</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$prod->nama}}</td>
      <td>{{$prod->katnam}}</td>
      <td>{{$prod->sunam}}</td>
      <td>{{$prod->deadline}}</td>
      <td>Rp {{number_format($prod->hargap)}}</td>
      <td>
        <a href="{{ url('produk', $prod->id) }}" class="btn btn-danger btn-md box-shadow--2dp"><span class="fa fa-info"></span> Detail</a>
        <a href="{{$prod->demo}}" class="btn btn-warning btn-md box-shadow--2dp"><span class="fa fa-link"></span> Demo</a>
        <a href="{{$prod->proposal}}" class="btn btn-primary btn-md box-shadow--2dp"><span class="fa fa-file-pdf-o"></span> Proposal</a>
      </td>
    </tr>
    
  </tbody>
</table>
{{$aplikasi->links}}
</div>
</div>
<br> -->

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