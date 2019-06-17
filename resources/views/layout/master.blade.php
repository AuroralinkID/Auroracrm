<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">

  <!-- Bootstrap core CSS -->
  <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{url('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{url('assets/css/landing-page.min.css')}}" rel="stylesheet">

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>


<body>
    @yield('content')


</body>
<hr class="mb-5">
<div class="container">
<div class="card-body card-body-cascade text-center">
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
  </div>
	<!--   Core JS Files   -->
	<script src="{{url('assets/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/jquery.bootstrap.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{url('assets/js/material-bootstrap-wizard.js')}}"></script>
	  <!-- Bootstrap core JavaScript -->
	<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
  	<script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<!-- Bootstrap lightbox -->
	<script type="text/javascript" src="{{url('js/lightbox.js')}}"></script> 
	<script type="text/javascript" src="{{url('js/lightbox.min.js')}}"></script> 

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="{{url('assets/js/jquery.validate.min.js')}}"></script>
	
	<script type="text/javascript">
    $(function () {
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
	<script>
	$('[data-toggle="tooltip"]').tooltip();
	</script>
	<script>
	$(document).ready(function(){
        $('#type').change(function(){
            selected_value = $("input[name='kategori']:checked").val();
        });
    });
	</script>
    </html>