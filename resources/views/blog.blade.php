@extends('layout.blog.med')

@section('title')
Auroralink | Blog
@stop
@section('nav')
{{-- @foreach ($categories as $cat)
<li class="nav-item">
<a class="nav-link" href='{{url("blog/kategori/$cat->id/".str_slug($cat->name))}}'>{{$cat->name}}</a>
</li>
@endforeach --}}
@endsection
@section('search')
                <form class="form-inline my-2 my-lg-0" method="get" action="{{url('blog/search')}}">
                <input class="form-control mr-sm-2" type="text" name="s" placeholder="Cari disini...">
                <span class="input-group-button">
                    <button class="btn btn-default" type="submit">
                        <span>
                            <span class="fa fa-search"></span>
                        </span>
                    </button>
                </span>
            </form>
@endsection
@section('categories')
Semua Post
@endsection

@section('content')
@foreach ($blogs as  $blog)
<!-- begin post -->
<div class="card">
        <div class="row">
            <div class="col-md-5 wrapthumbnail">
                <a href='{{url("blog/post/$blog->slug")}}'>
                        <img class="img-fluid" src="{{asset('/' .$blog->image)}}" alt="">
                </a>
            </div>
            <div class="col-md-7">
                <div class="card-block">
                    <h2 class="card-title"><a href='{{url("blog/post/$blog->slug")}}'>{{$blog->title}}</a></h2>
                    <h4 class="card-text">{{str_limit(strip_tags($blog->content),100)}}</h4>
                    <div class="metafooter">
                        <div class="wrapfooter">
                            <span class="meta-footer-thumb">
                                <img class="author-thumb" src="assets/img/faces/face-1.jpg" alt="Sal">
                            </span>
                            <span class="author-meta">
                            <span class="post-name">{{$blog->katnam}}</span><br/>
                            <span class="post-name">{{$blog->sunam}}</span><br/>
                            <span class="post-date">{{date('M,d,Y',strtotime($blog->created_at))}}</span>
                            </span>
                            <span class="post-read-more"><a href='{{url("/blog/post/$blog->slug")}}' title="Selengkapnya">Selengkapnya &raquo;</a></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endforeach
   <!-- end post -->
@stop

{{-- @section('judul_recent')
Recent Post
@endsection --}}
{{-- @section('content_recent')

@endsection --}}

