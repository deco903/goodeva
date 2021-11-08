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
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="button" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                            <button type="button" class="btn btnUnit"><a href="{{ url('page_km/table_km')}}">Tambah Unit Kapal</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Kapal</th>
                                    <th>Kru Kapal</th>
                                    <th>No Sertifikat</th>
                                    <th>Nama Sertifikat</th>
                                    <th>Nama Penyewa</th>
                                    <th>Destinasi</th>
                                    <th>Mulai Sewa</th>
                                    <th>Selesai Sewa</th>
                                    <th>Keterangan</th>
                                    <th></th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @foreach($pribadi as $res=>$key)
                                <tr>
                                    <td>
                                      <a href="">{{$loop->iteration}}</a>
                                    </td>
                                    <td>{{$key->nama_kapal}}</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                        {{$key->kru_kapal}}
                                        </td>
                                    </span>
                                    <td>{{$key->nama_penyewa}}</td>
                                    <td>{{$key->sertifikat}}</td>
                                    <td>{{$key->keberangkatan}} -
                                             {{$key->tujuan}}
                                    </td>
                                    <td> {{$key->tgl_keberangkatan}}</td>
                                    <td>{{$key->tgl_tiba}}</td>
                                    <td>{{$key->keterangan}}</td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <a href="{{route('editTablekm', $key->id)}}"><i class="fas fa-edit"></i></a>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                    <td><button class="btn" type="" style="background-color: #55B0DC; color: white;">Perjalanan</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection