@extends('layouts.app')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1><b><u>Daftar Kapal Pribadi</u></b></h1>
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
                            <button type="button" class="btn  btnUnit"><a href="{{route('table.km')}}">Tambah Unit Kapal</a></button>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
        <section id="main-content">
            <div class="col-lg-12">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm" style="color: black;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kapal</th>
                                    <th>Kru Kapal</th>
                                    <th>Nama Penyewa</th>
                                    <th>No Sertifikat</th>
                                    <th>Destinasi</th>
                                    <th>Tanggal Keberangkatan</th>
                                    <th>Tanggal Tiba</th>
                                    <th>Nilai Kontrak</th>
                                    <th></th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)">SPN/090221/001</a>
                                    </td>
                                    <td>SPN 002</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                            Bpk. Joko <br>
                                            Bpk. Satria <br>
                                            Bpk. Michael <br>
                                        </td>
                                    </span>
                                    <td>PT. ABC</td>
                                    <td>DWT: 1500,
                                        YOB: 1992
                                    </td>
                                    <td>Medan -
                                        Jakarta
                                    </td>
                                    <td> 12 Maret 2021 </td>
                                    <td></td>
                                    <td>Rp. 12.000.000</td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                    <td><button class="btn" type="" style="background-color: #DCEEF7; color: white;">Done</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                            
                    <!-- /# column -->
            </section>
        </div>
    </div>
</div>
@endsection