@extends('layout')
@section('title')
Selamat Datang Di Auroralink
@endsection
@section('content')

<!--Header_section-->
<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="https://auroralink.id"><img src="img/SiapPasangWeb.png" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link"><span class="fa fa-home"></span> Beranda</a></li>
			  <li><a href="#aboutUs" class="scroll-link"><span class="fa fa-info-circle"></span> Tentang Kami</a></li>
			  <li><a href="#service" class="scroll-link"><span class="fa fa-wrench"></span> Layanan</a></li>
        <li><a href="{{url('')}}/harga" class="scroll-link"><span class="fa fa-money"></span> Harga</a></li>
        <li><a href="#contact" class="scroll-link"><span class="fa fa-paper-plane-o"></span> Kontak</a></li>
        </ul>
          <!--      <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li> -->
          <!--		  <li><a href="#clients" class="scroll-link">Klien</a></li> -->
          <!--		  <li><a href="#team" class="scroll-link">Team</a></li> -->
			  
  
    <ul class="nav navbar-nav pull-right" style="padding:9px;">
    <a href="{{url('')}}/daftar"class="btn btn-danger btn-md box-shadow--2dp"><span class="fa fa-user"></span> Register</a>
    <a href="{{route('getLogin')}}" class="btn btn-primary btn-md box-shadow--2dp"><span class="fa fa-sign-in"></span> Sign In</a>
  </ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
@foreach($phero as $key => $hrow)
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>{{$hrow->herjud}} di<br><strong>Auroralink </strong><br>#Reliable IT Support</h2>
              <a href="#service" class="read_more2">Selengkapnya</a> </div>
          </div>
          <div class="col-lg-7 col-sm-1">
			<img src="{{asset('/' .$hrow->herlog)}}" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach

<!--Hero_Section--> 

<!--Aboutus-->
@foreach($pabout as $key => $prow)
<section id="aboutUs" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); text-decoration:none;color:#000001;">
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2>{{$prow->pajud}}</h2></strong></p>
  <footer class="blockquote-footer">Berikut Sekilas <cite title="Source Title">tentang kami</cite></footer>
</blockquote>
<div class="inner_wrapper">
  <div class="container">
    

    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="{{asset('/' .$prow->papict)}}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
      <!--   <p>Auroralink.id adalah Sebuah Penyedia jasa layanan teknis yang bergerak dalam bidang informasi dan teknologi sejak tahun 2011, Mulai dari Jasa Pembuatan Sistem Aplikasi, Pemeliharaan Jaringan serta aset aset Komputer Perusahaan, Pembuatan Website, Instalasi CCTV dll. -->
      <strong>Auroralink.ID </strong>adalah {{$prow->padesk}}
         <br>
<br><strong>VISI :</strong>{{$prow->pvi}}
<br>
<br><strong>MISI :</strong>

<br>#1 {{$prow->pm1}}

<br>#2 {{$prow->pm2}}

<br>#3 {{$prow->pm3}}
</p>
</div>
<div class="work_bottom"> <span>Cari tahu lebih banyak</span> <a href="#contact" class="contact_btn">Kontak Kami</a> </div>       
	   </div>
      	
      </div>
	  
      
    </div>
  </div> 
  </div>
</section>
@endforeach
<!--Aboutus--> 
<!--Service-->
<section  id="service" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); text-decoration:none;color:#000001;">


<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2>Layanan</h2></strong></p>
  <footer class="blockquote-footer">Berikut adalah <cite title="Source Title">Layanan Kami</cite></footer>
