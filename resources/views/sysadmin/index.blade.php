@extends('layout.layout')
@section('title')
Daftar JobeDesk Sysadmin
@endsection
@section('header')
@endsection
@section('content')
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2> List Jasa Sysadmin</h2></strong></p>
  <footer class="blockquote-footer">Berikut Adalah List Sysadmin<cite title="Source Title"> beserta biaya</cite></footer>
</blockquote>


<div class="container">
<div class="inner_wrapper">
<div class="col 6">
<table class="table table-hover">
  <thead>

    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">JobeDesk</th>
      <th scope="col">Biaya</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($sys as $key => $sy)
    <tr>
      <th scope="row">{{++$key}}</th>
      <td>{{$sy->nama}}</td>
      <td>{{$sy->desk}}</td>
      <td>Rp.{{number_format($sy->harga_awal)}}</td>
      <td>
        <a href="{{ url('sysadmin', $sy->slug) }}" class="btn btn-danger btn-md box-shadow--2dp"><span class="fa fa-info"></span> Detail</a>
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
