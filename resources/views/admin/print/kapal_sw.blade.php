<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  font-size: 7px;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
<center><h1>Tabel Cetak Kapal Sewa</h1></center>
<div class="table-responsive">
                        <table id="customers" class="center" >
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA KAPAL</th>
                                    <th>OWNER</th>
                                    <th>NAMA PIC</th>
                                    <th>CUSTOMER</th>
                                    <th>NO SERTIFIKAT</th>
                                    <th>NAMA SERTIFIKAT</th>
                                    <th>DESTINASI</th>
                                    <th>TANGGAL PENYEWAAN</th>
                                    <th>HARGA SEWA OWNER</th>
                                    <th>HARGA SEWA CUSTOMER</th>
                                    <th>KERTERANGAN</th>
                                </tr>
                                
                                @foreach ($kapal_sewa as $item)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->nama_kapal}}</td>
                                    <td>{{$item->owner}}</td>
                                    <td>{{$item->penanggung_jawab}}</td>
                                    <td>{{$item->customer}}</td>
                                    <td>{{$item->no_izin}}</td>
                                    <td>{{$item->nama_file}}</td>
                                    <td>{{$item->keberangkatan}} - {{$item->tujuan}}</td>
                                    <td>{{Carbon\Carbon::parse($item->tgl_berangkat)->format("d M Y")}} - {{Carbon\Carbon::parse($item->tgl_datang)->format("d M Y")}}</td>
                                    <td>{{$item->harga_sewa_owner}}</td>
                                    <td>{{$item->harga_sewa_customer}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
</div>
    </body>
</html>
