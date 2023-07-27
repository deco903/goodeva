@extends('layouts.app')
@section('content')

<div class="content-body">
    <div class="container-fluid">
            <div class="row">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text" style="margin-bottom: 2em">
                            <h4>Edit Data vendor Kapal</h4>
                        </div>
                    </div>

                    @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="/page/vendor/update/{{ $ven->id }}" method="POST" enctype="multipart/form-data">
                       @csrf    
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                    <img class="ml-3 mr-3"src="{{asset('image-vendor/'.$ven->image)}}" alt="" style="width: 70px;">
                                        <form action="/action_page.php" style="margin-left: 2em">
                                            <input type="file" id="myFile" name="image" value="{{$ven->image}}"/>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Phone</label>
                                            <input type="text" id="phone" name="phone" class="form-control" placeholder="+62" value="{{$ven->phone}}" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Mobile</label>
                                            <input type="text" id="mobile" name="mobile" class="form-control" placeholder="+62" value="{{$ven->mobile}}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Perusahaan </label>
                                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" value="{{$ven->nama_perusahaan}}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="email" value="{{$ven->email}}"  />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama PIC</label>
                                    <input type="nama_pic" id="nama_pic" name="nama_pic" class="form-control" placeholder="Nama Pimpinan" value="{{$ven->nama_pic}}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Website</label>
                                    <input type="text" id="website" name="website" class="form-control" placeholder="www." value="{{$ven->website}}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jabatan</label>
                                    <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan" value="{{$ven->jabatan}}" />
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <input type="text" id="provinsi" name="provinsi" class="form-control" placeholder="Provinsi" value="{{$ven->provinsi}}" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kota</label>
                                            <input type="text" id="kota" name="kota" class="form-control" placeholder="Kota" value="{{$ven->kota}}" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <input type="text" id="kecamatan" name="kecamatan" class="form-control" placeholder="Kecamatan" value="{{$ven->kecamatan}}" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kelurahan</label>
                                            <input type="text" id="kelurahan" name="kelurahan" class="form-control" placeholder="Kelurahan" value="{{$ven->kelurahan}}" />
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>RT</label>
                                            <input type="number" name="rt" class="form-control" placeholder="" value="{{$ven->rt}}" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>RW</label>
                                            <input type="number" name="rw" class="form-control" placeholder="" value="{{$ven->rw}}" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat_lengkap" class="form-control" placeholder="Alamat Lengkap"  value="{{$ven->alamat_lengkap}}" />
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