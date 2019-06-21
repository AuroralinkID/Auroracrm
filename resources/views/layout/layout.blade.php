<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>@yield('title')</title>
<link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('css/font-awesome.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('summernote/summernote.css')}}" rel="stylesheet" type="text/css"> 



<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>

<!--Header_section-->
<header id="header_wrapper">
    @yield('header')
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="https://auroralink.id"><img src="{{url('img/SiapPasangWeb.png')}}" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			<li class="active"><a href="{{url('')}}#hero_section" class="scroll-link"><span class="fa fa-home"></span> Beranda</a></li>
			<li><a href="{{url('')}}#aboutUs" class="scroll-link"><span class="fa fa-info-circle"></span> Tentang Kami</a></li>
			<li><a href="{{url('')}}#service" class="scroll-link"><span class="fa fa-wrench"></span> Layanan</a></li>
        		<li><a href="{{url('')}}#Portfolio" class="scroll-link"><span class="fa fa-paper-plane-o"></span> Portfolio</a></li>
        		<li><a href="{{url('')}}#contact" class="scroll-link"><span class="fa fa-phone"></span> Kontak</a></li>
        </ul>
          <!--      <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li> -->
          <!--		  <li><a href="#clients" class="scroll-link">Klien</a></li> -->
          <!--		  <li><a href="#team" class="scroll-link">Team</a></li> -->
			  
  
    <ul class="nav navbar-nav pull-right" style="padding:9px;">
    <a href="{{url('')}}/daftar"class="btn btn-danger btn-md box-shadow--2dp"><span class="fa fa-user"></span> Daftar</a>
    <a href="{{route('getLogin')}}" class="btn btn-primary btn-md box-shadow--2dp"><span class="fa fa-sign-in"></span> Login</a>
  </ul>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 
<body>


@yield('content')

<script type="text/javascript" src="{{url('js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{url('js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('js/lightbox.js')}}"></script> 
<script type="text/javascript" src="{{url('js/lightbox.min.js')}}"></script> 
<script type="text/javascript" src="{{url('js/wow.js')}}"></script>  
<script type="text/javascript" src="{{url('js/custom.js')}}"></script>
<script type="text/javascript" src="{{url('js/tinymce.min.js')}}"></script>



</body>




  <div class="container">
@yield('footer')
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
            <div class="footer_bottom"><span>Copyright © {{date("Y")}}, <a href="https://auroralink.id">PT Auroralink Indonesia</a></span>

            

            <!-- scroll up -->
            </div>
  </div>

<!--Footer-->
</html>
