@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Data Vendor</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="button" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                            @if( auth()->user()->level == '1')
                            <button type="button" class="btn btnUnit mb-3"><a href="{{ url ('/page.sw/vendor/table_vendor') }}">Tambah Data Vendor</a></button>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                
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
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Nama Perusahaan</th>
                                    <th>email</th>
                                    <th>Nama PIC</th></th>
                                    <th>Website</th>
                                    <th>Jabartan</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>Kecamatan</th>
                                    <th>Kelurahan</th>
                                    <th>rt</th>
                                    <th>rw</th>
                                    <th>Alamat Lengkap</th>
                                    @if( auth()->user()->level == '1')
                                    <th>Action</th>
                                    @else
                                    @endif
                                </tr>
                                
                                @foreach ($vendor as $item)
                                <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{asset('image-vendor/'.$item->image)}}" alt="" style="width: 40px;">
                                    </td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->mobile}}</td>
                                    <td>{{$item->nama_perusahaan}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->nama_pic}}</td>
                                    <td>{{$item->website}}</td>
                                    <td>{{$item->jabatan}}</td>
                                    <td>{{$item->provinsi}}</td>
                                    <td>{{$item->kota}}</td>
                                    <td>{{$item->kecamatan}}</td>
                                    <td>{{$item->kelurahan}}</td>
                                    <td>{{$item->rt}}</td>
                                    <td>{{$item->rw}}</td>
                                    <td>{{$item->alamat_lengkap}}</td>
                                    @if( auth()->user()->level == '1')
                                    <td>
                                    <a href="/page_sw/vendor_edit/{{ $item->id }}" class='fas fa-edit mr-2'><span data-feather="edit"></span></a>
                                        <form action='/page_sw/vendor/{{ $item->id }}' method='post' class='d-inline'>
                                            @csrf
                                            @method('DELETE')
                                            <button class='fas fa-trash border-0' onclick="return confirm('hapus?')"><span data-feather="x-circle"></span></button>
                                        </form>
                                    </td>
                                    @else
                                    @endif
                                </tr>
                                @endforeach
                            </thead>
                            </tbody>
                        </table>
                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection