@extends('layout')
@section('content')

<section  id="harga">
<div class="container">
<h2>List Harga Web</h2>
    <div class="row row-flex">
    @foreach($produk as $key => $pro)
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div >
                
                    <span>#{{$pro->pronam}}</span>
                    <span>{{$pro->prodesk}}</span>
                    <span>Rp.{{$pro->proharg}} s/d Rp.{{$pro->prohar}}</span>
                </div>
                
                <ul>
                    <li>{{$pro->profit}}</li>
                    <li>{{$pro->profit1}}</li>
                    <li>{{$pro->profit2}}</li>
                    <li>{{$pro->profit3}}</li>
                    <li>{{$pro->profit4}}</li>
                    <li>{{$pro->profit5}}</li>
                </ul>
                <a href="{{url('project')}}">Buka Project</a>
                           
            </div>
        </div>
@endforeach
   </div>
</div>
</section>

<section  id="harga">
<div class="container">
<h2>List Harga Servis</h2>
    <div class="row row-flex">
    @foreach($servis as $key => $srv)
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                    <span>#{{$srv->judul}}</span>
                    <span>{{$srv->desk}}</span>
                    <span>Rp. {{$srv->price}} s/d Rp. {{$srv->harga_akhir}}</span>
                   
                </div>
                <ul>
                    <li>{{$srv->servis_satu}}</li>
                    <li>{{$srv->servis_dua}}</li>
                    <li>{{$srv->servis_tiga}}</li>
                    <li>{{$srv->servis_empat}}</li>
                    <li>{{$srv->servis_lima}}</li>
                </ul>
                <i>*harga belum termasuk sparepart </i>
                <a href="{{url('pickup')}}">Pickup Servis</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>


<section  id="harga">
<div class="container">
<h2>List Harga Support</h2>
    <div class="row row-flex">
    @foreach($jasa as $key => $row)
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>{{$row->judul}}</span>
                    <span>Layanan IT Support basic</span>
                    <span>Rp.  {{$row->jasah}}/ Bulan</span>
                </div>
                <ul>
                    <li>{{$row->jdesk}}</li>
                    <li>{{$row->fitur1}}</li>
                    <li>{{$row->fitur}}</li>
                    <li>{{$row->fitur2}}</li>
                    <li>{{$row->fitur3}}</li>
                </ul>
                <a href="{{url('support')}}">Dapatkan Support</a>
            </div>
        </div> 
        @endforeach
    </div>
</div>
</section>

<section  id="harga">
<div class="container">
<h2>List Harga Sysadmin</h2>
    <div class="row row-flex">
    @foreach($sysadmin as $key => $sys)
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-black">
                <div>
                
                 <span>#{{$sys->nama}}</span>
                 <span>{{$sys->desk}}</span>
                 <span>Rp.{{$sys->price}} s/d {{$sys->harga_akhir}}</span>
                    </div>
                <ul>
                    <li>{{$sys->satu}}</li>
                    <li>{{$sys->dua}}</li>
                    <li>{{$sys->tiga}}</li>
                    <li>{{$sys->empat}}</li>
                    <li>{{$sys->lima}}</li>
                </ul>
                <a href="{{url('syadm')}}">BID</a>
               
            </div>
        </div> 
@endforeach
    </div>
</div>
</section>
@endsection