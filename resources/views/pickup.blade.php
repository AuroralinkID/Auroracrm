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
		                    <form action="" method="post">
							<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Form Pickup Servis
		                        	</h3>
									<h5>Silahkan isi data informasi anda sesuai alamat pickup </h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#details" data-toggle="tab">Nama dan Alamat</a></li>
			                            <li><a href="#captain" data-toggle="tab">Kelengkapan</a></li>
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
			                                          <input name="firstname" type="text" class="form-control">
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
												<span><i class="material-icons">location_on</i></span>
		                                        	<label class="control-label">Alamat <small>(required)</small></label>
													<input name="alamat" type="text" class="form-control">
		                                    	</div>
		                                    	<div class="form-group label-floating">
												<span><i class="material-icons">create</i></span>
		                                        	<label class="control-label">Catatan</label>
													<input name="catatan" type="text" class="form-control">
		                                    	</div>
		                                	</div>
		                            	</div>
		                            </div>

								<!-- Section Type Device -->


								<div class="tab-pane" id="captain">
		                                <h4 class="info-text"> Pilih Kelengkapan  (checkboxes) </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                    <i class="fa fa-plug"></i>
		                                                </div>
		                                                <h6>Adaptor</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Code">
		                                                <div class="icon">
		                                                    <i class="fa fa-hdd-o"></i>
		                                                </div>
		                                                <h6>Hardisk</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-simplybuilt"></i>
		                                                </div>
		                                                <h6>Memory / Ram</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-glass"></i>
		                                                </div>
		                                                <h6>DVD/DRW</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-briefcase"></i>
		                                                </div>
		                                                <h6>Tas</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-mouse-pointer"></i>
		                                                </div>
		                                                <h6>Mouse</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-dropbox"></i>
		                                                </div>
		                                                <h6>Flashdisk</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-3">
		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Develop">
		                                                <div class="icon">
		                                                    <i class="fa fa-tag"></i>
		                                                </div>
		                                                <h6>Lainya</h6>
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
		                                            <textarea class="form-control" placeholder="" rows="6"></textarea>
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
