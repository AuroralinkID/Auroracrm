<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')

<div class="box">
  <div class="box-header with-border">
  <div class="login-logo">
        <a href="{{url('/')}}">
            <img title='{!!(Session::get('appname') == 'CRUDBooster')?"<b>CRUD</b>Booster":CRUDBooster::getSetting('appname')!!}'
                 src='{{ CRUDBooster::getSetting("logo")?asset(CRUDBooster::getSetting('logo')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}'
                 style='max-width: 50%;max-height:50px;position: absolute; left: 250px; top: -3px;'/>
        </a>
    </div>
    <div class="col-sm-6">
		<table>Pembayaran Dari
                                    <tr>
                                        <td width="30%">No.Inv</td>
                                        <td>:</td>
                                        <td>{{ $orders->nomer_order }}</td>
                                    </tr>
                                    <tr>
                                        <td width="30%">Nama </td>
                                        <td>:</td>
                                        <td>{{ $orders->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>{{ $orders->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>{{ $orders->email }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table>Pembayaran Kepada
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
                                </table>
                            </div>
    <div class="box-tools pull-right">
      <!-- Buttons, labels, and many other things can be placed here! -->
      <!-- Here is a label for example -->
	@if($orders->status == 'pending')
       <span class="label label-danger">BELUM DIBAYAR</span>
	   @else
       <span class="label label-success">SUDAH DIBAYAR</span>
	 @endif
   </div>
   </div>
    <!-- /.box-tools -->
  </div>
  <!-- /.box-header -->

  <div class="box-body table-responsive no-padding">
    <table class="table table-hover table-striped table-bordered">
    <thead >
      <tr class="active">
        <th>#</th>
        <th>Produk</th>
        <th>Product SKU</th>
        <th>QTY</th>
        <th>Harga/unit Rp.</th>
        <th>Total Rp.</th>
      </tr>
    </thead>
    <tbody>
	@foreach($ordersdetail as  $key => $od)
      <tr>
        <th scope="row">{{++$key}}</th>
        <th align="right">{{$od->judul}}</th>
        <th align="right">{{$od->prosku}}</th>
        <th align="right">{{$od->qty}}</th>
        <th align="right">{{$od->harga}}</th>
        <th align="right">{{$od->sub_total}}</th>
      </tr>
     @endforeach
    </tbody>

    <tfoot>
        <tr>
            <th colspan="4"></th>
            <th align="right">Biaya Servis Rp.</th>
            <th align="right">{{ $orders->pajak }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Diskon Rp.</th>
            <th align="right">{{ $orders->diskon }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Grand Total Rp.</th>
            <th align="right" class="gray">{{ $orders->grand_total }}</th>
        </tr>
    </tfoot>
  </table>
  </div>
    <div class="box-body table-responsive no-padding">
    <h4 class="box-title">Silahkan lakukan pembayaran Sebesar <strong>Rp. {{ $orders->grand_total }}</strong> ke salah satu rekening di bawah ini : </h4>
  <div class="col-sm-6">
				Bank BCA<br>
				Norek 18002823<br>
				AN Bambang Pamungkas<br>
			<br>
      </div>
      <div class="col-sm-6">
				Bank Mandiri<br>
				Norek 18002823<br>
				AN Bambang Pamungkas<br>
			<br>
      </div>
      <div class="col-sm-6">
      Bank BRI<br>
      Norek 18002823<br>
      AN Bambang Pamungkas<br>
      <br>
      </div>

      <div class="col-sm-6">
      Bank Muamalat<br>
      Norek 18002823<br>
      AN Bambang Pamungkas<br>
    <br>
    </div>
      </div>
  <!-- /.box-body -->
  <div class="box-footer">
  Dibuat pada tanggal {{ $orders->created_at }}
  </div>
  <!-- box-footer -->
</div>
<!-- /.box -->

@endsection
