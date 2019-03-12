<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')


<div class="box">
  <div class="box-header with-border">
  <div class="login-logo">
  <p><h1> SURAT TANDA TERIMA SERVIS </h1><p>
    </div>
    <div class="col-sm-6">
		<table>#DITERIMA DARI
                                    <tr>
                                        <td width="30%">No.Servis</td>
                                        <td>:</td>
                                        <td>{{ $servis->kode_servis }}</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama </td>
                                        <td>:</td>
                                        <td>{{$servis->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $orders->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <td>:</td>
                                        <td>{{ $orders->telepon }}</td>
                                    </tr> 
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $orders->email }}</td>
                                    </tr>
                                </table>
                                </div>
                                <div class="col-md-6">
                                <table>#DITERIMA OLEH
                                    <tr>
                                        <td width="30%">AURORALINK</td>
                                    </tr>
                                    <tr>
                                        <td> Jl Bulak Setro Utara VI/4C Bulak Surabaya</td>
                                    </tr>
                                    <tr>
                                        <td> 081553177408</td>
                                    </tr>
                                    <tr>
                                        <td> support@auroralink.id</td>
                                    </tr>
                                    <tr>
                                        <td>{{ $servis->created_at }}</td>
                                    </tr>
                                </table>
                            </div>

 
    <!-- /.box-tools -->
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
	@if($orders->status == 'dalam-antiran')
       <span class="label label-danger">Dalam Antrian</span>
	   @else
       <span class="label label-success">Selesai Di Ambil</span>
	 @endif
	<button class="btn btn-primary hidden-print" onclick="myFunction('{{CRUDBooster::mainpath("export-data?t=" .time())}}')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</button>
</div>
   </div>
    <!-- /.box-tools -->
    </div>

  <!-- /.box-header -->

  <div class="box-body table-responsive no-padding">
    <table class="table table-hover table-striped table-bordered">
    <thead-light >
      <tr class="active">
        <th>#</th>
        <th>Unit</th>
        <th>Merk/Model</th>
        <th>Snid</th>
        <th>Status</th>
        <th>Keluhan</th>
      </tr>
    </thead-light>
    <tbody>
      <tr>
        <th scope="row">{{++$key}}</th>
        <th align="right">{{$servis->unit}}</th>
        <th align="right">{{$servis->unit}}</th>
        <th align="right">{{$servis->snid}}</th>
        <th align="right">{{$servis->sgaransi_id}}</th>
        <th align="right">{{$servis->keluhan}}</th>
      </tr>
    </tbody>
  </table>
<h4> Kelengkapan :</h4>
<label class="checkbox-inline"><input type="checkbox" value="">Baterai</label>
<label class="checkbox-inline"><input type="checkbox" value="">Hardisk</label>
<label class="checkbox-inline"><input type="checkbox" value="">Carger</label>
<label class="checkbox-inline"><input type="checkbox" value="">RAM</label>
<label class="checkbox-inline"><input type="checkbox" value="">Tas</label>
<label class="checkbox-inline"><input type="checkbox" value="">Mouse</label>
<label class="checkbox-inline"><input type="checkbox" value="">Lainya</label>

  </div>
  </div>
  </div>
  <!-- /.box-body -->
      </div>
<!-- /.box -->

@endsection