</blockquote>
<div class="container" >
    <div class="row">
    @foreach($webdev as  $web)
        <div class="col-md-3 col-sm-6" >
            <div class="serviceBox">
                <div class="service-icon">
                    <i class="fa fa-code"></i>
                </div>
                <h3 class="title">{{$web->judul}}</h3>
                
                <p class="description" style="padding:9px;">
                {{$web->webkon}}
                </p>
                <a href="{{url('project')}}" class="btn btn-outline-light btn-md box-shadow--2dp"><span class="fa fa-paper-plane-o"></span> Buka Project</a>
            </div>
        </div>
      @endforeach

      @foreach($postservis as  $po)
        <div class="col-md-3 col-sm-6 ">
            <div class="serviceBox red">
                <div class="service-icon">
                    <i class="fa fa-wrench"></i>
                </div>
                <h3 class="title">{{$po->judul}}</h3>
                
                <p class="description" style="padding:9px;">
                {{$po->webkon}}
                </p>
                <a href="{{url('pickup')}}" class="btn btn-outline-light btn-md box-shadow--2dp"><span class="fa fa-paper-plane-o"></span> Pickup Servis</a>
            </div>
        </div>
      @endforeach

      @foreach($postsupport as $ps)
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox green">
                <div class="service-icon">
                    <i class="fa fa-ticket"></i>
                </div>
                <h3 class="title">{{$ps->judul}}</h3>
                
                <p class="description" style="padding:9px;">
                {{$ps->webkon}}
                </p>
                <a href="{{url('support')}}" class="btn btn-outline-light btn-md box-shadow--2dp"><span class="fa fa-paper-plane-o"></span> Join Sekarang</a>
            </div>
        </div>
        @endforeach

        @foreach($postsyadmin as $psys)
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <i href="{{url('syadm')}}" class="fa fa-rocket"></i>
                </div>
                <h3 class="title">{{$psys->judul}}</h3>
                
                <p class="description" style="padding:9px;">
                {{$psys->webkon}}
                </p>
                <a href="{{url('syadm')}}" class="btn btn-outline-light btn-md box-shadow--2dp"><span class="fa fa-paper-plane-o"></span> Selengkapnya</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

</section>
<!--Service--> 


<!--Harga-->
<section  id="harga">
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2>List Layanan</h2></strong></p>
  <footer class="blockquote-footer">Berikut List <cite title="Source Title">Layanan</cite></footer>
</blockquote>
<div class="container">


    <div class="row row-flex">
       
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-blue">
                <div>
                
                 <span>{{$web->title}}</span>
                    <span>{{$web->tags}}</span> 
                    <span>{{$web->websat}}</span>
                </div>
                <ul>
                    <li>{{$web->webdu}}</li>
                    <li>{{$web->webtig}}</li>
                    <li>{{$web->webpat}}</li>
                    <li>{{$web->webli}}</li>
                    <li>{{$web->webnam}}</li>
                </ul>
                <a href="{{url('harga')}}">Selengkapnya</a>
               
            </div>
        </div>
        
        
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-red">
                <div>
                <span>{{$po->title}}</span>
                    <span>{{$po->webtag}}</span> 
                    <span>{{$po->servsat}}</span>
                </div>
                <ul>
                    <li>{{$po->servdu}}</li>
                    <li>{{$po->servtig}}</li>
                    <li>{{$po->servpat}}</li>
                    <li>{{$po->servli}}</li>
                    <li>{{$po->servnam}}</li>
                </ul>
                <a href="{{url('harga')}}">Selengkapnya</a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-green">
                <div>
                    <span>{{$ps->judul}}</span>
                    <span>{{$ps->webtag}}</span>
                    <span>{{$ps->kategori}}</span>
                </div>
                <ul>
                    <li>{{$ps->sup_satu}}</li>
                    <li>{{$ps->sup_dua}}</li>
                    <li>{{$ps->sup_tiga}}</li>
                    <li>{{$ps->sup_empat}}</li>
                    <li>{{$ps->sup_lima}}</li>
                </ul>
                <a href="{{url('harga')}}">Selengkapnya</a>
            </div>
        </div> 

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <div class="price-table pt-bg-black">
                <div>
                
                 <span>{{$psys->title}}</span>
                 <span>{{$psys->webtag}}</span>
                 <span>{{$psys->kategori}}</span>
                </div>
                <ul>
                <li>{{$psys->sys_satu}}</li>
                    <li>{{$psys->sys_dua}}</li>
                    <li>{{$psys->sys_tiga}}</li>
                    <li>{{$psys->sys_empat}}</li>
                    <li>{{$psys->sys_lima}}</li>
                </ul>
                <a href="{{url('harga')}}">Selengkapnya</a>
               
            </div>
        </div> 
    </div>
</div>
</section>
<!--/Harga-->
<!-- Portfolio -->

<section id="Portfolio" class="content"> 
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2>Portfolio</h2></strong></p>
  <footer class="blockquote-footer">Portofolio <cite title="Source Title">Kami</cite></footer>
