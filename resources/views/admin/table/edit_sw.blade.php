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
                    <form action="{{url('/table_sw/update/' . $kapal_sewa->id) }}" id="formKapalSewa" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>No</label>
                                    <input type="hidden" name="id" class="form-control" placeholder="ID Kapal" value="{{$kapal_sewa->id}}" required>
                                    <input type="text" name="unit" class="form-control" placeholder="No" value="{{$kapal_sewa->unit}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Keberangkatan</label>
                                    <input type="text" name="keberangkatan" class="form-control" placeholder="Keberangkatan" value="{{$kapal_sewa->keberangkatan}}" required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control" required>
                                        <option value="">Pilih Keberangkatan...</option>
                                        @foreach($data_tujuan as $keberangkatan)
                                            @if($keberangkatan==$kapal_sewa->keberangkatan)
                                                <option value="{{ $keberangkatan }}" selected>{{ strtoupper($keberangkatan) }}</option>
                                            @else
                                                <option value="{{ $keberangkatan }}">{{ strtoupper($keberangkatan) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal" value="{{$kapal_sewa->nama_kapal}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{$kapal_sewa->tujuan}}" required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control" required>
                                        <option value="">Pilih Tujuan...</option>
                                        @foreach($data_tujuan as $tujuan)
                                            @if($tujuan==$kapal_sewa->tujuan)
                                                <option value="{{ $tujuan }}" selected>{{ strtoupper($tujuan) }}</option>
                                            @else
                                                <option value="{{ $tujuan }}">{{ strtoupper($tujuan) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Owner</label>
                                    <input type="text" name="owner" class="form-control" placeholder="Owner" value="{{$kapal_sewa->owner}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Penyewaan</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_berangkat" id="" class="dateTerm" value="{{$kapal_sewa->tgl_berangkat}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama PIC</label>
                                    <input type="text" name="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab" value="{{$kapal_sewa->penanggung_jawab}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Selesai Sewa</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_datang" id="" class="dateTerm" value="{{$kapal_sewa->tgl_datang}}">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Sewa dari Owner</label>
                                    <input type="text" name="harga_sewa_owner" id="dengan-rupiah" class="form-control" value="{{$kapal_sewa->harga_sewa_owner}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Sewa Ke Customer</label>
                                    <input type="text" name="harga_sewa_customer" id="dengan-rupiahh" class="form-control" value="{{$kapal_sewa->harga_sewa_customer}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Data Customer</label>
                                    <input type="text" name="customer" class="form-control" placeholder="Nama PT Customer" value="{{$kapal_sewa->customer}}" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <div class="row">
                                        <a type="menu" class="btn plusSa" data-toggle="modal" data-target="#UploadFile" onclick="storebyclick()">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                        <p class="textIcon">Upload File</p>
                                    </div>
                                </div>
                                <div id="list" class="form-group col-md-12">
                                    @foreach ($data_foto as $foto)
                                        <a href="{{ url('/table_sw/delete_img').'/'.$foto->id }}" class="hover-delete" onclick="return confirm('Anda yakin mau menghapus foto ini?')">
                                            <span class="mdi mdi-delete"></span>
                                            <embed src="{{ asset('assets/images/file.png') }}" class="thumb-cert">
                                        </a>
                                    @endforeach
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
                                        <!-- <div class="col-md-6">
                                            <div class="upload-btn-info">
                                                <img class="ml-5 border-0" id="preview" src="{{ asset('assets/images/uploads.jpg') }}" alt="" style="width:100px;height:96px;margin-left:15px;margin-top:15px;margin-right:10px;">
                                                <input type="file" id="photo" name="photo" accept="application/pdf"/>
                                                <p class="text-upload-file">Unggah File</p>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12" style="padding-right: 35px;">
                                            <input type="hidden" id="kpid" name="kpid" class="form-control inputText" placeholder="ID Kapal" value="{{$kapal_sewa->id}}">
                                            <input type="text" id="nama_file" name="nama_file" class="form-control inputText" placeholder="Nama Sertifikat" required>
                                            <input type="text" id="no_izin" name="no_izin" class="form-control inputText" placeholder="Nomor Perizinan" required>
                                            <input type="date" id="tgl_terbitfile" name="tgl_terbitfile" class="form-control inputText" placeholder="Tanggal Terbit File" required>
                                            <input type="date" id="tgl_berakhirfile" name="tgl_berakhirfile" class="form-control inputText" placeholder="Tanggal Berakhir File" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <center><button class="btn btnroot mt-3" type="submit" id="addFile" onclick="return confirm('Sertifikat Sudah Benar?')">Simpan</button></center>
                                        <!-- <button class="btn btnroot" type="button" id="addEntity">Tambah</button> -->
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
    $('#photo').change(function() {
        readFile(this);
    });

    function readFile(input) {
        if (input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            console.log(input.files[0]);
        }
    }

    function storebyclick() {
        var serializedData = $('#formKapalSewa').serialize();
        var url = "{{ url('/table_sw/storebyclick'); }}";
        var request = $.ajax({
            url: url,
            type: 'post',
            data: serializedData
        });

        request.done(function(response) {
            $("input[name='id']").val(response.id);
            $('#kpid').val(response.id);
            return console.log(response.id);
        });

        request.fail(function() {
            return console.log("error!");
        });
    }
</script>
<script>
    /* Dengan Rupiah */
    var dengan_rupiah = document.getElementById('dengan-rupiah');
    dengan_rupiah.addEventListener('keyup', function(e)
    {
        dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

</script>

<script>
    /* Dengan Rupiah */
    var dengan_rupiahh = document.getElementById('dengan-rupiahh');
    dengan_rupiahh.addEventListener('keyup', function(e)
    {
        dengan_rupiahh.value = formatRupiahh(this.value, 'Rp. ');
    });
    
    /* Fungsi */
    function formatRupiahh(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

</script>
@endpush