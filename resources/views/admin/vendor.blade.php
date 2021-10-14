@extends('layouts.app2')
@section('content')

<div class="content-wrap">
    <div class="main">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb float-left" >
                            <li class="breadcrumb-item"><a href="index-km.html">Accounting</a></li>
                            <li class="breadcrumb-item active"><b>Quotation</b></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section style="width: 100%;">
            <div class="accountTerm">
                <div class="titleTerm">
                    <h4>Vendor</h4>
                </div>
                <button class="btnTerm" type="submit" data-toggle="modal" data-target="#uploadQuo"><a href="create-vendor.html">Create</a></button>
                <button class="btnTerm" type="submit" data-toggle="modal" data-target="#uploadQuo"><a href="#">Import</a></button>
                <div class="tableTerm">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm" style="color: black;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th></th>
                                    <th>Nama Vendor</th>
                                    <th>Nama Pimpinan</th>
                                    <th>Alamat</th>
                                    <th>Phone</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Website</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #E8E8E8;">
                                    <td>#</td>
                                    <td class="img_Logo"><img src="{{asset('assets/images/Lorem.png')}}" class="imgLogo"></td>
                                    <td>PT. Garuda Raya</td>
                                    <td>Bpk. Bambang</td>
                                    <td>Jl. Simatupang Blok A <br> Jakarta Indonesia</td>
                                    <td> +62 812 852 365</td>
                                    <td>+62 21 217 256</td>
                                    <td>Bambang@garuda.com</td>
                                    <td>www.garudaraya.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

@endsection