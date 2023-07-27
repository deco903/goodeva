@extends('layouts.app')
@section('title','Table Kru')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em">
                        <h4>Tambah Data Kru Kapal</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                     
                        <div class="card-body">
                        <form action="{{route('storekru')}}" method="POST" enctype="multipart/form-data"> 
                          @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <div class="col-3">
                                            <img id="preview" src="#" alt="" style="width:100px;height:96px;margin-left:-16px;margin-right:10px;"/> 
                                        </div>
                                        <div class="col-3">
                                            <input type="file" id="myFile" name="photo" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="No" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama</label>
                                    <input type="nama" name="nama" class="form-control" placeholder="Nama" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="email" required/>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="dateMounth">
                                                <input type="date" name="tgl_lahir" id="dateofbirth" class="dateTerm" required/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Sertifikat</label>
                                            <input type="text" name="nama_sertifikat" class="form-control" placeholder="Nama Sertifikat" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No Sertifikat</label>
                                            <input type="number" name="no_sertifikat" class="form-control" placeholder="No Sertifikat" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" id="inputState" class="form-control" required>
                                        <option value="">Choose...</option>
                                        <option value="perempuan">Perempuan</option>
                                        <option value="laki-laki">Laki - Laki</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Bergabung Sejak</label>
                                            <div class="dateMounth">
                                                <input type="date" name="tgl_gabung" id="dateofbirth" class="dateTerm" required/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Sign Off</label>
                                            <div class="dateMounth">
                                                <input type="date" name="sign_off" id="dateofbirth" class="dateTerm"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identitas</label>
                                            <select name="identitas" id="inputState" class="form-control">
                                              <option value="">Choose...</option>
                                              <option value="ktp">KTP</option>
                                              <option value="sim">SIM</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No. Identitas</label>
                                            <input type="number" name="no_identitas" class="form-control" placeholder="No" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>No NPWP</label>
                                            <input type="number" name="npwp" class="form-control" placeholder="No NPWP" required/>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label>Jabatan</label>
                                           <input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status Perkawinan</label>
                                    <select name="status_perkawinan" id="inputState" class="form-control" required>
                                        <option value="">Choose</option>
                                        <option value="single">Single</option>
                                        <option value="sudah_menikah">Sudah Menikah</option>
                                        <option value="duda">Duda</option>
                                        <option value="janda">Janda</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status Karyawan</label>
                                    <input type="text" name="status" class="form-control" placeholder="Masukan Status Karyawan" required/>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <input type="text" name="provinsi" class="form-control" placeholder="Masukan Provinsi" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kota</label>
                                            <input type="text" name="kota" class="form-control" placeholder="Masukan Kota" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Kecamatan" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kelurahan</label>
                                            <input type="text" name="kelurahan" class="form-control" placeholder="Masukan Kelurahan" required/>
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>RT</label>
                                            <input type="number" name="rt" class="form-control" placeholder="" />
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>RW</label>
                                            <input type="number" name="rw" class="form-control" placeholder="" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="address" name="alamat" class="form-control" placeholder="Alamat Lengkap" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                            </form>
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