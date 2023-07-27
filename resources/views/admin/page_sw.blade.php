@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Data Kapal Sewa</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                        <form action="{{route('carisw')}}" method="GET">   
                            @csrf 
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="button" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" name="nama_kapal" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                        </form>
                        
                            @if( auth()->user()->level == '1')
                            <button type="button" class="btn btnUnit mb-3"><a href="{{ url ('page_sw/table_sw') }}">Tambah Unit Kapal</a></button>                           
                            @elseif ( auth()->user()->level == '2')
                            <button type="button" class="btn btnUnit mb-3"><a href="{{ url ('page_sw/table_sw') }}">Tambah Unit Kapal</a></button>
                            @else
                            
                            @endif
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btnUnit mb-3 ml-5"><a href="{{ url ('/page_sw') }}">Kapal Sewa</a></button>
                <button type="button" class="btn btnUnit mb-3 ml-2"><a href="{{ url ('page_sw/vendor') }}">Vendor</a></button>
                <div class="col-lg-12 justify-content">
                    <div class="table-responsive">
                        @if(Session::has('success'))
                            <div class='alert alerts success' role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <div class="col justify-content-sm-end">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA KAPAL</th>
                                    <th>OWNER</th>
                                    <th>NAMA PIC</th>
                                    <th>CUSTOMER</th>
                                    <th>NO KONTRAK</th>
                                    <th>NAMA KONTRAK</th>
                                    <th>DESTINASI</th>
                                    <th>TANGGAL PENYEWAAN</th>
                                @if ( auth()->user()->level == '1')
                                    <th>HARGA SEWA OWNER</th>
                                    <th>HARGA SEWA CUSTOMER</th>
                                @elseif ( auth()->user()->level == '0')
                                    <th>HARGA SEWA OWNER</th>
                                    <th>HARGA SEWA CUSTOMER</th>
                                @else
                                @endif
                                
                                    <th>KERTERANGAN</th>
                                @if( auth()->user()->level == '1')
                                    <th>Action</th>
                                @elseif( auth()->user()->level == '2')
                                    <th>Action</th>
                                @else
                                @endif
                                </tr>
                                @if($kapal_sewa->count() > 0)
                                @foreach ($kapal_sewa as $item)

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{$item->nama_kapal}}</td>
                                    <td>{{$item->owner}}</td>
                                    <td>{{$item->penanggung_jawab}}</td>
                                    <td>{{$item->customer}}</td>
                                    <td>
                                        <button class="btn btn-light dropdown-toggle" style="border:0px solid black; background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <p>Lihat No Kontrak</p>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @foreach($item->gambar as $row)
                                            <a class="dropdown-item" href="#">{{ $row->no_izin }}<br></a>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>
                                    <button class="btn btn-light dropdown-toggle" style="border:0px solid black; background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <p>Lihat Nama Kontrak</p>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @foreach($item->gambar as $row)
                                            @if(Carbon\Carbon::parse(Carbon\Carbon::today())->between(Carbon\Carbon::parse($row->tgl_berakhirfile)->subWeek(2)->format("d M Y"), Carbon\Carbon::parse($row->tgl_berakhirfile)->format("d M Y")))
                                            <a class="dropdown-item bg-danger" href="#">{{ $row->nama_file }}<br></a>
                                            @else
                                            <a class="dropdown-item" href="#">{{ $row->nama_file }}<br></a>
                                            @endif
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>{{$item->keberangkatan}} - {{$item->tujuan}}</td>
                                    <td>{{Carbon\Carbon::parse($item->tgl_berangkat)->format("d M Y")}} - {{Carbon\Carbon::parse($item->tgl_datang)->format("d M Y")}}</td>
                                @if ( auth()->user()->level == '1')
                                    <td>{{$item->harga_sewa_owner}}</td>
                                    <td>{{$item->harga_sewa_customer}}</td>
                                @elseif ( auth()->user()->level == '0')
                                    <td>{{$item->harga_sewa_owner}}</td>
                                    <td>{{$item->harga_sewa_customer}}</td>
                                @else
                                @endif
                                    <td>{{$item->keterangan}}</td>
                                @if( auth()->user()->level == '1')
                                    <td>
                                    <a href="/show_sw/{{$item->id}}" class='fas fa-file mr-2'><span data-feather="show"></span></a>
                                    
                                    <a href="/table_sw/edit_sw/{{$item->id}}" class='fas fa-edit mr-2'><span data-feather="edit"></span></a>

                                    <form action='/table_sw/hapus/{{ $item->id }}' method='post' class='d-inline'>
                                            @method('DELETE')    
                                            @csrf
                                    <button class='fas fa-trash border-0' onclick="return confirm('Benar ingin Hapus?')"><span data-feather="x-circle"></span></button>
                                    </form>
                                    </td>
                                @elseif( auth()->user()->level == '2')
                                    <td>
                                    <a href="/show_sw/{{$item->id}}" class='fas fa-file mr-2'><span data-feather="show"></span></a>
                                    
                                    <a href="/table_sw/edit_sw/{{$item->id}}" class='fas fa-edit mr-2'><span data-feather="edit"></span></a>

                                    <form action='/table_sw/hapus/{{ $item->id }}' method='post' class='d-inline'>
                                            @method('DELETE')    
                                            @csrf
                                    <button class='fas fa-trash border-0' onclick="return confirm('Benar ingin Hapus?')"><span data-feather="x-circle"></span></button>
                                    </form>
                                    </td>
                                @else
                                @endif
                                </tr>
                                    
                                @endforeach
                        @else
                        <tr>
                        <td colspan="10"><center>Data Masih Kosong</center></td>
                        </tr> 
                        @endif
                            </thead>
                            <tbody>
 
                            </tbody>
                        </table>
                        {{$kapal_sewa->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



 <!---Modal-->
 <div class="modal fade" id="editApps" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Detail Data Kapal Sewa</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                <form action="" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h5>Unit : </h5>
                                   
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Destinasi : }</h5>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Nama Kapal : </h5>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="dateMounth">Tanggal Sewa : </h5>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Owner : </h5>
                                    
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <h5>Penanggu Jawab : </h5>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Kru Karyawan : </h5>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>No Sertifikat : </h5>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 for="image" class="form-label">Sertifikat :</h5><img class="ml-3 mr-3"src="" alt="" style="width: 70px;">
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 for="image" class="form-label">Note : </h5>
                                    
                                </div>

                                    </div>
                                </div>
                        
                                <div class="form-group">
                                    <a href="/page_sw" class="btn btnUnit ">Back</a>
                                    <a href="" class="btn btnUnit mr-3" type="menu">Print Preview</a>
                                  
                                </div>
                                </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
