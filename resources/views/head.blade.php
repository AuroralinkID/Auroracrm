

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
        <li><a href="#harga" class="scroll-link"><span class="fa fa-money"></span> Harga</a></li>
        <li><a href="#contact" class="scroll-link"><span class="fa fa-paper-plane-o"></span> Kontak</a></li>
        </ul>
          <!--      <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li> -->
	<!--		  <li><a href="#clients" class="scroll-link">Klien</a></li> -->
	<!--		  <li><a href="#team" class="scroll-link">Team</a></li> -->
			  
  
    <ul class="nav navbar-nav pull-right" style="padding:9px;">
    <a href="{{url('')}}/daftar"class="btn btn-danger btn-md box-shadow--2dp"><span class="fa fa-user"></span> Register</a>
    <a href="{{route('getLogin')}}" class="btn btn-primary btn-md box-shadow--2dp"><span class="fa fa-sign-in"></span> Sign In</a>
  </ul>

<script>
(function(){
 
 $("#cart").on("click", function() {
   $(".shopping-cart").fadeToggle( "fast");
 });
 
})();

</script>
    <!---  <a href="{{url('')}}/daftar" class="btn btn-primary btn-sm m-0" role="button">Daftar</a> <a href='{{route("getLogin")}}' class="btn btn-primary btn-sm" role="button">Login</a> -->
      </div>
	 </nav>
    </div>
  </div>
</header>