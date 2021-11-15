@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em">
                        <h4>Tambah Kapal Pribadi</h4>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="{{route('storeTablekm')}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>No</label>
                                    <input type="number" name="no" class="form-control" placeholder="No" value="" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control">
                                        <option selected>Pilih Keberangkatan...</option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Madura</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control">
                                        <option selected>Pilih Tujuan...</option>
                                        <option>Bandung</option>
                                        <option>Jakarta</option>
                                        <option>Madura</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Nama Kru</label>
                                    <input type="text" name="nama_kru" class="form-control" placeholder="Nama Kru">
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Nama Kru</label>
                                    <select multiple class="chosen-select form-control" name="nama_kru" tabindex="22" id="multiple-label-example">
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
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mulai Sewa</label>
                                    <div class="dateMounth">
                                        <input type="date" name="mulai_sewa" id="" class="dateTerm">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Penyewa</label>
                                    <input type="text" name="nama_penyewa" class="form-control" placeholder="Nama Penyewa">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sewa Selesai</label>
                                    <div class="dateMounth">
                                        <input type="date" name="sewa_selesai" id="" class="dateTerm">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="image" class="form-label">Masukan Gambar</label>
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
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
                                    <textarea name="keterangan" class="form-control" rows="4" id="comment" placeholder="Note"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Data yang di isi sudah sesuai
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2">Simpan Data</button>
                                    <a href="/page_km" class="btn btn-primary ">Back</a>
                                    <!-- <button type="submit" class="btn btn-primary">Save</button> -->
                                </div>
                            </div>
                        </div>
                        </form>
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