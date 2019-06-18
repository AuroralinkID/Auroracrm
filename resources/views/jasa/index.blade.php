@extends('layout.layout')
@section('title')
Daftar Support
@endsection
@section('header')
@endsection
@section('content')
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2> List Jasa Support</h2></strong></p>
  <footer class="blockquote-footer">Berikut Adalah List Support<cite title="Source Title"> beserta harga penawaran</cite></footer>
</blockquote>


<div class="container">
<div class="inner_wrapper">
<div class="col 6">
<table class="table table-hover">
  <thead>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Devisi</th>
      <th scope="col">Harga </th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($jasa as $key => $j)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$j->nama}}</td>
      <td>{{$j->jnam}}</td>
      <td>Rp.{{number_format($j->biaya)}}</td>
      <td>
        <a href="{{ url('jasa', $j->id) }}" class="btn btn-danger btn-md box-shadow--2dp"><span class="fa fa-info"></span> Detail</a>
    <!--    <a href="#" class="btn btn-warning btn-md box-shadow--2dp"><span class="fa fa-link"></span> Demo</a>
        <a href="#" class="btn btn-primary btn-md box-shadow--2dp"><span class="fa fa-file-pdf-o"></span> Proposal</a> -->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
<br> 
@endsection
@section('footer')
@endsection