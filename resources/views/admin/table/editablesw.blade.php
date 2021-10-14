@extends('layouts.app')
@section('title','Édit Kapal Sewa')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb float-left" >
                                <li class="breadcrumb-item"><a href="index-km.html">Daftar Kapal Sewaan</a></li>
                                <li class="breadcrumb-item active"><b>Tambah Unit</b></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="col-md-12">
                  <form action="{{route('updatetable.sw')}}" method="POST">
                    @csrf   
                    <input type="hidden" name="id" value="{{$kapal_sewa->id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputUnit">
                                <input type="text" name="unit" class="form-Input" value="{{$kapal_sewa->unit}}" required>
                            </div>
                            <div class="inputUnit">
                                <input type="text" name="nama_kapal" class="form-Input" value="{{$kapal_sewa->nama_kapal}}" required>
                            </div>
                            <div class="inputUnit">
                                <input type="text" name="owner" class="form-Input" value="{{$kapal_sewa->owner}}" required>
                            </div>
                            <!-- <div class="inputUnit">
                                <div class="row">
                                    <button type="menu" class="btn plusSa" data-toggle="modal" data-target="#UploadFile">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <p class="textIcon">Upload Sertifikat</p>
                                </div>
                            </div> -->
                            <div class="inputUnit">
                                <input type="text" name="penanggung_jawab" class="form-Input" value="{{$kapal_sewa->penanggung_jawab}}" required>
                            </div>
                            <div class="inputUnit">
                                <input type="text" name="kru_karyawan" class="form-Input" value="{{$kapal_sewa->kru_karyawan}}" required>
                            </div>
                            <div class="inputUnit">
                                <input type="text" name="no_sertifikat" class="form-Input" value="{{$kapal_sewa->no_sertifikat}}" required> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputUnit">
                                <input type="text" name="keberangkatan" class="form-Input" value="{{$kapal_sewa->keberangkatan}}" required>
                            </div>
                            <div class="inputUnit">
                                <input type="text" name="tujuan" class="form-Input" value="{{$kapal_sewa->tujuan}}" required>
                            </div>
                            <div class="inputUnit">
                                <label>Tanggal Berangkat</label>
                                <input type="date" name="tgl_berangkat" class="form-Input" value="{{$kapal_sewa->tgl_berangkat}}">
                            </div>
                            <div class="inputUnit">
                                <label>Tanggal Kedatangan</label>
                                <input type="date" name="tgl_datang" class="form-Input" value="{{$kapal_sewa->tgl_datang}}">
                            </div>
                            <center>
                                <button type="submit" class="btn btn-secondary btnSubmitUnit" data-toggle="modal" data-target="uploadFile"><a>Update</a></button>
                            </center>
                        </div>
                    </div>
                  </form>
                    <!----Modal Upload File-->
                    <!-- <div class="modal show" id="UploadFile" role="dialog">
                        <div class="modal-dialog" id="modalTemp"> -->

                            <!---Content model-->
                            <!-- <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload File</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="row">
                                    <div class="col-md-6"> -->
                                        <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
                                            <input type="file" name="fileToUpload" id="fileToUpload"
                                                class="uploadFile">
                                                <i class="fas fa-plus icon-plus"></i>
                                            <input type="submit" value="upload Image" name="submit">
                                        </form> -->
                                        <!-- <div class="upload-btn-info">
                                            <button class="btn-upload-text"><i class="fas fa-plus"></i></button>
                                            <input type="file" name="myfile"/>
                                            <p class="text-upload-file">Unggah File</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="name" class="form-Input input-Form" placeholder="Nama File">
                                        <input type="name" class="form-Input input-Form" placeholder="No Periijinan">
                                        <input type="name" class="form-Input input-Form" placeholder="Tanggal terbit file">
                                        <input type="name" class="form-Input input-Form" placeholder="Tanggal berakhir file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btnroot" type="button" id="addFile">Simpan</button>
                                        <button class="btn btnroot" type="button" id="addFile" style="margin-right: 1em;" >Tambah File</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
