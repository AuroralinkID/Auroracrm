<!DOCTYPE html>
<html lang="en">
    @include('layout.blog.head')
<body>
    <!-- Begin Nav
================================================== -->

<nav class="navbar navbar-toggleable-md navbar-light bg-white fixed-top mediumnavigation">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
        <!-- Begin Logo -->
        <a class="navbar-brand" href="{{url('/blog')}}">
        <img src="{{url('img/SiapPasangWeb.png')}}" alt="logo">
        </a>
        <!-- End Logo -->
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <!-- Begin Menu -->

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{url('blog/')}}">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('blog/kategori/1/teknologi'.str_slug($cat->name))}}">Teknologi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('blog/kategori/2/tutorial')}}">Tutorial</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('blog/kategori/3/tips-dan-trick')}}">Tips & Trik</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('blog/kategori/4/programming')}}">Programming</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{url('blog/kategori/5/hacking')}}">Hacking</a>
                </li>
            </ul>
            <!-- End Menu -->
            <!-- Begin Search -->
            @yield('search')
            <!-- End Search -->
        </div>
    </div>
    </nav>
    <!-- End Nav
================================================== -->

<!-- Begin Site Title
================================================== -->
<div class="container">
    <div class="text-center">
        <img src="{{url('img/bn.jpg')}}" class="img-fluid" alt="Responsive image" width='500'>

    </div>
        {{-- <div class="mainheading">
            <a href='#' target='_blank' title='Settia Blog'>
                <img src="{{url('img/bn.jpg')}}" alt=Settia  width='500'/></a>

	</div> --}}
<!-- End Site Title
================================================== -->

	<!-- Begin Featured
	================================================== -->
	<section class="featured-posts">
	<div class="section-title">
        <h2><span>@yield('categories')</span></h2>
	</div>
	<div class="card-columns listfeaturedtag">

		@yield('content')

	</div>
    </section>
    <section class="article-post">
        @yield('article')
    </section>
	<!-- End Featured
	================================================== -->

	<!-- Recent Posts
	================================================== -->
	<section class="recent-posts">
	<div class="section-title">
		<h2><span>@yield('judul_recent')</span></h2>
	</div>
	<div class="card-columns listrecent">

		@yield('content_recent')

	</div>
	</section>
	<!-- Recent Posts
	================================================== -->
    @include('layout.blog.footer')

</div>
<!-- /.container -->

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{url('asset/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="{{url('asset/js/bootstrap.min.js')}}"></script>
<script src="{{url('asset/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>
