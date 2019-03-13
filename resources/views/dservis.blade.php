<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')

<div class="box-tools">
	<button class="btn btn-primary hidden-print" onclick="myFunction('{{CRUDBooster::mainpath("export-data?t=" .time())}}')"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</button>
</div>
        <div class="box">
<div class="row">
    <div class="col-sm-9">
    <div class="text-center">
        <img src="/img/SiapPasangWeb.png" alt="Logo" style="border-bottom:1px solid black;text-decoration:none;color:#000001;"/>
        <p>TANDA TERIMA SERVIS NO: {{ $servis->kode_servis }}<p>
        </div>
    </div>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
		<table>#DITERIMA DARI
                                    <tr>
                                        <td style="padding: 1px;">No.Servis</td>
                                        <td style="padding: 1px;">: </td>
                                        <td style="padding: 1px;"> {{ $servis->kode_servis }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;" width="30%">Nama </td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{$servis->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;">Alamat</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{ $servis->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;">Telepon</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{ $servis->telepon }}</td>
                                    </tr> 
                                    <tr>
                                        <td style="padding: 1px;">Email</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{ $servis->email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;">Status</td>
                                        <td style="padding: 1px;">: </td>
                                        <td style="padding: 1px;">
                                        @if($orders->status == 'dalam-antiran')
                                            <span class="label label-danger">Dalam Antrian</span>
                                          @else
                                            <span class="label label-success">Selesai Di Ambil</span>
                                        @endif</td>
                                    </tr>
                                </table>
                                </div>
                                <div class="col-md-6">
                                <table>#DITERIMA OLEH
                                    <tr>
                                        <td style="padding: 1px;" width="30%">AURORALINK</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;"> Jl Bulak Setro Utara VI/4C Bulak Surabaya</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;"> 081553177408</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;"> support@auroralink.id</td>
                                    </tr>
                                    @foreach($team as $key => $tm) 
                                    <tr>
                                        <td style="padding: 1px;">{{ $tm->tnama }}</td>
                                    </tr>
                                    @endforeach 
                                    <tr>
                                        <td style="padding: 1px;">{{ $servis->created_at }}</td>
                                    </tr>
                                </table>
                            </div>
                            </div>
                    </div>
 
    <!-- /.box-tools -->

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
        <th>Biaya</th>
      </tr>
    </thead-light>
    <tbody>
    @foreach($servisdetail as  $key => $sd)
    @foreach($statusgaransi as $key => $sg)
      <tr>
        <th scope="row">{{++$key}}</th>
        <th align="right">{{$servis->unit}}</th>
        <th align="right">{{$servis->model}}</th>
        <th align="right">{{$servis->snid}}</th>
        <th align="right">{{$sg->status}}</th>
        <th align="right">{{$servis->keluhan}}</th>
        <th align="right">{{$sd->jbiaya}}</th>
      </tr>
     @endforeach
     @endforeach
    </tbody>
  </table>
  </div>
  </div>
  </div>
  <!-- /.box-body -->
      </div>
<!-- /.box -->

@endsection
