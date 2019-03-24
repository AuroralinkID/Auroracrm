@extends('crudbooster::admin_template')
@section('content')     

    <div class="container">
    <div class="row">
        @foreach($jasa as $key => $row)
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">

                    <h4 class="text-center">
                    {{$row->judul}}</h4>
                </div>
                <div class="panel-body text-center">
                    <p class="lead">
                        <strong>Rp. {{$row->jasah}} / Bulan</strong></p>
                </div>
                <ul class="list-group list-group-flush text-center">
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>{{$row->jdesk}}</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>{{$row->fitur1}}</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>{{$row->fitur}}</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>{{$row->fitur2}}</li>
                    <li class="list-group-item"><i class="icon-ok text-danger"></i>{{$row->fitur3}}</li>
                </ul>
                <div class="panel-footer">
                    <a class="btn btn-sm btn-block btn-success" href="#">BUY NOW!</a>
                    <div class="btn-group btn-group-justified">
                    <a class="btn btn-sm btn-block btn-primary" href='{{CRUDBooster::mainpath("edit/$row->id")}}'>Edit</a>
                    <a class="btn btn-sm btn-block btn-warning" href='{{CRUDBooster::mainpath("delete/$row->id")}}'>Delete</a>
                      </div>
                  
                </div>
            </div>
        </div>
        @endforeach

@endsection