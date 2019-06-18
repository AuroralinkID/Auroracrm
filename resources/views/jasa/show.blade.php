@extends('layout.layout')
@section('title')
Detail {{$js->nama}}
@endsection
@section('content')
<section id="features">
                    <!-- Portfolio Item Heading -->
                    <blockquote class="blockquote text-center">
                    <p class="mb-0"><strong><h2> Detail {{$js->nama}}</h2></strong></p>
                    <footer class="blockquote-footer">Berikut Adalah Detail<cite title="Source Title">  {{$js->nama}}</cite></footer>
                    </blockquote>


        <div class="container">


                    <!-- Portfolio Item Row -->
            <div class="row">

                <div class="col-md-8">
                        <img class="img-fluid" src="{{url('/' .$js->gambar)}}" alt="">
                </div>

                <div class="col-md-4">
                    <h3 class="my-3">Support Detail</h3>
                        <li> {{$js->fitur1}}</li>
                        <li> {{$js->fitur2}}</li>
                        <li> {{$js->fitur3}}</li>

                        <hr class="mb-5">
                        <h3 class="my-3">Penjelasan</h3>
                        <p>{{$js->deskripsi}}.</p>
                        <hr class="mb-5">
                        <h3 class="my-3">Biaya</h3>
                        <p>Rp.{{number_format($js->biaya)}}.</p>
                                        
                    <hr class="mb-5">
                        <a href="{{url('support')}}" target="_blank" class="btn btn-success btn-rounded btn-md waves-effect waves-light">
                            <i class="fa fa-paper-plane-o ml-2"></i> Buka Form Support</a>
               
    
                </div>

            </div>
        </div>
    </section>  
@endsection
@section('footer')
@endsection