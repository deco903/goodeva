@extends('layouts.app2')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1><b><u>Daftar Kapal Sewa</u></b></h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
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
                           
                            <button type="button" class="btn  btnUnit"><a href="{{route('table.sw')}}">Tambah Unit Kapal</a></button>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="col-lg-12">
                @include('admin.notif.success')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table header-border table-responsive-sm" style="color: black;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kapal</th>
                                        <th>Owner</th>
                                        <th>Penanggung Jawab</th>
                                        <th>No Sertifikat</th>
                                        <th>Destinasi</th>
                                        <th>Tanggal Penyewaan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $no=1; ?>
                                @foreach($kapal_sewa as $res=>$key)
                                <tbody>
                                    <tr>
                                        <td>{{$res + $kapal_sewa->firstitem()}}</td>
                                        <td>{{$key->unit}}</td>
                                        <td>{{$key->nama_kapal}}</td>
                                        <td>{{$key->owner}}</td>
                                        <td>{{$key->penanggung_jawab}}</td>
                                        <td>{{$key->kru_karyawan}}</td>
                                        <td>{{$key->no_sertifikat}}</td>
                                        <td>{{$key->keberangkatan}}</td>
                                        <td>{{$key->tujuan}}</td>
                                        <td>{{$key->tgl_berangkat}}</td>
                                        <td>
                                            <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                            <a href="/table_sw/edit/{{$key->id}}"><button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button></a>
                                            <a href="/table_sw/hapus/{{$key->id}}"><button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button></a>
                                        </td>
                                    </tr>
                                    </tr>
                                </tbody>
                                <?php $no += 1; ?>
                                @endforeach
                            </table>
                            {{$kapal_sewa->links()}}
                        </div>
                    </div>
                </div>
                            
                    <!-- /# column -->
            </section>
        </div>
    </div>
</div>
@endsection