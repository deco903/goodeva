<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
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

<h1>Tabel Cetak SPN</h1>

<table id="customers">
  <tr>
    <th>No</th>  
    <th>Nama Barang</th>
    <th>Satuan</th>
    <th>Stock</th>
    <th>Update Stock</th>
    <th>Total Stock</th>
    <th>Keterangan</th>
    <th>Terakhir Dirubah</th>
  </tr>
  @php 
    $no=1;
  @endphp
  @foreach($cetakspn as $key)
   <tr>
     <td>{{$no++}}</td>
     <td>{{$key->nama_barang}}</td>
     <td>{{$key->unit}}</td>
     <td>{{$key->stock}}</td>
     <td>{{$key->choose}} {{$key->update_stock}}</td>
     <td>{{$key->total_stock}}</td>
     <td>{{$key->text}}</td>
    <td>Admin 1</td>
   </tr>
  @endforeach
</table>

</body>
</html>


