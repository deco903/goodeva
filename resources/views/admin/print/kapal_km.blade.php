<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  font-size: 7px;
  width: 50%;
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
<h1>Tabel Cetak Kapal Pribadi</h1>
<div class="table-responsive">
                        <table id="customers">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kapal</th>
                                    <th>Kru Kapal</th>
                                    <th>No Sertifikat</th>
                                    <th>Nama Sertifikat</th>
                                    <th>Nama Penyewa</th>
                                    <th>Destinasi</th>
                                    <th>Tanggal Penyewaan</th>
                                    <th>Keterangan</th>
                                </tr>
                                
                                @foreach ($pribadi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->nama_kapal}}</td>
                                    <td>{{$item->nama_kru}}</td>
                                    <td>{{$item->no}}</td>
                                    <td>{{$item->nama_sertifikat}}</td>
                                    <td>{{$item->nama_penyewa}}</td>
                                    <td>{{$item->keberangkatan}} - {{$item->tujuan}}</td>
                                    <td>{{Carbon\Carbon::parse($item->mulai_sewa)->format("d M Y")}} - {{Carbon\Carbon::parse($item->sewa_selesai)->format("d M Y")}}</td>
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
