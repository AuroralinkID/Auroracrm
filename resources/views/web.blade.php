@extends('layout')
@section('content')
<section  id="harga">
<div class="container">
<h2>Webdev</h2>
    <div class="row row-flex">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div >
                
                    <span>Webdev</span>
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
                <a href="{{url('form/project')}}">Bayar</a>
                           
            </div>
        </div>

   </div>
</div>
</section>

@endsection