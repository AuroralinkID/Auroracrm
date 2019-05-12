@extends('base')
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
		                    <form action="" method="">
		                <!--        You can switch " data-color="purple" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->

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
		                            <div class="tab-pane" id="account">
		                                <h4 class="info-text"> Jenis Layanan Support</h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
											<div class="col-sm-4 col-sm-offset-2">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
		                                                <input type="radio" name="type" value="onsite">
		                                                <div class="icon">
		                                                    <i class="material-icons">location_on</i>
		                                                </div>
		                                                <h6>Onsite</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
		                                                <input type="radio" name="type" value="remote">
		                                                <div class="icon">
		                                                    <i class="material-icons">touch_app</i>
		                                                </div>
		                                                <h6>Remote</h6>
		                                            </div>
		                                        </div>
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
		                                            <p class="description">"PC-Desktop Blank"</p>
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