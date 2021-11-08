@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em;" >
                        <h4>Data Kapal Sewa</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>No</label>
                                    <input type="number" class="form-control" placeholder="No">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="name" class="form-control" placeholder="Nama Kapal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Owner</label>
                                    <input type="name" class="form-control" placeholder="Owner">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Keberangkatan</label>
                                    <div class="dateMounth">
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Penanggu Jawab</label>
                                    <input type="name" class="form-control" placeholder="Penanggung Jawab">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Tiba</label>
                                    <div class="dateMounth">
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <button type="menu" class="btn plusSa" data-toggle="modal" data-target="#UploadFile">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                        <p class="textIcon">Upload File</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Note"></textarea>
                                </div>
                                <div class="from-group">
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-default" style="background-color: #55B0DC; color: #fff;">Save</button>
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-danger">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!----Modal Upload File-->
                    <div class="modal show" id="UploadFile" role="dialog">
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
                                    <div class="col-md-6" style="padding-right: 35px;">
                                        <input type="name" class="form-control inputText" placeholder="Nama File">
                                        <input type="name" class="form-control inputText" placeholder="Nama Sertifikat">
                                        <div class="dateMounth" style="margin-top: 1em; margin-bottom: 1em;">
                                            <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm">
                                        </div>
                                        <div class="dateMounth" style="margin-top: 1em; margin-bottom: 1em;">
                                            <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm">
                                        </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection