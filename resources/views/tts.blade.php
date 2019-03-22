<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="pavicon.png" type="image/png">
<style>
body {
  background-image: url("paper.gif");
}
th {    
    border: 1px solid #ddd;
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
<img src="https://app.auroralink.id/img/SiapPasangWeb.png"  alt="Logo" style="border-bottom:1px solid black;text-decoration:none;color:#000001;">
        <p>TANDA TERIMA SERVIS:{{$usr->kode_servis}}<p>
</div>
<div>
    <table width="80%">
    <thead>
    <tr>
            <td width="50%">#Diterima Dari</td>
            <td>#Untuk Servis di</td>
        </tr>
        <tr>
            <td>{{$usr->nama}}</td>
            <td>AURORALINK</td>
        </tr>
        <tr>
            <td>{{ $usr->alamat }}</td>
            <td> Jl Bulak Setro Utara VI/4C Bulak Surabaya</td>
        </tr>
        <tr>
            <td>{{ $usr->telepon }}</td>
            <td> 081553177408</td>
        </tr>
         <tr>
            <td>{{ $usr->email }}</td>
            <td>{{ $teams->tnama }}</td>
        </tr>
        <tr>
        <td style="padding: 1px;">
                                        @if($usr->status == 'dalam-antiran')
                                            <span class="label label-danger">Dalam Antrian</span>
                                          @elseif($usr->status == 'dalam-pengecaken')
                                            <span class="label label-success">Dalam Pengecekan</span>
										  @elseif($usr->status == 'menunggu-part')
										    <span class="label label-success">Menunggu Part</span>
										  @elseif($usr->status == 'selesai')
										    <span class="label label-success">Selesai</span>
										  @elseif($usr->status == 'diambil')
										    <span class="label label-success">Di Ambil</span>
                                        @endif</td>
            <td> support@auroralink.id</td>
        </tr>
        </thead>   
    </table>
</div>
<div>
    <table>
        <thead>
            <tr>
							<th>#</th>
							<th>Unit</th>
							<th>Merk/Model</th>
							<th>Snid</th>
							<th>Status</th> 
							<th>Keluhan</th>
							<th>Biaya</th>
            </tr>
        </thead>
            <tbody>
            
            <tr>
                <th scope="row">{{++$key}}</th>
                <th align="right">{{$usr->unit}}</th>
                <th align="right">{{$usr->model}}</th>
                <th align="right">{{$usr->snid}}</th>
                <th align="right">{{$gars->status}}</th> 
                <th align="right">{{$usr->keluhan}}</th>
                <th align="right">{{$bias->jbay}}</th>
         </tr>
         
        </tbody>
</table>
<div class="container">
  <div class="row">
  <div class="form-group create-data">
  <table>
     
    <tr>
    <label>Kelengkapan : <br>{{ $usr->kelengkapan }}</label>
     </tr>
  </table>
</div>
</div>
</div>
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
            <td>Teknisi/Admin</td>
        </tr>

        </thead>   
    </table>
</div>
</div>
</body>
</html>