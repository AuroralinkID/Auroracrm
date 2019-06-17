@extends('layout')
@section('content')     

    <div class="container">
    <div class="row">
        
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">

                    <h4 class="text-center">
                    Judul</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>Rp. Harga</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Deskripsi</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Fitur1</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Fitur1</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Fitur1</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>Fitur1</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-sm btn-block btn-success" href="#">BUY NOW!</a>
                    <div class="btn-group btn-group-justified">
                    <a class="btn btn-sm btn-block btn-primary" href='#'>Edit</a>
                    <a class="btn btn-sm btn-block btn-warning" href='#'>Delete</a>
                      </div>
                  
                </div>
            </div>
        </div>
       

@endsection