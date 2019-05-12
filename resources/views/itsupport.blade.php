@extends('layout')
@section('content')

 <div class="container">
<h2>Support</h2>
    <div class="row row-flex">
    @foreach($jasa as  $js)
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>{{$js->}}</span>
                    <span>Rp.  / Bulan</span>
                    <span>Judul 1</span>
                    <span>Blokquote</span>
                </div>
                <ul>
                    <li>Domain name</li>
                    <li>Social Media Integration</li>
                    <li>First Month Hosting</li>
                    <li>On Page SEO</li>
                    <li>24/6 Support</li>
                </ul>
                <a href="{{url('form/support')}}">Bayar</a>
            </div>
        </div> 
       @endforeach 
 

    </div>
</div>
@endsection