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
                            <li class="breadcrumb-item active"><b>Invoice Kapal Sewa</b></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section style="width: 100%;">
            <div class="accountTerm">
                <button class="btnTerm" type="submit" data-toggle="modal" data-target="#uploadQuo"><a href="#">Upload Invoice</a></button>

                <div class="tableTerm">
                    <div class="table-responsive">
                        <table class="table header-border table-responsive-sm" style="color: black;">
                            <thead>
                                <tr>
                                    <th>
                                        <input class="checkFolder" type="checkbox" id="vehicle">
                                    </th>
                                    <th>No Invoice</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Nama Prusahaan Penyewa</th>
                                    <th>Tanggal Kontrak</th>
                                    <th>Nilai Jual</th>
                                    <th>Destinasi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input class="checkFolder" type="checkbox" id="vehicle">
                                    </td>
                                    <td><a href="">LIP/Inv/020221/001</a></td>
                                    <td>PT. Lorem Ipsum</td>
                                    <td>PT. Maur Lorem</td>
                                    <td>02 Juni 2021</td>
                                    <td> Rp. 12.000.000</td>
                                    <td> Jkt - Sby </td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="checkFolder" type="checkbox" id="vehicle">
                                    </td>
                                    <td><a href="">LIP/Inv/020221/001</a></td>
                                    <td>PT. Lorem Ipsum</td>
                                    <td>PT. Maur Lorem</td>
                                    <td>02 Juni 2021</td>
                                    <td> Rp. 12.000.000</td>
                                    <td> Jkt - Sby </td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="checkFolder" type="checkbox" id="vehicle">
                                    </td>
                                    <td><a href="">LIP/Inv/020221/001</a></td>
                                    <td>PT. Lorem Ipsum</td>
                                    <td>PT. Maur Lorem</td>
                                    <td>02 Juni 2021</td>
                                    <td> Rp. 12.000.000</td>
                                    <td> Jkt - Sby </td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" type="button"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input class="checkFolder" type="checkbox" id="vehicle">
                                    </td>
                                    <td><a href="">LIP/Inv/020221/001</a></td>
                                    <td>PT. Lorem Ipsum</td>
                                    <td>PT. Maur Lorem</td>
                                    <td>02 Juni 2021</td>
                                    <td> Rp. 12.000.000</td>
                                    <td> Jkt - Sby </td>
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
            <!----Modal Upload File-->
            <div class="modal show" id="uploadQuo" role="dialog">
                <div class="modal-dialog" id="modalTemp">

                    <!---Content model-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Upload File</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="upload-btn-info">
                                    <button class="btn-upload-text"><i class="fas fa-plus"></i></button>
                                    <input type="file" name="myfile"/>
                                    <p class="text-upload-file">Unggah File</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tableModal">
                                    <input type="name" class="formTerm" placeholder="No Invoice">
                                    <input type="name" class="formTerm" placeholder="Nama Perusahaan">
                                    <input type="name" class="formTerm" placeholder="Kontrak">
                                    <input type="name" class="formTerm" placeholder="Berakhir">
                                    <input type="name" class="formTerm" placeholder="Nilai Kontrak">
                                    <input type="name" class="formTerm" placeholder="Nilai Jual">
                                    <input type="name" class="formTerm" placeholder="Destinasi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btnroot" type="button" id="addFile">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

@endsection