@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Daftar Vendor</h4>
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
                            <button type="button" class="btn btnUnit"><a href="{{ url('page.sw/vendor/table_vendor') }}">Tambah</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm" style="color: black;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Nama Vendor</th>
                                    <th>Nama PIC</th>
                                    <th>Alamat</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #E8E8E8;">
                                    <td>#</td>
                                    <td class="img_Logo"><img src="{{ asset('assets/images/Lorem.png') }}" class="imgLogo"></td>
                                    <td>PT. Garuda Raya</td>
                                    <td>Bpk. Bambang</td>
                                    <td>Jl. Simatupang Blok A <br> Jakarta Indonesia</td>
                                    <td> +62 812 852 365</td>
                                    <td>+62 21 217 256</td>
                                    <td>Bambang@garuda.com</td>
                                    <td>www.garudaraya.com</td>
                                    <td>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#</td>
                                    <td class="img_Logo"><img src="{{ asset('assets/images/Lorem.png') }}" class="imgLogo"></td>
                                    <td>PT. Garuda Raya</td>
                                    <td>Bpk. Bambang</td>
                                    <td>Jl. Simatupang Blok A <br> Jakarta Indonesia</td>
                                    <td> +62 812 852 365</td>
                                    <td>+62 21 217 256</td>
                                    <td>Bambang@garuda.com</td>
                                    <td>www.garudaraya.com</td>
                                    <td>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr style="background-color: #E8E8E8;">
                                    <td>#</td>
                                    <td class="img_Logo"><img src="{{ asset('assets/images/Lorem.png') }}" class="imgLogo"></td>
                                    <td>PT. Garuda Raya</td>
                                    <td>Bpk. Bambang</td>
                                    <td>Jl. Simatupang Blok A <br> Jakarta Indonesia</td>
                                    <td> +62 812 852 365</td>
                                    <td>+62 21 217 256</td>
                                    <td>Bambang@garuda.com</td>
                                    <td>www.garudaraya.com</td>
                                    <td>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#</td>
                                    <td class="img_Logo"><img src="{{ asset('assets/images/Lorem.png') }}" class="imgLogo"></td>
                                    <td>PT. Garuda Raya</td>
                                    <td>Bpk. Bambang</td>
                                    <td>Jl. Simatupang Blok A <br> Jakarta Indonesia</td>
                                    <td> +62 812 852 365</td>
                                    <td>+62 21 217 256</td>
                                    <td>Bambang@garuda.com</td>
                                    <td>www.garudaraya.com</td>
                                    <td>
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