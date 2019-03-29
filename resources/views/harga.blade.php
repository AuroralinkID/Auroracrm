@extends('layout')
@yield('harga')
<section  id="harga">
<div class="container">
<h2>HARGA</h2>
    <div class="row row-flex">
    <!--    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-black">
                <div >
                
                    <span>{{$row->judul}}</span>
                    <span>{{$row->jasah}}</span>
                    <span>{{$row->jdesk}}</span>
                    
                </div>
                
                <ul>
                    <li>{{$row->jdesk}}</li>
                    <li>{{$row->jdesk}}</li>
                    <li>{{$row->jdesk}}</li>
                    <li>{{$row->jdesk}}</li>
                    <li>{{$row->jdesk}}</li>
                </ul>
                <a href="#">purchase</a>
                
            </div>
        </div>
       
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>{{$row->judul}}</span>
                    <span>{{$row->jasah}}</span>
                    <span>{{$row->jdesk}}</span>
                   
                </div>
                <ul>
                    <li>Domain name</li>
                    <li>Social Media Integration</li>
                    <li>First Month Hosting</li>
                    <li>On Page SEO</li>
                    <li>24/6 Support</li>
                </ul>
                <a href="#">purchase</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                    <span>{{$row->judul}}</span>
                    <span>{{$row->jasah}}</span>
                    <span>{{$row->jdesk}}</span>
                </div>
                <ul>
                    <li>Domain name</li>
                    <li>Social Media Integration</li>
                    <li>First Month Hosting</li>
                    <li>On Page SEO</li>
                    <li>24/6 Support</li>
                </ul>
                <a href="#">purchase</a>
            </div>
        </div> -->
        @foreach($jasa as $key => $row)
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div>
                
                 <span>{{$row->judul}}</span>
                <!--    <span><strong>{{$row->jid}}</strong></span> -->
                    <span>Rp. {{$row->jasah}} / Bulan</span>
                </div>
                <ul>
                    <li>{{$row->jdesk}}</li>
                    <li>{{$row->fitur1}}</li>
                    <li>{{$row->fitur}}</li>
                    <li>{{$row->fitur2}}</li>
                    <li>{{$row->fitur3}}</li>
                </ul>
                <a href="#">purchase</a>
               
            </div>
        </div>
        @endforeach
    </div>
</div>
</section>
<!--/Harga-->
@endsection