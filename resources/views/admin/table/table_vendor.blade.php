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

                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="/page/vendor/store" method="POST" enctype="multipart/form-data">
                       @csrf    
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <img class="ml-3" id="preview" src="#" alt="" style="width:100px;height:96px;margin-left:-16px;margin-right:10px;"/> 

                                        <form action="/action_page.php" style="margin-left: 2em">
                                            <input type="file" id="myFile" name="image" />
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="+62" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile</label>
                                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="+62" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Perusahaan </label>
                                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan"required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="email" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama PIC</label>
                                    <input type="nama_pic" id="nama_pic" name="nama_pic" class="form-control" placeholder="Nama Pimpinan" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Website</label>
                                    <input type="text" id="website" name="website" class="form-control" placeholder="www." required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jabatan</label>
                                    <select id="jabatan" name="jabatan" class="form-control" required>
                                        <option selected>Pilih...</option>
                                        <option>Direktur</option>
                                        <option>Manager</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <select id="provinsi" name="provinsi" class="form-control" required>
                                                <option selected>Jawa Barat</option>
                                                <option>Jawa Tengah</option>
                                                <option>Jawa Timur</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kota</label>
                                            <select id="kota" name="kota" class="form-control" required>
                                                <option selected>Depok</option>
                                                <option>DKI Jakarta</option>
                                                <option>Yogyakarta</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <select id="kecamatan" name="kecamatan" class="form-control" required>
                                                <option selected>Limo</option>
                                                <option>Jagakarsa</option>
                                                <option>Pasar Minggu</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kelurahan</label>
                                            <select id="kelurahan" name="kelurahan" class="form-control" required>
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
                                            <input type="number" name="rt" class="form-control" placeholder="" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>RW</label>
                                            <input type="number" name="rw" class="form-control" placeholder="" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="/page_sw/vendor" class="btn btn-primary ">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
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
@push('script')
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#myFile").change(function() {
    readURL(this);
});
</script>
@endpush