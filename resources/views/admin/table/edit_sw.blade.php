@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em;" >
                        <h4>Edit Data Kapal Sewa</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="/table_sw/update/{{ $kapal_sewa->id }}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Unit</label>
                                    <input type="text" name="unit" class="form-control" placeholder="No" value="{{$kapal_sewa->unit}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control" value="{{$kapal_sewa->keberangkatan}}">
                                        <option selected>Pilih Keberangkatan...</option>
                                        <option value="Jakarta" {{ $kapal_sewa->keberangkatan =='Jakarta'?'selected':'' }}>Jakarta</option>
                                        <option value="Bandung" {{ $kapal_sewa->keberangkatan =='Bandung'?'selected':'' }}>Bandung</option>
                                        <option value="Madura" {{ $kapal_sewa->keberangkatan =='Madura'?'selected':'' }}>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal" value="{{$kapal_sewa->nama_kapal}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control" value="{{$kapal_sewa->tujuan}}">
                                        <option selected>Pilih Tujuan...</option>
                                        <option value="Bandung" {{ $kapal_sewa->tujuan =='Bandung'?'selected':'' }}>Bandung</option>
                                        <option value="Jakarta" {{ $kapal_sewa->tujuan =='Jakarta'?'selected':'' }}>Jakarta</option>
                                        <option value="Madura" {{ $kapal_sewa->tujuan =='Madura'?'selected':'' }}>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Owner</label>
                                    <input type="text" name="owner" class="form-control" placeholder="Owner" value="{{$kapal_sewa->owner}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Keberangkatan</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_berangkat" id="" class="dateTerm" value="{{$kapal_sewa->tgl_berangkat}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Datang</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_datang" id="" class="dateTerm" value="{{$kapal_sewa->tgl_datang}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Penanggu Jawab</label>
                                    <input type="text" name="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab" value="{{$kapal_sewa->penanggung_jawab}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Kru Karyawan</label>
                                    <input type="text" name="kru_karyawan" class="form-control" placeholder="Kru Karyawan" value="{{$kapal_sewa->kru_karyawan}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>No Sertifikat</label>
                                    <input type="text" name="no_sertifikat" class="form-control" placeholder="No Sertifikat" value="{{$kapal_sewa->no_sertifikat}}"">
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Masukan Gambar</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" value="{{$kapal_sewa->image}}">
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
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Note" name="keterangan">{{$kapal_sewa->keterangan}}</textarea>
                                </div>
                                <!-- <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div> -->
                            </div>
                        </div>
                        
                                <div class="form-group">
                                    <a href="/page_sw" class="btn btnUnit ">Back</a>
                                    <button type="submit" class="btn btnUnit mr-2">Simpan Data</button>
                                    
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
@endpush