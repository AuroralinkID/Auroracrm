<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Auroralink</title>
<link rel="icon" href="pavicon.png" type="image/png">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
<link href="css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="css/animate.css" rel="stylesheet" type="text/css">
 
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
 
</head>
<body>

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
			  <li class="active"><a href="#hero_section" class="scroll-link">Beranda</a></li>
			  <li><a href="#aboutUs" class="scroll-link">Tentang Kami</a></li>
			  <li><a href="#service" class="scroll-link">Layanan</a></li>
			  <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
			  <li><a href="#clients" class="scroll-link">Klien</a></li>
			  <li><a href="#team" class="scroll-link">Team</a></li>
			  <li><a href="#contact" class="scroll-link">Kontak</a></li>
      </ul>
      <a href="{{url('')}}/daftar" class="btn btn-primary btn-sm" role="button">Daftar</a> <a href='{{route("getLogin")}}' class="btn btn-primary btn-sm" role="button">Login</a>
      </div>
	 </nav>
    </div>
  </div>
</header>
<!--Header_section--> 

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-5 col-sm-7">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2>Percayakan <strong>KEBUTUHAN IT </strong> Perusahaan anda kepada kami</h2>
              <a href="#service" class="read_more2">Selengkapnya</a> </div>
          </div>
          <div class="col-lg-7 col-sm-5">
			<img src="img/main_device_image.png" class="zoomIn wow animated" alt="" />
		  </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section--> 

<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper">
  <div class="container">
    <h2>Tentang Kami</h2>
    <div class="inner_section">
	<div class="row">
      <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right"><img src="img/LogoAuroralinkHdTransparan.png" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
      	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
        	<div class=" delay-01s animated fadeInDown wow animated">
            <p>Auroralink.id adalah Sebuah Penyedia jasa layanan teknis yang bergerak dalam bidang informasi dan teknologi sejak tahun 2011, Mulai dari Jasa Pembuatan Sistem Aplikasi, Pemeliharaan Jaringan serta aset aset Komputer Perusahaan, Pembuatan Website, Instalasi CCTV dll.</p> <br/>
<p><strong>VISI : </strong> Didukung sumber daya manusia yang tangguh dan handal dibidangnya berupaya menjadi Partner yang terkemuka serta kreatif menciptakan inovasi dan pengembangan teknologi Informasi di Indonesia</p>
<p><strong>MISI : </strong><br>
#1 Menjalankan usaha secara profesional dengan memberikan pelayanan dan mutu yang terbaik.<br>
#2 Menjadi solusi untuk <strong>BISNIS </strong> anda di <strong> ERA DIGITAL </strong> .<br>
#3 Penyedia layanan multi talent yang serba <strong>BISA</strong> .<br>
</p>
</div>
<div class="work_bottom"> <span>Cari tahu lebih banyak</span> <a href="#contact" class="contact_btn">Kontak Kami</a> </div>       
	   </div>
      	
      </div>
	  
      
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Layanan</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-wrench"></i></span> </div>
            <h3 class="animated fadeInUp wow">Servis</h3>
            <p class="animated fadeInDown wow">Perbaikan laptop, PC ganti sparepart, Reball chip dan perbaikan untuk segala macam jenis kerusakan pada laptop atau PC anda.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">			
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-code"></i></span> </div>
            <h3 class="animated fadeInUp wow">Web / Aplikasi</h3>
            <p class="animated fadeInDown wow">Pembuatan Website Profile company, Toko Online dan Aplikasi yang dijalankan di platform berbasis Web.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-desktop"></i></span> </div>
            <h3 class="animated fadeInUp wow">Desktop / Aplikasi</h3>
            <p class="animated fadeInDown wow">Pembuatan Aplikasi desktop akunting, Pos kasir, dll.</p>
          </div>
        </div>
      </div>
	   <div class="row borderTop">
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-support"></i></span> </div>
            <h3 class="animated fadeInUp wow">IT Support</h3>
            <p class="animated fadeInDown wow">Pemeliharaan Asset untuk menjamin ketersediaan infrastruktur komputer/jaringan untuk mendukung kelancaran operasional organisasi ataupun perusahaan.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-image"></i></span> </div>
            <h3 class="animated fadeInUp wow">Design</h3>
            <p class="animated fadeInDown wow">Pembuatan logo brand / banner untuk sarana promosi bisnis anda.</p>
          </div>
        </div>
        <div class="col-lg-4 borderLeft mrgTop">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-github"></i></span> </div>
            <h3 class="animated fadeInUp wow">Project kami</h3>
            <p class="animated fadeInDown wow">Beberpa project kami tersedia di github untuk melihat demo nya silahkan ikuti petunjuknya di github kami.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->




<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
  
  <!-- Portfolio Filters -->
  <div class="portfolio"> 
    
    <div id="filters" class="sixteen columns">
      <ul class="clearfix">
  <!--      <li><a id="all" href="#" data-filter="*" class="active">
        <h5>#All</h5>
          </a></li> -->
        <li><a class="" href="#" data-filter=".prototype">
        <h5>#Sysadmin</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".design">
        <h5>#WebDeveloper</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".android">
        <h5>#ITKonsultan</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".appleIOS">
        <h5>#DigitalMarketing</h5>
          </a></li>
        <li><a class="" href="#" data-filter=".web">
        <h5>#ITSupport</h5>
          </a></li>
      </ul>
    </div>
    <!--/Portfolio Filters --> 
    
    <!-- Portfolio Wrapper  -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      
      <!-- Portfolio Item #DigitalMarketing1-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">
        <div class="portfolio_img"> <img src="img/dashbord.PNG"  alt="Portfolio 1"> </div>        
          <div class="item_info"> 
            <h4 class="project_name">#DigitalMarketing</h4>
        </div>
        </div>
      <!--/Portfolio Item #DigitalMarketing1--> 
            <!-- Portfolio Item #DigitalMarketing2-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">
        <div class="portfolio_img"> <img src="img/dashbord.PNG"  alt="Portfolio 1"> </div>        
          <div class="item_info"> 
            <h4 class="project_name">#DigitalMarketing</h4>
        </div>
        </div>
      <!--/Portfolio Item #DigitalMarketing2--> 
            <!-- Portfolio Item #DigitalMarketing3-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">
        <div class="portfolio_img"> <img src="img/dashbord.PNG"  alt="Portfolio 1"> </div>        
          <div class="item_info"> 
            <h4 class="project_name">#DigitalMarketing</h4>
        </div>
        </div>
      <!--/Portfolio Item #DigitalMarketing3--> 
            <!-- Portfolio Item #DigitalMarketing4-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">
               <div class="portfolio_img"> <img src="img/dashbord.PNG"  alt="Portfolio 1"> </div>        
               <div class="item_info"> 
            <h4 class="project_name">#DigitalMarketing</h4>
            </div>
            </div>
      <!--/Portfolio Item #DigitalMarketing4--> 
      
      <!-- Portfolio Item WebDeveloper1-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="img/login.PNG" alt="#"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#WebDeveloper</h4>
        </div>
      </div>
      <!--/Portfolio Item WebDeveloper1--> 

       <!-- Portfolio Item #WebDeveloper2-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="img/dashboard_pelanggan.PNG" alt="Portfolio 1"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#ITSupport</h4>
        </div>
      </div>
      <!--/Portfolio Item #WebDeveloper2--> 

            <!-- Portfolio Item WebDeveloper3-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="img/login.PNG" alt="#"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#WebDeveloper</h4>
        </div>
      </div>
      <!--/Portfolio Item WebDeveloper3--> 
      
       <!-- Portfolio Item #WebDeveloper4-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="img/dashboard_pelanggan.PNG" alt="Portfolio 1"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#WebDeveloper</h4>
        </div>
      </div>
      <!--/Portfolio Item #WebDeveloper4--> 
      
      <!-- Portfolio Item #ITKonsultan-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four android  isotope-item">
        <div class="portfolio_img"> <img src="img/toyota.PNG" alt="Portfolio 1"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#ITKonsultan</h4>
        </div>
      </div>
      <!--/Portfolio Item #ITKonsultan--> 

      <!-- Portfolio Item #ITKonsultan-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item">
        <div class="portfolio_img"> <img src="img/bg.PNG" alt="Portfolio 1"> </div>       
          <div class="item_info"> 
				<h4 class="project_name">#ITKonsultan</h4>
        </div>
        </a> </div>
      <!--/Portfolio Item #ITKonsultan--> 

            <!-- Portfolio Item #ITKonsultan-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four android  isotope-item">
        <div class="portfolio_img"> <img src="img/toyota.PNG" alt="Portfolio 1"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#ITKonsultan</h4>
        </div>
      </div>
      <!--/Portfolio Item #ITKonsultan--> 

      <!-- Portfolio Item #ITKonsultan-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item">
        <div class="portfolio_img"> <img src="img/bg.PNG" alt="Portfolio 1"> </div>       
          <div class="item_info"> 
				<h4 class="project_name">#ITKonsultan</h4>
        </div>
        </a> </div>
      <!--/Portfolio Item #ITKonsultan--> 

      
      <!-- Portfolio Sysadmin1-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  prototype isotope-item">
        <div class="portfolio_img"> <img class="lb-image" src="img/sariroti.PNG" alt="Portfolio 1"></div>
          <div class="item_info"> 
            <h4 class="project_name">#Sysadmin<</h4>
        </div>
      </div>
      <!-- Portfolio Sysadmin1--> 

            <!-- Portfolio Sysadmin2-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  prototype isotope-item">
        <div class="portfolio_img"> <img class="lb-image" src="img/sariroti.PNG" alt="Portfolio 1"></div>
          <div class="item_info"> 
            <h4 class="project_name">#Sysadmin<</h4>
        </div>
      </div>
      <!-- Portfolio Sysadmin2--> 

            <!-- Portfolio Sysadmin3-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  prototype isotope-item">
        <div class="portfolio_img"> <img class="lb-image" src="img/sariroti.PNG" alt="Portfolio 1"></div>
          <div class="item_info"> 
            <h4 class="project_name">#Sysadmin<</h4>
        </div>
      </div>
      <!-- Portfolio Sysadmin3--> 

            <!-- Portfolio Sysadmin4-->
            <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  prototype isotope-item">
        <div class="portfolio_img"> <img class="lb-image" src="img/sariroti.PNG" alt="Portfolio 1"></div>
          <div class="item_info"> 
            <h4 class="project_name">#Sysadmin<</h4>
        </div>
      </div>
      <!-- Portfolio Sysadmin4--> 
      

      
      <!-- Portfolio Item #ITSupport1 -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio_img"> <img src="img/opensid.PNG" alt="Portfolio 1"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#ITSupport</h4>
        </div>
      </div>
      <!--/Portfolio Item #ITSupport1--> 
      
      <!-- Portfolio Item  #ITSupport2-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio_img"> <img src="img/opensid.PNG" alt="Portfolio 1"> </div>       
          <div class="item_info"> 
            <h4 class="project_name">#ITSupport</h4>
        </div>
       </div>
      <!--/Portfolio Item #ITSupport2--> 
      <!-- Portfolio Item #ITSupport3-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio_img"> <img src="img/opensid.PNG" alt="Portfolio 1"> </div>
          <div class="item_info"> 
            <h4 class="project_name">#ITSupport</h4>
        </div>
      </div>
      <!--/Portfolio Item #ITSupport3--> 
      
      <!-- Portfolio Item  #ITSupport4-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio_img"> <img src="img/opensid.PNG" alt="Portfolio 1"> </div>       
          <div class="item_info"> 
            <h4 class="project_name">#ITSupport</h4>
        </div>
       </div>
      <!--/Portfolio Item #ITSupport4-->       

      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 

<section class="page_section" id="clients"><!--page_section-->
  <h2>Klien</h2>
<!--page_section-->
<div class="client_logos"><!--client_logos-->
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img src="img/fshnstore1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/fshnstore1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/fshnstore1.png" alt=""></a></li>
      <li><a href="javascript:void(0)"><img src="img/fshnstore1.png" alt=""></a></li>
    </ul>
  </div>
</div>
</section>
<!--client_logos-->

<section class="page_section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <div class="team_section clearfix">
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-03s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/sofan.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-03s">Sofan Wahyudi</h3>
        <span class="wow fadeInDown delay-03s">Teknisi</span>
        <p class="wow fadeInDown delay-03s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team_area">
        <div class="team_box  wow fadeInDown delay-06s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/Profil_sofan.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-06s">Hendra</h3>
        <span class="wow fadeInDown delay-06s">Programmer</span>
        <p class="wow fadeInDown delay-06s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
      <div class="team_area">
        <div class="team_box wow fadeInDown delay-09s">
          <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/yani.png" alt="">
          <ul>
            <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
            <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
          </ul>
        </div>
        <h3 class="wow fadeInDown delay-09s">Yannie</h3>
        <span class="wow fadeInDown delay-09s">Pemilik Usaha</span>
        <p class="wow fadeInDown delay-09s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.</p>
      </div>
    </div>
  </div>
</section>
<!--/Team-->
<!--Footer-->
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
            <input class="input-text" type="text" name="" value="Nama Anda *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <input class="input-text" type="text" name="" value="Email Anda *" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">
            <textarea class="input-text text-area" cols="0" rows="0" onFocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;">Masukan Pesan</textarea>
            <input class="input-btn" type="submit" value="kirim pesan">
          </div>
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2019, <a href="https://auroralink.id">Auroralink.id</a></span> </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.nav.js"></script> 
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
