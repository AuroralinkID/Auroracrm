@extends('layout.master')
@section('header')
@endsection
@section('content')
  <!--Main layout-->
  <blockquote class="blockquote text-center">
  <p class="mb-0"><strong><h2> <h3>{{$app->nama}}</h3></h2></strong></p>
  <footer class="blockquote-footer">Berikut adalah detail<cite title="Source Title"> {{$app->nama}}</cite></footer>
</blockquote>


  <hr class="mb-5">
    <div class="container dark-grey-text mt-5">
    
      <!--Grid row-->
      <section class="card card-cascade wider reverse mb-3">
                <!--Card image-->
                <div class="view view-cascade overlay">
                <img width="1621" height="737" src="{{url('/' .$app->img1)}}" class="img-fluid wp-post-image" alt="Ecommerce Template - Bootstrap 4 &amp; Material Design">                  <a href="#!">
                    <div class="mask waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-center">

                  <!--Title-->
                  <h4 class="card-title"><strong><u>{{$app->nama}}</u></strong></h4>


                  <!--Grid row-->
                  <div class="row d-flex justify-content-center mt-3">

                    <!--Grid column-->
                  <!--  <div class="col-md-6 card-text"> -->

                      <p>{{$app->deskripsi}}</p>

                 <!--   </div> -->
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

                </div>
                <!--/.Card content-->

              </section>
                <section class="mb-5 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

              <!--Section heading-->
              <h2 class="py-4 font-weight-bold text-center">Screenshoot</h2>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <!--Featured image-->
                  <div class="view overlay hm-white-slight rounded z-depth-1 mb-4">
                    <img src="{{url('/' .$app->img2)}}" class="img-fluid" alt="Thrid sample image">
                    <a href="{{url('/' .$app->img2)}}" target="_blank">
                      <div class="mask waves-effect waves-light"></div>
                    </a>
                  </div>

                  <!--Excerpt-->
                  <h5 class="mb-3 font-weight-bold dark-grey-text">
                  </h5>
                  <a href="#utama" target="_blank" class="btn btn-warning btn-rounded btn-md waves-effect waves-light">Halaman Utama
                    <i class="fas fa-home ml-2"></i>
                  </a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <!--Featured image-->
                  <div class="view overlay hm-white-slight rounded z-depth-1 mb-4">
                    <img src="{{url('/' .$app->img3)}}" class="img-fluid" alt="Thrid sample image">
                    <a href="{{url('/' .$app->img3)}}" target="_blank">
                      <div class="mask waves-effect waves-light"></div>
                    </a>
                  </div>

                  <!--Excerpt-->
                  <h5 class="mb-3 font-weight-bold dark-grey-text">
                  </h5>
                  <a href="#admin" target="_blank" class="btn btn-warning btn-rounded btn-md waves-effect waves-light">Halaman Admin
                    <i class="fas fa-user ml-2"></i>
                  </a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <!--Featured image-->
                  <div class="view overlay hm-white-slight rounded z-depth-1 mb-4">
                    <img src="{{url('/' .$app->img4)}}" class="img-fluid" alt="Thrid sample image">
                    <a href="{{url('/' .$app->img4)}}" target="_blank">
                      <div class="mask waves-effect waves-light"></div>
                    </a>
                  </div>

                  <!--Excerpt-->
                  <h5 class="mb-3 font-weight-bold dark-grey-text">
                  </h5>
                  <a href="#pelanggan" target="_blank" class="btn btn-warning btn-rounded btn-md waves-effect waves-light">Halaman Pelanggan
                    <i class="fas fa-users ml-2"></i>
                  </a>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

            </section>
            <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

                  <!--Section heading-->
                  <hr class="mb-5">
                  <h2 class="py-5 font-weight-bold text-center">Fitur Utama</h2>

                  <!--Grid row-->
                  <div class="row pt-2">

                    <!--Grid column-->
                    <div class="col-lg-5 text-center text-lg-left">
                      <img src="{{url('/' .$app->img5)}}" alt="" class="img-fluid z-depth-0">
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7">

                      <!--Grid row-->
                      <div class="row pb-3">
                        <div class="col-2 col-md-1">
                          <i class="fas fa-check fa-md indigo-text"></i>
                        </div>
                        <div class="col-10">
                          <h5 class="font-weight text-left mb-3 dark-grey-text">{{$app->f1}}</h5>
                        </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row pb-3">
                        <div class="col-2 col-md-1">
                          <i class="fas fa-check fa-md indigo-text"></i>
                        </div>
                        <div class="col-10">
                          <h5 class="font-weight text-left mb-3 dark-grey-text">{{$app->f2}}</h5>
                        </div>
                      </div>
                      <!--Grid row-->

                      <!--Grid row-->
                      <div class="row pb-3">
                        <div class="col-2 col-md-1">
                          <i class="fas fa-check fa-md indigo-text"></i>
                        </div>
                        <div class="col-10">
                          <h5 class="font-weight text-left mb-3 dark-grey-text">{{$app->f3}}</h5>
                        </div>
                      </div>
                      <!--Grid row-->
                      <!--Grid row-->
                        <div class="row pb-3">
                        <div class="col-2 col-md-1">
                          <i class="fas fa-check fa-md indigo-text"></i>
                        </div>
                        <div class="col-10">
                          <h5 class="font-weight text-left mb-3 dark-grey-text">{{$app->f4}}</h5>
                        </div>
                      </div>
                      <!--Grid row-->
                      <!--Grid row-->
                        <div class="row pb-3">
                        <div class="col-2 col-md-1">
                          <i class="fas fa-check fa-md indigo-text"></i>
                        </div>
                        <div class="col-10">
                          <h5 class="font-weight text-left mb-3 dark-grey-text">{{$app->f5}}</h5>
                        </div>
                      </div>
                      <!--Grid row-->
                        <!--Grid row-->
                        <div class="row pb-3">
                        <div class="col-2 col-md-1">
                          <i class="fas fa-check fa-md indigo-text"></i>
                        </div>
                        <div class="col-10">
                          <h5 class="font-weight text-left mb-3 dark-grey-text">{{$app->f6}}</h5>
                        </div>
                      </div>
                      <!--Grid row-->
                    </div>
                    <!--Grid column-->

                  </div>
                  <!--Grid row-->

          </section>
          <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
          <hr class="mb-5">
        <h2 class="py-5 font-weight-bold text-center">Platform</h2>

        <div class="row d-flex justify-content-center">

          <!--Grid column-->
          <div class="col-xl-2 col-lg-6 mb-4">

            <div class="card">
              <div class="card-body text-center">

                <h5 class="mt-0 mb-1 mb-2">Webapp
                </h5>
                <p class="grey-text mb-2">{{$app->v1}} </p>

                <img src="{{url('img/desktopapp.png')}}" class="my-3" alt="">

                <br>
              <!--
               <a id="home-updates-jquery" href="" role="button" class="btn btn-info btn-rounded btn-md waves-effect waves-light">Demo</a> 
              -->
              </div>

            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-2 col-lg-6 mb-4">

            <div class="card">
              <div class="card-body text-center">

                <h5 class="mt-0 mb-1 mb-2">Desktop
                </h5>
                <p class="grey-text mb-2">{{$app->v2}}</p>

                <img src="{{url('img/java.png')}}" class="my-3" alt="">

                <br>

          <!--      <a id="home-updates-angular" href="" role="button" class="btn btn-info btn-rounded btn-md waves-effect waves-light">Demo</a>
          -->
              </div>

            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-2 col-lg-6 mb-4">

            <div class="card">
              <div class="card-body text-center">

                <h5 class="mt-0 mb-1 mb-2">Android
                </h5>
                <p class="grey-text mb-2">{{$app->v3}}</p>

                <img src="{{url('img/react.png')}}" class="my-3" alt="">

                <br>
              <!--
                <a id="home-updates-react" href="" role="button" class="btn btn-info btn-rounded btn-md waves-effect waves-light">Demo</a>
              -->
              </div>

            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-xl-2 col-lg-6 mb-4">

            <div class="card">
              <div class="card-body text-center">

                <h5 class="mt-0 mb-1 mb-2">IOS
                </h5>
                <p class="grey-text mb-2">{{$app->v4}}</p>

                <img src="{{url('img/swift.png')}}" class="my-3" alt="">

                <br>
              <!--
                <a id="home-updates-vue" href="" role="button" class="btn btn-info btn-rounded btn-md waves-effect waves-light">Demo</a>
              -->
              </div>

            </div>

          </div>
          <!--Grid column-->

        </div>

      </section>
      <section class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">

        <section class="feature-box ">
        <hr class="mb-5">
          <h2 class="my-5 h3 text-center">Support</h2>

          <!--First row-->
          <div class="row features-small mt-5">

            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fa fa-plus fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2 pl-3">
                  <h5 class="feature-title font-bold mb-1">Tambah Fitur</h5>
                  <p class="grey-text mt-2">Anda dapat menambah fitur sesuai kebutuhan anda dengan tambahan biaya dan waktu yang telah di sepakati.
                  </p>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->

            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="feature-title font-bold mb-1">Update</h5>
                  <p class="grey-text mt-2">Anda berhak mendapatkan update aplikasi jika library/package/framework sudah usang dan tidak mendapatkan dukungan.
                  </p>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->

            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="far fa-support fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="feature-title font-bold mb-1">Team Support</h5>
                  <p class="grey-text mt-2">Kami memiliki team support yang akan menghandle sesuai team area masing-masing.
                  </p>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->

            <!--Grid column-->
            <div class="col-xl-3 col-lg-6">
              <!--Grid row-->
              <div class="row">
                <div class="col-2">
                  <i class="fas fa-bug fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                </div>
                <div class="col-10 mb-2">
                  <h5 class="feature-title font-bold mb-1">Fix Bug</h5>
                  <p class="grey-text mt-2">Pembenahan BUG jika terdapat vulnearby dari library yang di pakai, kami akan infokan update atau patch security.</p>
                </div>
              </div>
              <!--/Grid row-->
            </div>
            <!--/Grid column-->

          </div>
          <!--/First row-->

            </div>
            <!--/Grid column-->
            <div class="card-body card-body-cascade text-center">
            <a href="{{$app->addto}}" target="_blank" class="btn btn-info btn-rounded btn-md waves-effect waves-light">Tambahkan Ke Project
                    <i class="fa fa-sign-in ml-2"></i>
                  </a>
            </div>
          </div>
          <!--/Second row-->

        </section>

      </section>
      </div>
    </main>
  <!--Main layout-->

@endsection
@section('footer')
@endsection