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
<script type="text/javascript" src="{{url('summernote/summernote.min.js')}}"></script>
</body>
</html>
