@extends('layouts.template')
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
                    <form action="{{route('storekru')}}" method="POST" enctype="multipart/form-data"> 
                              @csrf  
                        <div class="card-body">
                       
                            <div class="form-row">
                           
                                <div class="form-group col-md-6">
                                    <div class="row">
                                       
                                        <div class="col-md-6">
                                            <div class="row">
                                             <div class="col-3">
                                                <img id="preview" src="#" alt="" style="width:100px;height:96px;margin-left:-16px;margin-right:10px;"/> 
                                             </div>
                                            <div class="col-3">
                                             <input type="file" id="myFile" name="photo" required>
                                             </div>
                                            </div>
                                        </div>         
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Phone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="No Phone" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama</label>
                                    <input type="nama" name="nama" class="form-control" placeholder="Nama" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="email" required>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Tempat Lahir</label>
                                                <select id="inputState" name="tempat_lahir" class="form-control">
                                                    <option value="">Choose...</option>
                                                    <option value="jakarta">Jakarta</option>
                                                    <option value="bandung">Bandung</option>
                                                    <option value="madura">Madura</option>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <div class="dateMounth">
                                                <input type="date" name="tgl_lahir" id="dateofbirth" class="dateTerm" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Nama Sertifikat</label>
                                            <input type="text" name="nama_sertifikat" class="form-control" placeholder="Nama Sertifikat" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No Sertifikat</label>
                                            <input type="number" name="no_sertifikat" class="form-control" placeholder="No Sertifikat" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                        <select id="inputState" name="jenis_kelamin" class="form-control">
                                            <option value="">Choose...</option>
                                            <option value="perempuan">Perempuan</option>
                                            <option value="laki-laki">Laki - Laki</option>
                                        </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Bergabung Sejak</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_gabung" id="dateofbirth" class="dateTerm" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identitas</label>
                                            <select id="inputState" name="identitas" class="form-control">
                                                <option value="">Choose...</option>
                                                <option value="ktp">KTP</option>
                                                <option value="sim">SIM</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>No. Identitas</label>
                                            <input type="number" name="no_identitas" class="form-control" placeholder="No" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Status</label>
                                    <select id="inputState" name="status" class="form-control">
                                        <option value="">Choose...</option>
                                        <option value="magang">Magang</option>
                                        <option value="kontrak">Kontrak</option>
                                        <option value="tetap">Tetap</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>Provinsi</label>
                                            <select id="inputState" name="provinsi" class="form-control">
                                                <option value="">Choose...</option>
                                                <option value="jawa barat">Jawa Barat</option>
                                                <option value="jawa tengah">Jawa Tengah</option>
                                                <option value="jawa timur">Jawa Timur</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kota</label>
                                            <select id="inputState" name="kota" class="form-control">
                                                <option value="">Choose...</option>
                                                <option value="depok">Depok</option>
                                                <option value="dki jakarta">DKI Jakarta</option>
                                                <option value="yogyakarta">Yogyakarta</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kecamatan</label>
                                            <select id="inputState" name="kecamatan" class="form-control">
                                                <option value="">Choose...</option>
                                                <option value="limo">Limo</option>
                                                <option value="jagakarsa">Jagakarsa</option>
                                                <option value="pasar minggu">Pasar Minggu</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>Kelurahan</label>
                                            <select id="inputState" name="kelurahan" class="form-control">
                                                <option value="">Choose...</option>
                                                <option value="krukut">Krukut</option>
                                                <option value="gandul">Gandul</option>
                                                <option value="cilandak">Cilandak</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label>RT</label>
                                            <input type="number" name="rt" class="form-control" placeholder="RT" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label>RW</label>
                                            <input type="number" name="rw" class="form-control" placeholder="RW" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Alamat</label>
                                            <input type="address" name="alamat" class="form-control" placeholder="Alamat Lengkap" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
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