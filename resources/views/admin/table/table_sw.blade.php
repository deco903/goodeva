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
                    <form action="{{route('storetable.sw')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Unit</label>
                                    <input type="text" name="unit" class="form-control" placeholder="No" value="{{old('unit')}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control" required>
                                        <option selected>Pilih Keberangkatan...</option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control" required>
                                        <option selected>Pilih Tujuan...</option>
                                        <option>Bandung</option>
                                        <option>Jakarta</option>
                                        <option>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Owner</label>
                                    <input type="text" name="owner" class="form-control" placeholder="Owner" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Keberangkatan</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_berangkat" id="" class="dateTerm" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Datang</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_datang" id="" class="dateTerm" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Penanggu Jawab</label>
                                    <input type="text" name="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Kru</label>
                                    <input type="text" name="kru_karyawan" class="form-control" placeholder="Nama Kru" required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Nama Kru</label>
                                    <select multiple name="kru_karyawan" class="chosen-select form-control" tabindex="22" id="multiple-label-example">
                                        
                                        <option value=""></option>
                                        <option>Bambang</option>
                                        <option>Jame</option>
                                        <option>Luniar</option>
                                        <option selected>Giant</option>
                                        <option>neekade</option>
                                        <option>Sun</option>
                                        <option>Polar </option>
                                        <option>Spectacled</option>
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>No Sertifikat</label>
                                    <input type="text" name="no_sertifikat" class="form-control" placeholder="No Sertifikat" value="{{ Session::has('PHOTO_DATA') ? Session::get('PHOTO_DATA') : '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Masukan Gambar</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" required>
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
                                    <textarea class="form-control" name="keterangan" rows="4" id="comment" placeholder="Note" required></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label mb-5">
                                            Data yang di isi sudah sesuai
                                        </label>
                                    </div>
                                    <a href="/page_sw" class="btn btnUnit ">Back</a>
                                    <button id="submit-input" type="submit" class="btn btnUnit mr-2">Simpan Data</button>
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
                              <form action="{{route('simpan-gambar')}}" method="POST" enctype="multipart/form-data">
                                @csrf 
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload File</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="entityWrapper">
                                    <div class="row input-clone" id="inputClone"> 
                                        <div class="col-md-6">
                                            <div class="upload-btn-info">
                                                <button class="btn-upload-text"><i class="fas fa-plus"></i></button>
                                                <input type="file" id="photo" name="photo[]" multiple/>
                                                <p class="text-upload-file">Unggah File</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="padding-right: 35px;">
                                            <input type="text" id="nama_file" name="nama_file[]" class="form-control inputText" placeholder="Nama Sertifikat">
                                            <input type="text" id="no_izin" name="no_izin[]" class="form-control inputText" placeholder="Nomor Perizinan" >
                                            <input type="text" id="tgl_terbitfile" name="tgl_terbitfile[]" class="form-control inputText" placeholder="Tanggal Terbit File">
                                            <input type="text" id="tgl_berakhirfile" name="tgl_berakhirfile[]" class="form-control inputText" placeholder="Tanggal Berakhir File">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btnroot" type="submit" id="addFile">Simpan</button>
                                        <button class="btn btnroot" type="button" id="addEntity">Tambah</button>
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
</div>

@endsection
@push('script')


<script>
    $("#photo").click(function() {
        if($("#photo").val() == "") {
            $("#photo").removeAttr("disabled");
        } else {
            $("#photo").attr("disabled", true);
            $("#photo").attr("style", "background: rgba(0, 0, 0, 0.4)")
        }
    });
    $("#addEntity").click(function() {
        $("#inputClone").clone().appendTo(".entityWrapper");
    });
    $("#btnReset").click(function() {
        sessionStorage.removeItem('dataImg');
    });
    $("#photo").change(function() {
        $("#nama_file").val($(this).val());
    });
</script>
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

<script>
    function addZero(value){
        if(value < 10){
            value='0'+value
        }
        return value
    }

        const date=new Date()
        var jam = addZero(date.getHours)
        var menit = addZero(date.getMinutes)
        var waktu = jam + ':' + menit
        document.getElementId("waktu-notif").innerHtml=waktu
</script>


@endpush
