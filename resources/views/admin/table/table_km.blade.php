@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em;">
                        <h4>Tambah Kapal Pribadi</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                     <form action="{{route('storeTablekm')}}" method="POST" >
                       @csrf
                        <div class="card-body">
                           
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>No</label>
                                    <input type="number" class="form-control" placeholder="No">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control">
                                        <option value="">--Pilih Keberangkatan--</option>
                                        <option value="jakarta">Jakarta</option>
                                        <option value="bandung">Bandung</option>
                                        <option value="madura">Madura</option>
                                        <option value="surabaya">Surabaya</option>
                                        <option value="malang">Malang</option>
                                        <option value="bali">Bali</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control">
                                        <option value="">--Pilih Tujuan--</option>
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
                                    <input type="text" name="kru_kapal" class="form-control" placeholder="Kru Kapal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mulai Sewa</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_keberangkatan" id="dateofbirth" class="dateTerm">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Penyewa</label>
                                    <input type="text" name="nama_penyewa" class="form-control" placeholder="Nama Penyewa">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sewa Selesai</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_tiba" id="dateofbirth" class="dateTerm">
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
                                    <textarea class="form-control" name="keterangan" rows="4" id="comment" placeholder="Note"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button id="btnReset" type="reset" class="btn btn-danger" onclick="removeDataImgSession()">Cancel</button>
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
                              <form action="{{route('storeTablekm')}}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload File</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="row" id="multiplier0">
                                    <div class="col-md-6">
                                        <div class="upload-btn-info" style="background-image:url('{{ Session::has('dataImg') ? '/uploads/img/'.Session::get('dataImg')['photo'] : '' }}');background-size: 100% 100%;">
                                            <button class="btn-upload-text"><i class="fas fa-plus"></i></button>
                                            <input type="file" name="photo"/>
                                            <p class="text-upload-file">Unggah File</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6" style="padding-right: 35px;">
                                        <input type="text" name="nama_file" class="form-control inputText" placeholder="Nama File" value="{{ Session::has('dataImg') ? Session::get('dataImg')['nama_file'] : '' }}">
                                        <input type="text" name="no_izin" class="form-control inputText" placeholder="Nomor Sertifikat" value="{{ Session::has('dataImg') ? Session::get('dataImg')['no_izin'] : '' }}">
                                        <div class="dateMounth" style="margin-top: 1em; margin-bottom: 1em;">
                                            <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm"
                                            value="{{ Session::has('dataImg') ? Session::get('dataImg')['tgl_terbit'] : '' }}">
                                        </div>
                                        <div class="dateMounth" style="margin-top: 1em; margin-bottom: 1em;">
                                            <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm"
                                            value="{{ Session::has('dataImg') ? Session::get('dataImg')['tgl_berakhir'] : '' }}">
                                        </div>
                                        <!-- <input type="text" name="tgl_terbitfile" class="form-control inputText" placeholder="Nama Tanggal Terbit File" value="{{ Session::has('dataImg') ? Session::get('dataImg')['tgl_terbit'] : '' }}">
                                        <input type="text" name="tgl_berakhirfile" class="form-control inputText" placeholder="Nama Tanggal Berakhir File" value="{{ Session::has('dataImg') ? Session::get('dataImg')['tgl_berakhir'] : '' }}"> -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btnroot" type="submit" id="addFile">Simpan</button>
                                        <button class="btn btnroot" id="addFile" style="margin-right: 1em;" onclick="multipleCertificate()">Tambah File</button>
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
@push('script')
<script type="text/javascript">
    function removeDataImgSession() {
        document.getElementById('btnReset').value = '';
        $.getJSON("/page_km/table_km/reset_session/dataImg", function(data) {
        });
        location.reload();
    };

    var idx = 0;
    var duplicateBase = document.getElementById('duplicater');
    function multipleCertificate() {
        var clone = duplicateBase.cloneNode(true); // "deep" clone
        clone.id = "duplicater" + ++idx;
        // or clone.id = ""; if the divs don't need an ID
        duplicateBase.parentNode.appendChild(clone);
    }
</script>
@endpush