@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Data Kapal Pribadi</h4>
                    </div>
                </div>
                
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                                <form action="{{route('carikm')}}" method="GET">   
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
                            <button type="button" class="btn btnUnit"><a href="{{ url ('page_km/table_km') }}">Tambah Unit Kapal</a></button>
                            @elseif ( auth()->user()->level == '2')
                            <button type="button" class="btn btnUnit"><a href="{{ url ('page_km/table_km') }}">Tambah Unit Kapal</a></button>
                            @else
                            @endif
                            <div class="row">
                              <a href="{{ url ('kapalpribadiexport') }}" class="btn btn-success">Export</a>
                              <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                Import
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                   
                                        <div class="modal-body">
                                        <form  method="POST" action="{{ url ('kapalpribadiimport') }}" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <input type="file" name="file" required="required">
                                            </div>
                                            <input type="submit" value="Submit">
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Selesai</button>
                                            
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                                
                                </div>
                               
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive-xl">
                        @if(Session::has('success'))
                            <div class='alert alerts success' role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA KAPAL</th>
                                    <th>KRU KAPAL</th>
                                    <th>NO SERTIFIKAT</th>
                                    <th>NAMA SERTIFIKAT</th>
                                    <th>NAMA PENYEWA</th>
                                    <th>DESTINASI</th>
                                    <th>MULAI SEWA</th>
                                    <th>SELESAI SEWA</th>
                                    <th>CUSTOMER</th>
                                        @if ( auth()->user()->level == '1')
                                    <th>HARGA SEWA KE CUSTOMER</th>
                                        @elseif ( auth()->user()->level == '0')
                                    <th>HARGA SEWA KE CUSTOMER</th>
                                        @else    
                                        @endif
                                    
                                    <th>KETERANGAN</th>
                                        @if( auth()->user()->level == '1')
                                    <th>Action</th>
                                        @elseif( auth()->user()->level == '2')
                                    <th>Action</th>
                                        @else
                                        @endif
                                    <th>Status</th>
                                </tr>

                            </thead>
                            <tbody>
                            @if($pribadi->count() > 0)
                            @foreach ($pribadi as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_kapal }}</td>
                                        <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                            <td class="test">
                                             @php
                                              $kru = explode('-', $item->nama_kru);
                                              echo $kru[0];
                                             @endphp
                                                <!-- <a>Lihat Kru</a> -->
                                                <ul class="divs">
                                                @foreach(explode('-', $item->nama_kru) as $row)
                                                <li>{{ $row }}</li>
                                                <br/>
                                                @endforeach
                                                </ul>
                                            </td>
                                        </span>
                                    <td>
                                    <button class="btn btn-light dropdown-toggle" style="border:0px solid black; background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>Lihat No Sertifikat</p>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @foreach($item->gambar as $row)
                                            <a class="dropdown-item" href="#">{{ $row->no_izin }}<br></a>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>
                                    <button class="btn btn-light dropdown-toggle" style="border:0px solid black; background-color: transparent;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                                    <p class="badge-notif">Lihat Nama Sertifikat<span class="sec counter counter-lg dot"></span></p>
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
                                    <td>{{ $item->nama_penyewa }}</td>
                                    <td>{{ $item->keberangkatan}} - {{ $item->tujuan}}</td>
                                    <td>{{Carbon\Carbon::parse($item->mulai_sewa)->format("d M Y")}}</td>
                                    <td>{{Carbon\Carbon::parse($item->sewa_selesai)->format("d M Y")}}</td>
                                    <td>{{ $item->customer }}</td>
                                        @if ( auth()->user()->level == '1')
                                    <td>{{ $item->harga_sewa_customer }}</td>
                                        @elseif ( auth()->user()->level == '0')
                                    <td>{{ $item->harga_sewa_customer }}</td>
                                        @else
                                        @endif
                                    <td>{{ $item->keterangan }}</td>
                                        @if( auth()->user()->level == '1')
                                    <td>
                                    <a href="/show_km/{{$item->id}}" class='fas fa-file mr-2'><span data-feather="show"></span></a>
                                    <a href="page_km/table_km/edit/{{$item->id}}" class='fas fa-edit mr-1'><span data-feather="edit"></span></a>
                                    <form action='/table_km/hapus/{{ $item->id }}' method='post' class='d-inline'>
                                        @method('DELETE')    
                                        @csrf
                                        <button class='fas fa-trash border-0' onclick="return confirm('Benar ingin Hapus?')"><span data-feather="x-circle"></span></button>
                                    </form>
                                    </td>
                                        @elseif( auth()->user()->level == '2')
                                    <td>
                                    <a href="/show_km/{{$item->id}}" class='fas fa-file mr-2'><span data-feather="show"></span></a>
                                    <a href="page_km/table_km/edit/{{$item->id}}" class='fas fa-edit mr-1'><span data-feather="edit"></span></a>
                                    <form action='/table_km/hapus/{{ $item->id }}' method='post' class='d-inline'>
                                            @method('DELETE')    
                                            @csrf
                                        <button class='fas fa-trash border-0' onclick="return confirm('Benar ingin Hapus?')"><span data-feather="x-circle"></span></button>
                                    </form>
                                    </td>
                                        @else
                                        @endif
                                        
                                    <text>{{$tgl1 = Carbon\Carbon::parse(Carbon\Carbon::today())>Carbon\Carbon::parse($item->sewa_selesai)}}
                                    {{$tgl2 = Carbon\Carbon::parse($item->mulai_sewa)->diffInDays($item->sewa_selesai)}}</text>
                                        @if($tgl1 == 1)
                                    <td><span class="badge badge-success">D o n e</span></td>
                                        @if($tgl2 == 0)
                                            @else
                                            @endif
                                        @else
                                    <td><span class="badge badge-primary">P e r j a l a n a n</span></td>    
                                        @endif
                                    
                                </tr>
                                @endforeach
                            @else
                            <tr>
                            <td colspan="10"><center>Data Masih Kosong</center></td>
                            </tr> 
                            @endif
                            </tbody>
                        </table>
                        {{$pribadi->links()}}
                    </div>
                </div>

                <!---Modal-->
                <div class="modal fade" id="editApps" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Edit Data Kapal Pribadi</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Nama Kapal</label>
                                                        <input type="text" class="form-control" placeholder="Nama Barang" value="#">
                                                    </div>
                                                    <div class="col">
                                                        <label>Nama Kru</label>
                                                        <select multiple class="chosen-select form-control" tabindex="22" id="multiple-label-example">
                                                            <option value=""></option>
                                                            <option>Bambang</option>
                                                            <option>Jame</option>
                                                            <option>Luniar</option>
                                                            <option selected>Giant</option>
                                                            <option>neekade</option>
                                                            <option>Sun</option>
                                                            <option>Polar </option>
                                                            <option>Spectacled</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Nama Penyewa</label>
                                                        <input type="text" class="form-control" placeholder="Nama Barang">
                                                    </div>
                                                    <div class="col">
                                                        <label>Keberangkatan</label>
                                                        <select id="inputState" class="form-control">
                                                            <option selected>Choose...</option>
                                                            <option>Jakarta</option>
                                                            <option>Bandung</option>
                                                            <option>Madura</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <label>Destinasi Tujuan</label>
                                                            <select id="inputState" class="form-control">
                                                                <option selected>Choose...</option>
                                                                <option>Jakarta</option>
                                                                <option>Bandung</option>
                                                                <option>Madura</option>
                                                            </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <div class="row">
                                                    <div class="col">
                                                        <label>Mulai Sewa</label>
                                                        <div class="dateMounth">
                                                            <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm" />
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label>Sewa Selesai</label>
                                                        <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="basic-form col-md-12">
                                                <form>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="4" id="comment" placeholder="Note"></textarea>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="from-group col-md-6">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <button type="submit" class="btn btn-default" style="background-color: #55B0DC; color: #fff;">Save</button>
                                                    </div>
                                                    <div class="col-3">
                                                        <button class="btn btn-danger" onclick="closeModal()">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
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
@endsection