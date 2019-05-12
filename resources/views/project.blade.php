@extends('base')
@section('title')
Form Project
@endsection
@section('content')
	<div class="image-container set-full-height" style="background-image: url('img/mhe-planning.jpg')">
	    <!--   Creative Tim Branding   -->

		<!--  Made With Material Kit  -->


	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
			                <form action="" method="">
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Request Project
		                        	</h3>
									<h5>Silahkan isi data kolom yang di sediakan</h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#location" data-toggle="tab">Lokasi</a></li>
			                            <li><a href="#type" data-toggle="tab">Kategori</a></li>
			                            <li><a href="#facilities" data-toggle="tab">Deadline</a></li>
			                            <li><a href="#description" data-toggle="tab">Keterangan</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="location">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> Silahkan lengkapi data pribadi anda</h4>
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
											<div class="col-sm-5">
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

		                            <div class="tab-pane" id="type">
		                                <h4 class="info-text">Tipe Project </h4>
		                                <div class="row">
		                                    <div class="col-sm-10 col-sm-offset-1">
		                                        <div class="col-sm-4 col-sm-offset-2">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have a house.">
		                                                <input type="radio" name="type" value="webapp">
		                                                <div class="icon">
		                                                    <i class="material-icons">code</i>
		                                                </div>
		                                                <h6>Web Develop</h6>
		                                            </div>
		                                        </div>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
		                                                <input type="radio" name="type" value="desktop">
		                                                <div class="icon">
		                                                    <i class="material-icons">desktop_windows</i>
		                                                </div>
		                                                <h6>Desktop App</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-4 col-sm-offset-2">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
		                                                <input type="radio" name="type" value="android">
		                                                <div class="icon">
		                                                    <i class="material-icons">android</i>
		                                                </div>
		                                                <h6>Mobile App</h6>
		                                            </div>
		                                        </div>
												<div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you have an appartment">
		                                                <input type="radio" name="type" value="rebuild">
		                                                <div class="icon">
		                                                    <i class="material-icons">refresh</i>
		                                                </div>
		                                                <h6>Rebuild App</h6>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="facilities">
		                                <h4 class="info-text">Deadline </h4>
		                                <div class="row">
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                      <div class="form-group label-floating">
											  <label class="control-label"> Tanggal Open Project</label>
		                                        	<input type="date" class="form-control" id="">
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group label-floating">
												<label class="control-label">Tanggal Start Project</label>
		                                        	<input type="date" class="form-control" id="">
		                                    	</div>
		                                    </div>
		                                    <div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Tanggal Selesai Project</label>
		                                        	<input type="date" class="form-control" id="">
                                                </div>
		                                    </div>
		                                    <div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Catatan</label>
		                                        	<input type="tex" class="form-control" id="catatn">
		                                            	
		                                    	</div>
	                                    	</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="description">
		                                <div class="row">
		                                    <h4 class="info-text"> Keterangan </h4>
		                                    <div class="col-sm-6 col-sm-offset-1">
		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Jelaskan secara rinci permintaan untuk aplikasi anda </label>
		                                            <textarea class="form-control" placeholder="" rows="9"></textarea>
		                                        </div>
		                                    </div>
		                                    <div class="col-sm-4">
		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Contoh</label>
		                                            <p class="description">"Saya ingin membuat sistem manajemen stock yang terdapat informasi": <br>#1 Stock In <br>#2 stock out <br>#3 data supplier <br>#4 data pelanggan</p>
													<p><i>note : ini hanyalah parameter, anda akan di hubungi team via telepon jika sudah melakukan submit"</i></p>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-info btn-wd' name='next' value='Next' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-info btn-wd' name='submit' value='Kirim' />
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

@endsection