</blockquote>
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->

    <!--/Title --> 
    
  </div>

  
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
        <li><a id="all" href="#" data-filter="*" class="active">
        <h5>#All</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".support">
        <h5>#ITSupport</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".servis">
        <h5>#Servis</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".web">
        <h5>#WebDeveloper</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters --> 
 <!-- Portfolio Wrapper  -->
 <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      
 @foreach($porto as $key => $port)
      <!-- Portfolio Item WebDeveloper1-->

      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="{{$port->tags}}">
        <div class="portfolio_img"> 
        <a data-lightbox="roadtrip" rel="group_{produk}" title="{{$port->desk}}" href="{{asset('/' .$port->ppict)}}">
          <img src="{{asset('/'. $port->ppict)}}" alt="#"></a> 
        </div>
          <div class="item_info"> 
            <h4 class="project_name">{{$port->pjud}}</h4>
        </div>
      </div>
      <!--/Portfolio Item WebDeveloper1--> 
@endforeach
             
    </div>
    <!--/Portfolio Wrapper --> 
</div><!-- .outer-container -->

  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 
<section class="page_section" id="clients"><!--page_section-->
  
  <blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2>Klien</h2></strong></p>
  <footer class="blockquote-footer">Mereka sudah bergabung  <cite title="Source Title">Dengan Kami</cite></footer>
</blockquote>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
  @foreach($pklien as $key => $pkrow)
      <div class="col-sm-3">
         <img src="{{asset('/' .$pkrow->pklog)}}" style="width: 195px; height: auto;">
              
      </div>
    @endforeach
  </div>

</div>
</section>
<!--client_logos-->
<blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2>Team</h2></strong></p>
  <footer class="blockquote-footer">Team <cite title="Source Title">kami</cite></footer>
</blockquote>
<section class="page_section team" id="team"><!--main-section team-start-->

  <div class="container">

    <div class="team_section clearfix">
    @foreach($team as $key => $tort)
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="{{$tort->tfot}}" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        
        <h3 class="wow fadeInDown delay-03s">{{$tort->tnam}}</h3>
        <span class="wow fadeInDown delay-03s">{{$tort->tid}}</span>
        <p class="wow fadeInDown delay-03s">{{$tort->tdesk}}</p>
        
      </div>
      @endforeach
    </div>
    
  </div>
</section> 
<!--/Team-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Kontak</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>Workshop Kami</h4>
                                <p>Jl Bulak setro utara VI/4C Bulak Surabaya</p>
                            </div>
                            <div class="detail">
                                <h4>Telepon</h4>
                                <p>08113030421<br>
                                081553177408<br>
                                </p>
                            </div>
                            <div class="detail">
                                <h4>Email</h4>
                                <p>support@auroralink.id</p>
                            </div> 
                        </div>
       		  
			  
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
          <div class="form">
          @if ( Session::get('message') != '' )
            <div class='alert alert-info'>
                {{ Session::get('message') }}
            </div>
        @endif
       <!--   <script type="text/javascript" src="//mautic.auroralink.id/form/generate.js?id=1"></script> -->
       <form autocomplete='off' action="{{ action('FormController@postLeads') }}" method="post">
       <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <div class="form-group has-feedback">
                <input autocomplete='off' type="text" class="form-control " name='nama' required placeholder="Nama"/>
            </div>
            <div class="form-group has-feedback">
                <input autocomplete='off' type="number" class="form-control" name='telepon' required placeholder="Telepon"/>
            </div>
            <div class="form-group has-feedback">
                <input autocomplete='off' type="email" class="form-control" name='email' required placeholder="Email"/>
            </div>
            <div class="md-form">
              <textarea id="form7" class="md-textarea form-control" name='komentar' required placeholder="Masukan Pesan Anda" rows="3"></textarea>
            </div>
              

            <div style="margin-bottom:10px" class='row'>
                <div class='col-xs-12'>
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><i class='fa fa-sign-in' style="padding:0px 5px 0px 5px"></i>Kirim</button>
                </div>
            </div>
        </form>
          </div>
        </div>
      </div>

    </section>
  </div>
  <div class="container">
  <nav class="navbar navbar-inverse" role="navigation">
  <div id="main-nav" class="collapse navbar-collapse navStyle">
                                  <ul class="nav navbar-nav" id="mainNav">
                                    <div class="scroll-top-wrapper ">
                                      <span class="scroll-top-inner">
                                      <a href="#" class="scrollToTop"><i class="fa fa-2x fa-chevron-up"></i></a>
                                      </span>
                                    </div>
                                  </ul>
                                  </div>
                                  </nav>
    <div class="footer_bottom"><span>Copyright © {{date("Y")}}, <a href="https://auroralink.id">Auroralink.id</a></span>

          

          <!-- scroll up -->
          </div>
  </div>

</footer>
<!--Footer-->

@endsection