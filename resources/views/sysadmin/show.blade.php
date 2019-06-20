@extends('layout.layout')
@section('title')
Detail {{$adm->nama}}
@endsection
@section('header')
@endsection
@section('content')
<!-- Page Content -->

  <!-- Portfolio Item Heading -->
  <blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2> Detail {{$adm->nama}}</h2></strong></p>
  <footer class="blockquote-footer">Berikut Adalah Detail<cite title="Source Title">{{$adm->nama}}</cite></footer>
</blockquote>

<div class="container">


  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="{{url('/' .$adm->gambar)}}" alt="">
    </div>

    <div class="col-md-4">
    <h3 class="my-3">Job Detail</h3>
        <li> {{$adm->satu}}</li>
        <li> {{$adm->dua}}</li>
        <li> {{$adm->tiga}}</li>
        <li> {{$adm->empat}}</li>
        <li> {{$adm->lima}}</li>
      <hr class="mb-5">
      <h3 class="my-3">Penjelasan</h3>
      <p>{{$adm->desk}}.</p>
      <hr class="mb-5">
      <h3 class="my-3">Deadline</h3>
      <p>{{$adm->created_at}}.</p>
      
      <hr class="mb-5">
      <h3 class="my-3">Biaya</h3>
      <p>Rp.{{number_format($adm->harga_awal)}}.</p>
      
      
      
    </div>
    <div class="col-md-4">
    <hr class="mb-5">
        <a href="{{url('syadm')}}" target="_blank" class="btn btn-primary btn-rounded btn-md waves-effect waves-light">
            <i class="fa fa-paper-plane-o ml-2"></i> Buka Form Project</a>
    </div>
    </div>
  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
 
<!--
  <div class="row">

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

    <div class="col-md-3 col-sm-6 mb-4">
      <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
    </div>

  </div> -->
  <!-- /.row -->

</div>
<!-- /.container -->
@endsection
@section('footer')
@endsection