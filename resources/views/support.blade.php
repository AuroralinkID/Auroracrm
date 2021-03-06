@extends('layout.base')
@section('title')
Form Support
@endsection
@section('content')
<div class="image-container set-full-height" style="background-image: url('img/portofolio.jpg')">
	    <!--   Creative Tim Branding   -->


		<!--  Made With Material Kit  -->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    <form action="{{ action('FormController@postSupport') }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
						@if ( Session::get('message') != '' )
									<div class='alert alert-{{ Session::get("message_type") }}'>
									<h3 class="info-text"><b><i class="icon fa fa-info"></i> {{ trans("crudbooster.alert_".Session::get("message_type")) }}</b></h3>
									<!--	<div class='alert alert-info'> -->
									<h5 class="info-text"><b>{{ Session::get('message') }}</b></h5>									
										</div>
									@endif
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	  Layanan Support 
		                        	</h3>
									<h5>Silahkan isi form sesuai kolom yang ada</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#about" data-toggle="tab">Data Anda</a></li>
			                            <li><a href="#account" data-toggle="tab">Kategori</a></li>
			                            <li><a href="#address" data-toggle="tab">Keluhan</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                              <div class="row">
		                                	<h4 class="info-text"> Data detail</h4>
		                                	<div class="col-sm-6">
											<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">account_balance</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nama PT <small>(nama perusahaan / usaha anda)</small></label>
			                                          <input name="pt" type="text" class="form-control">
			                                        </div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Nama Lengkap <small>(required)</small></label>
			                                          <input name="nama" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">email</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Email <small>(required)</small></label>
			                                          <input name="email" type="email" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">contacts</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Telepon <small>(required)</small></label>
			                                          <input name="telepon" type="number" class="form-control">
			                                        </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
											<div class="form-group label-floating">
												<span><i class="material-icons">create</i></span>
		                                        	<label class="control-label">Deskripsi Project<small>(project yang anda inginkan)</small></label>
													<input name="deskripsi" type="text" class="form-control">
		                                    	</div>
												<div class="form-group label-floating">
												<span><i class="material-icons">location_on</i></span>
													<textarea name="alamat" type="text" class="form-control" placeholder="Alamat" rows="5"></textarea>
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>
		                            <div class="tab-pane" id="account">
		                                <h4 class="info-text"> Jenis Layanan Support</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
											@foreach($jasa as $key => $js)
		                                        <div class="col-sm-4">
															<div class="radio">
																<label>
																	<input type="radio" name="jasa" value="{{$js->id}}">
																	<ul>{{$js->nama}}	</ul>
																</label>
															</div>
															</div>
											@endforeach
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="address">
									<div class="row">
		                                    <h4 class="info-text"> Jelaskan keluhan anda</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Jelaskan keluhan disni</label>
		                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group">
		                                            <label class="control-label">Contoh</label>
		                                            <p class="description">"Pasang Mikrotik"</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='submit' value='Kirim' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	</div>
@endsection