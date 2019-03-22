<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color:#f5f5f5;
}
th {    
    border: solid 1px #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 5px;
}
.center {
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 50%;

}

</style>
</head>
<div class="center">
<img src="https://app.auroralink.id/img/SiapPasangWeb.png"  alt="Logo" alt="Logo" style="border-bottom:1px solid black;text-decoration:none;color:#000001;">
<p>TANDA PEMBAYARAN NO: {{ $ord->nomer_order }}<p>
</div>
<div>
    <table width="80%">
    <thead>
    <tr>
    
            <td width="50%">#Pembayaram Dari</td>
            <td>#Pembayaran Kepada</td>
        </tr>
        <tr>
            <td>{{$ord->nama}}</td>
            <td>AURORALINK</td>
            
        </tr>
        <tr>
            <td>{{ $ord->alamat }}</td>
            <td> Jl Bulak Setro Utara VI/4C Bulak Surabaya</td>
        </tr>
        <tr>
            <td>{{ $ord->telepon }}</td>
            <td> 081553177408</td>
        </tr>
         <tr>
            <td>{{ $ord->email }}</td>
            <td> support@auroralink.id</td>
        </tr>
        <tr>
                                        <td style="padding: 1px;">
                                        @if($orders->status == 'pending')
                                            <span class="label label-danger">#BELUM DIBAYAR</span>
                                          @else
                                            <span class="label label-success">#SUDAH DIBAYAR</span>
                                        @endif</td>
                                    </tr>
        </thead>   
    </table>
</div>
<div>
    <table>
        <thead>
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
    @foreach($ords as $key => $od)
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
            <th align="right">Biaya Servis Rp.</th>
            <th align="right">{{ $ord->biaya_servis }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Pajak Rp.</th>
            <th align="right">{{ $ord->pajak }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Diskon Rp.</th>
            <th align="right">{{ $ord->diskon }}</th>
        </tr>
        <tr>
            <th colspan="4"></th>
            <th align="right">Grand Total Rp.</th>
            <th align="right" class="gray">{{ $ord->grand_total }}</th>
        </tr>
    </tfoot>
</table>
<div>
<br>

    <table width="100%">
    <thead>
    <tr>
            <td width="80%"></td>
            <td>Sby,  {{ date('d-m-Y') }}</td>
        </tr>
        <tr>
            <td width="80%"><br></td>
            <td></td>
        </tr>
    <tr>
            <td width="80%"></td>
            <td></td>
        </tr>
        <tr>
            <td width="80%"><br></td>
            <td></td>
        </tr>
    <tr>
            <td width="80%">Pelanggan</td>
            <td>Admin</td>
        </tr>

        </thead>   
    </table>
</div>
</div>
</body>
</html>