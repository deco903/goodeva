@extends('layouts.app')
@section('content')

<div class="content-body">
    <div class="container-fluid">
            <div class="row">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text" style="margin-bottom: 2em">
                            <h4>Tambah Data vendor Kapal</h4>
                        </div>
                    </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <button type="menu" class="btn came">
                                            <i class="fas fa-camera"></i>
                                        </button>
                                        <form action="/action_page.php" style="margin-left: 2em">
                                            <input type="file" id="myFile" name="filename" />
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="number" class="form-control" placeholder="+62" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile</label>
                                            <input type="number" class="form-control" placeholder="+62" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Perusahaan </label>
                                    <input type="name" class="form-control" placeholder="Nama Perusahaan" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="email" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama PIC</label>
                                    <input type="name" class="form-control" placeholder="Nama Pimpinan" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Website</label>
                                    <input type="url" class="form-control" placeholder="www." />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jabatan</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>Direktur</option>
                                        <option>Manager</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Jawa Barat</option>
                                                <option>Jawa Tengah</option>
                                                <option>Jawa Timur</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kota</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Depok</option>
                                                <option>DKI Jakarta</option>
                                                <option>Yogyakarta</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Limo</option>
                                                <option>Jagakarsa</option>
                                                <option>Pasar Minggu</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kelurahan</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>Krukut</option>
                                                <option>Gandul</option>
                                                <option>Cilandak</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>RT</label>
                                            <input type="number" class="form-control" placeholder="" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>RW</label>
                                            <input type="number" class="form-control" placeholder="" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="address" class="form-control" placeholder="Alamat Lengkap" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
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
                                            <button class="btn-upload-text">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                            <input type="file" name="myfile" />
                                            <p class="text-upload-file">Unggah File</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 35px">
                                        <input type="name" class="form-control inputText" placeholder="Nama File" />
                                        <input type="name" class="form-control inputText" placeholder="Nama Perizinan" />
                                        <input type="name" class="form-control inputText" placeholder="Nama Tanggal Terbit File" />
                                        <input type="name" class="form-control inputText" placeholder="Nama Tanggal Berakhir File" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btnroot" type="button" id="addFile">Simpan</button>
                                        <button class="btn btnroot" type="button" id="addFile" style="margin-right: 1em">Tambah File</button>
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