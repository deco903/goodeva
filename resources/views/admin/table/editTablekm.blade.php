@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em;">
                        <h4>Edit Kapal Pribadi</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                     <form action="" method="POST" >
                       @csrf
                       <input type="hidden" name="id" value="{{$pribadi->id}}">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" value="{{$pribadi->nama_kapal}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control">
                                        <option value="">{{$pribadi->keberangkatan}}</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="madura">Madura</option>
                                        <option value="surabaya">Surabaya</option>
                                        <option value="malang">Malang</option>
                                        <option value="bali">Bali</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kru Kapal</label>
                                    <input type="text" name="kru_kapal" class="form-control" value="{{$pribadi->kru_kapal}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control">
                                        <option value="">{{$pribadi->tujuan}}</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="madura">Madura</option>
                                        <option value="surabaya">Surabaya</option>
                                        <option value="malang">Malang</option>
                                        <option value="bali">Bali</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Penyewa</label>
                                    <input type="text" name="nama_penyewa" class="form-control" value="{{$pribadi->nama_penyewa}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Keberangkatan</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_keberangkatan" id="dateofbirth" class="dateTerm" value="{{$pribadi->tgl_keberangkatan}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>No. Sertifikat</label>
                                    <input type="text" name="sertifikat" class="form-control" value="{{$pribadi->sertifikat}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Tiba</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_tiba" id="dateofbirth" class="dateTerm" value="{{$pribadi->tgl_tiba}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <a type="menu" class="btn plusSa" data-toggle="modal" data-target="#UploadFile">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <p class="textIcon">Upload File</p>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="keterangan" rows="4" id="comment" placeholder="Note">{{$pribadi->}}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                 
                        <!----Modal Upload File-->
                        <div class="modal show" id="UploadFile" role="dialog">
                        <div class="modal-dialog" id="modalTemp">

                            <!--Content model-->
                            <div class="modal-content">
                              <form action="" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload File</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="upload-btn-info">
                                            <button class="btn-upload-text"><i class="fas fa-plus"></i></button>
                                            <input type="file" name="photo"/>
                                            <p class="text-upload-file">Unggah File</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 35px;">
                                        <input type="text" name="nama_file" class="form-control inputText" placeholder="Nama File">
                                        <input type="text" name="no_izin" class="form-control inputText" placeholder="Nomor Perizinan">
                                        <input type="text" name="tgl_terbitfile" class="form-control inputText" placeholder="Nama Tanggal Terbit File">
                                        <input type="text" name="tgl_berakhirfile" class="form-control inputText" placeholder="Nama Tanggal Berakhir File">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btnroot" type="submit" id="addFile">Simpan</button>
                                        <button class="btn btnroot" type="button" id="addFile" style="margin-right: 1em;" >Tambah File</button>
                                    </div>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection