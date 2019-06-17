@extends('layout')
@section('content')

 <div class="container">
<h2>Servis</h2>
    <div class="row row-flex">

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                    <span>Servis</span>
                    <span>Rp.  {{$serv->sbay}}/ check</span>
                    <span>{{$serv->sjud}}</span>
                    <span>Blokquote</span>
                   
                </div>
                <ul>
                    <li>Domain name</li>
                    <li>Social Media Integration</li>
                    <li>First Month Hosting</li>
                    <li>On Page SEO</li>
                    <li>24/6 Support</li>
                </ul>
                <a href="{{url('form/pickup')}}">Pickup Servis</a>
            </div>
        </div>
        
    </div>
</div>
@endsection