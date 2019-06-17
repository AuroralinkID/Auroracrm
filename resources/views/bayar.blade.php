@extends('layout')
@section('content')

<div class="container-fluid">
  <div class="page-header">
    <h1>Pembayaran</h1>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="well">
        &hellip;
      </div>
      <div class="checkbox">
        <label data-toggle="collapse" data-target="#promo">
          <input type="checkbox"> Punya Kode promo ?
        </label>
      </div>
      <div class="collapse" id="promo">
        <div class="form-group">
          <label for="inputpromo" class="control-label">kode promo</label>
          <div class="form-inline">
            <input type="text" class="form-control" id="inputpromo" placeholder="Masukan Kode Promo">
            <button class="btn btn-sm">Apply</button>
          </div>
        </div>
      </div>

<!-- pembayaran -->
<div class="box-body table-responsive no-padding">      
<div class="container">
    <div class="row">

        <div class="col-sm-2">
              <div class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-target="#exampleModalLong">
              <img class="img-responsive" src="https://banner2.kisspng.com/20180802/lcs/kisspng-bank-central-asia-logo-bca-finance-business-logo-bank-central-asia-bca-format-cdr-amp-pn-5b63687e470088.3520223915332414702908.jpg" width="350" height="100">
                
              </div>
            </div>

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


@endsection