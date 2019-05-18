@extends('base')
@section('title')
Form Pickup
@endsection
@section('content')
<div class="image-container set-full-height" style="background-image: url('img/vio.jpg')">
	    <!--   Creative Tim Branding   -->


		<!--  Made With Material Kit  -->

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form action="{{ action('FormController@postServis') }}" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
						@if ( Session::get('message') != '' )
									<div class='alert alert-{{ Session::get("message_type") }}'>
									<i class="icon fa fa-info"></i> {{ trans("crudbooster.alert_".Session::get("message_type")) }}
									<!--	<div class='alert alert-info'> -->
											{{ Session::get('message') }}
										</div>
									@endif
		                    	<div class="wizard-header">
								
		                        	<h3 class="wizard-title">
		                        		Form Pickup Servis
		                        	</h3>
									<h5>
									Silahkan isi data informasi anda sesuai alamat pickup </h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Nama dan Alamat</a></li>
										<li><a href="#unit" data-toggle="tab">Unit</a></li>
			                            <li><a href="#captain" data-toggle="tab">Kelengkapan</a></li>
										<li><a href="#garansi" data-toggle="tab">Garansi</a></li>
			                            <li><a href="#description" data-toggle="tab">Keluhan</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="details">
		                            	<div class="row">
			                            	<div class="col-sm-12">
			                                	<h4 class="info-text"> Data detail</h4>
			                            	</div>
		                                	<div class="col-sm-6">
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
														<i class="material-icons">phone</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Telepon <small>(required)</small></label>
			                                          <input name="telp" type="number" class="form-control">
			                                        </div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">calendar_view_day</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Serial Number<small>(required)</small></label>
			                                          <input name="snid" type="text" class="form-control">
			                                        </div>
												</div>
												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">local_offer</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">Merk / Model<small>(required)</small></label>
			                                          <input name="model" type="text" class="form-control">
			                                        </div>
												</div>

		                                	</div>
		                                	<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
												<span><i class="material-icons">email</i></span>
		                                        	<label class="control-label">Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control">
		                                    	</div>
		                                	</div>
											<div class="col-sm-6">
		                                    	<div class="form-group label-floating">
												<span><i class="material-icons">location_on</i></span>
													<textarea name="alamat" type="text" class="form-control" placeholder="Alamat" rows="5"></textarea>
		                                    	</div>
		                                	</div>
									
		                            	</div>
		                            </div>

								<!-- Section Type Device -->
								<div class="tab-pane" id="unit">
		                                <h4 class="info-text">Unit </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4 col-sm-offset-2">
														<div class="radio">
																<label>
																	<input type="radio" name="unit" value="1">
																	Laptop
																</label>
														</div><div class="radio">
																<label>
																	<input type="radio" name="unit" value="2">
																	PC-Desktop
																</label>
														</div>
														<div class="radio">
																<label>
																	<input type="radio" name="unit" value="3">
																	Smartphone
																</label>
														</div><div class="radio">
																<label>
																	<input type="radio" name="unit" value="4">
																	Printer
																</label>
														</div>
												</div>
		                                    </div>
		                                </div>
		                            </div>

								<div class="tab-pane" id="captain">
		                                <h4 class="info-text"> Pilih Kelengkapan  (checkboxes) </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-3">
													<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" value="Adaptor" checked>
															Adaptor
														</label>
													</div>
		                                        </div>
		                                        <div class="col-sm-3">
												<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" value="Baterai" checked>
															Baterai
														</label>
													</div>
		                                        </div>
		                                        <div class="col-sm-3">
												<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" value="RAM" checked>
															RAM
														</label>
													</div>
		                                        </div>
												<div class="col-sm-3">
												<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" value="Hardisk" checked>
															Hardisk
														</label>
													</div>
		                                        </div>
												<div class="col-sm-3">
												<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" value="Tas" checked>
															Tas
														</label>
													</div>
		                                        </div>
												<div class="col-sm-3">
												<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" checked>
															Mouse
														</label>
													</div>
		                                        </div>
												<div class="col-sm-3">
												<div class="checkbox">
														<label>
															<input type="checkbox" name="kelengkapan" checked>
															Flashdisk
														</label>
													</div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>


									<div class="tab-pane" id="garansi">
		                                <h4 class="info-text">Status Garansi </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4 col-sm-offset-2">
															<div class="radio">
																<label>
																	<input type="radio" name="garansi" value="1">
																	Bergaransi
																</label>
															</div><div class="radio">
																<label>
																	<input type="radio" name="garansi" value="2">
																	Tidak Bergaransi
																</label>
															</div>
															</div>
		                                    </div>
		                                </div>
		                            </div>

		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Jelaskan keluhan anda</h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
	                                    		<div class="form-group">
		                                            <label>Jelaskan keluhan disni</label>
		                                            <textarea name='keluhan' class="form-control" placeholder="" rows="6"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group">
		                                            <label class="control-label">Contoh</label>
		                                            <p class="description">"Laptop / PC mati setelah saya mematikan secara paksa."</p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-danger btn-wd' name='submit' value='Kirim' />
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
	    	</div> <!-- row -->
		</div> <!--  big container -->

    </div>
    @endsection
