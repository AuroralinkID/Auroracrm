@extends('crudbooster::admin_template')
@section('content')     
<div class="container">
<div class="row">
@foreach($produk as $key => $row)
    <div id="products" class="row list-group">
        <div class="col-sm-3">
            <div class="thumbnail">
            <a data-lightbox="roadtrip" rel="group_{produk}" title="{{asset('/'.$row->pict)}}" href="{{asset('/'.$row->pict)}}">
            <img src="{{asset('/'.$row->pict)}}"></a>

                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                    {{$row->judul}}</h4>
                    <p class="group inner list-group-item-text">
                    {{$row->pdesk}}</p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                            Rp. {{$row->harga}}</p>
                        </div>
                        <div class="col-xs-12 col-md-9">
                          <div class="btn-group btn-group-justified">
                            <a class="btn btn-sm btn-block btn-primary" href='{{CRUDBooster::mainpath("edit/$row->id")}}'>beli</a>
                            <a class="btn btn-sm btn-block btn-primary" href='{{CRUDBooster::mainpath("edit/$row->id")}}'>Edit</a>
                            <a class="btn btn-sm btn-block btn-warning" href='{{CRUDBooster::mainpath("delete/$row->id")}}'>Delete</a>
                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection