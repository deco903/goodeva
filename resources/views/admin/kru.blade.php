@extends('layouts.template')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Data Kru Kapal</h4>
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
                            <button type="button" class="btn btnUnit"><a href="{{ route ('tablekru') }}">Tambah Kru Kapal</a></button>
                            @else
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @include('admin.notif.successkru')
                        <table class="table header-border table-responsive-sm" style="color: black;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Foto Profile</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                    <th>Alamat</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>No Sertifikat</th>
                                    <th>Nama Sertifikat</th>
                                    <th>Bergabung Sejak</th>
                                </tr>
                            </thead>
                            <?php $no=1; ?>
                            @if($kru->count() > 0)
                              @foreach($kru as $kru_data=>$res)
                                <tbody>
                                    <tr>
                                        <td>{{$kru_data + $kru->firstitem()}}</td>
                                        <td>
                                            <img src="{{ url('uploads/img_kru/'.$res->photo) }}"  width="50px;">
                                        </td>
                                        <td>{{$res->nama}}</td>
                                        <td>{{$res->status}}</td>
                                        <td>{{$res->alamat}} <br> {{$res->kecamatan}}</td>
                                        <td>{{$res->phone}}</td>
                                        <td>{{$res->email}}</td>
                                        <td>{{$res->no_sertifikat}}</td>
                                        <td>{{$res->nama_sertifikat}}</td>
                                        <td>{{date('d-M-y', strtotime($res->tgl_gabung))}}</td>
                                    </tr>
                                </tbody>
                               @endforeach
                             @else
                             <tr>
                               <td colspan="10"><center>Data Masih Kosong</center></td>
                             </tr> 
                            @endif
                        </table>
                        {{$kru->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection