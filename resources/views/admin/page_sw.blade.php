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
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="button" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                            <button type="button" class="btn btnUnit"><a href="{{ url ('page_sw/table_sw') }}">Tambah Unit Kapal</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kapal</th>
                                    <th>Owner</th>
                                    <th>Penanggung Jawab</th>
                                    <th>Destinasi</th>
                                    <th>Tanggal Penyewaan</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="javascript:void(0)">01</a>
                                    </td>
                                    <td>Grace V, BULK &
                                        LIGHTER</td>
                                    <td>Bahari
                                        Nusantara</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                            Bpk. Joko 
                                        </td>
                                    </span>
                                    <td>Medan -
                                        Jakarta
                                    </td>
                                    <td>
                                        12 Maret 2021 -
                                        12 Mei 2021
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">02</a>
                                    </td>
                                    <td>Grace V, BULK &
                                        LIGHTER</td>
                                    <td>Bahari
                                        Nusantara</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                            Bpk. Joko 
                                        </td>
                                    </span>
                                    <td>Medan -
                                        Jakarta
                                    </td>
                                    <td>
                                        12 Maret 2021 -
                                        12 Mei 2021
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">03</a>
                                    </td>
                                    <td>Grace V, BULK &
                                        LIGHTER</td>
                                    <td>Bahari
                                        Nusantara</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                            Bpk. Joko 
                                        </td>
                                    </span>
                                    <td>Medan -
                                        Jakarta
                                    </td>
                                    <td>
                                        12 Maret 2021 -
                                        12 Mei 2021
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">04</a>
                                    </td>
                                    <td>Grace V, BULK &
                                        LIGHTER</td>
                                    <td>Bahari
                                        Nusantara</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                            Bpk. Joko 
                                        </td>
                                    </span>
                                    <td>Medan -
                                        Jakarta
                                    </td>
                                    <td>
                                        12 Maret 2021 -
                                        12 Mei 2021
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">05</a>
                                    </td>
                                    <td>Grace V, BULK &
                                        LIGHTER</td>
                                    <td>Bahari
                                        Nusantara</td>
                                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                                        <td>
                                            Bpk. Joko 
                                        </td>
                                    </span>
                                    <td>Medan -
                                        Jakarta
                                    </td>
                                    <td>
                                        12 Maret 2021 -
                                        12 Mei 2021
                                    </td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection