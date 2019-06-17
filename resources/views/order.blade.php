<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')



<div class="box-tools">
	<a  href="{{action('FrontController@getOrderpdf', $idorder)}}" class="btn btn-primary hidden-print" role="button" aria-pressed="true"><span class="glyphicon glyphicon-print"></span>Print</a>
</div>


<div class="box">
<div class="row">
    <div class="col-sm-8">
    <div class="text-center">
        <img src="/img/SiapPasangWeb.png" alt="Logo" style="border-bottom:1px solid black;text-decoration:none;color:#000001;"/>
        <p>TANDA PEMBAYARAN NO: {{ $orders->nomer_order }}<p>
        </div>
    </div>
    </div>
    </div>    
    <div class="box-body table-responsive no-padding">
    <table class="table" style="text-decoration:none;">
    <thead-light >
      <tr class="active">
        <th>
		<table>#PEMBAYARAN DARI
                                    <tr>
                                        <td style="padding: 1px;" width="30%">Nama </td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{$orders->nama}}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;">Alamat</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{ $orders->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;">Telepon</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{ $orders->telepon }}</td>
                                    </tr> 
                                    <tr>
                                        <td style="padding: 1px;">Email</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">{{ $orders->email }}</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 1px;">Status</td>
                                        <td style="padding: 1px;">:</td>
                                        <td style="padding: 1px;">
                                        @if($orders->status == 'pending')
                                            <span class="label label-danger">BELUM DIBAYAR</span>
                                          @else
                                            <span class="label label-success">SUDAH DIBAYAR</span>
                                        @endif</td>
                                    </tr>
                                </table>
        </th> 
        <th>
        <table>#PEMBAYARAN KEPADA
                                    <tr>
                                        <td style="padding: 1px;">AURORALINK</td>
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
                                    <tr>
                                        <td style="padding: 1px;">{{ $orders->created_at }}</td>
                                    </tr>
                                </table>
        </th> 
      </tr>
    </thead-light>
    </table>
    </div>

  <!-- /.box-header -->

  <div class="box-body table-responsive no-padding">
    <table class="table table-hover table-striped table-bordered">
    <thead-light >
      <tr class="active">
        <th>#</th>
        <th>Produk</th>
        <th>Product SKU</th>
        <th>QTY</th>
        <th>Harga/unit Rp.</th>
        <th>Total Rp.</th>
      </tr>
    </thead-light>
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

    <tfoot >
        <tr>
            <th colspan="4"></th>
            <th align="right">Pajak Rp.</th>
            <th align="right">{{ $orders->pajak }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Biaya Servis Rp.</th>
            <th align="right">{{ $dsic->biaya }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Diskon Rp.</th>
            <th align="right">{{ $dsic->disc }}</th>
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
    <h4 class="box-title">Silahkan melakukan pembayaran Sebesar <strong>Rp. {{ $orders->grand_total }}</strong> ke salah satu rekening di bawah ini : </h4>

  <div class="col-sm-2">
        <div class="card" style="width: 18rem;">
  <img src="{{url('')}}/img/bank-1bca.jpg" class="card-img-top" style='max-width: 50%;max-height:50px;position: absolute; left: 1px; top: 0px;' alt="Sample image"><br>
  <div class="card-body">
  
    
    <br><p class="card-text">

    </p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
    BCA Virtual Account
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BCA Virtual Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4 class="box-title">Silahkan melakukan pembayaran Sebesar <strong>Rp. {{ $orders->grand_total }}</strong><br>  
      An. Agoes Suryani<br>
    Rek : 325 066 7956<br>
    Pembayaran Virtual Account BCA<br>
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            </div>
            </div>
            </div>
      <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
  <img src="{{url('')}}/img/bank-1bri.jpg" class="card-img-top" style='max-width: 50%;max-height:50px;position: absolute; left: 1px; top: 0px;' alt="Sample image"><br>
  <div class="card-body">
    <br><p class="card-text">

    </p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
BRI Virtual Account
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BRI Virtual Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4 class="box-title">Silahkan melakukan pembayaran Sebesar <strong>Rp. {{ $orders->grand_total }}</strong><br>  
      An. Agoes Suryani<br>
    Rek : 6263 0100 5365 530<br>
    Pembayaran Virtual Account BCA<br>
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
    <br><strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong> >> <strong>Rp. {{ $orders->grand_total }}</strong><br> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
      </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
  <img src="{{url('')}}/img/bank-1mandiri.jpg" class="card-img-top" style='max-width: 50%;max-height:50px;position: absolute; left: 1px; top: 0px;' alt="Sample image"><br>
  <div class="card-body">
    <br><p class="card-text">

    </p>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
MANDIRI Click Pay
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">MANDIRI Click Pay</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4 class="box-title">Silahkan melakukan pembayaran Sebesar <strong>Rp. {{ $orders->grand_total }}</strong><br>  
      An. Sofan Wahyudi<br>
    Rek : 1400013788303<br>
    Pembayaran Virtual Account BCA<br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<!--      <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
  <img src="{{url('')}}/img/bank-1mandiri.jpg" class="card-img-top" style='max-width: 50%;max-height:50px;position: absolute; left: 1px; top: 0px;' alt="Sample image"><br>
  <div class="card-body">
    <br><p class="card-text">
    An. Sofan Wahyudi<br>
    Rek : 1400013788303<br>
    </p>
   <a href="#" onclick="print()" class="btn btn-primary">MANDIRI Click Pay</a> 
      </div>
      </div>
      </div> -->
      <!--     <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
  <img src="{{url('')}}/img/bank-1muamalat.jpg" class="card-img-top" style='max-width: 50%;max-height:50px;position: absolute; left: 1px; top: 0px;' alt="Sample image"><br>
  <div class="card-body">
    <br><p class="card-text">
    An. Sofan Wahyudi<br>
    Rek : 706 000 8988<br>
    </p>
<!--    <a href="#" class="btn btn-primary">BCA Virtual Account</a> 
      </div>
      </div>
      </div>
      <div class="col-sm-2">
      <div class="card" style="width: 18rem;">
  <img src="{{url('')}}/img/bank-1cimb.jpg" class="card-img-top" style='max-width: 50%;max-height:50px;position: absolute; left: 1px; top: 0px;' alt="Sample image"><br>
  <div class="card-body">
    <br><p class="card-text">
    An. Sofan Wahyudi<br>
    Rek Ponsel : 081553177408<br>
    </p>
<!--    <a href="#" class="btn btn-primary">BCA Virtual Account</a> 
      </div>
      </div>
      </div>
  <!-- /.box-body -->
      </div>
<!-- /.box -->
@endsection
