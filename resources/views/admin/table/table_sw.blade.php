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
                @if(Session::has('success'))
                        <div class='alert alerts success' role="alert">
                        {{ Session::get('success') }}
                        </div>
                    @endif
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="{{route('storetable.sw')}}" method="POST" id="formKapalSewa" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>No</label>
                                    <input type="hidden" name="id" class="form-control" placheholder="ID Kapal" value="{{ Session::has('id_kapalsewa_form') ? Session::get('id_kapalsewa_form') : '' }}">
                                    <input type="text" name="unit" class="form-control" placeholder="No" value="{{ Session::has('id_kapalsewa_form') ? $data_form->unit : '' }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Keberangkatan</label>
                                    <input type="text" name="keberangkatan" class="form-control" placeholder="Keberangkatan" value="{{ Session::has('id_kapalsewa_form') ? $data_form->keberangkatan : '' }}" required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control" required>
                                        <option value="">Pilih Keberangkatan...</option>
                                        @foreach($data_tujuan as $tujuan)
                                            @if(Session::has('id_kapalsewa_form') && $tujuan==$data_form->keberangkatan)
                                                <option value="{{ $tujuan }}" selected>{{ strtoupper($tujuan) }}</option>
                                            @else
                                                <option value="{{ $tujuan }}">{{ strtoupper($tujuan) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal" value="{{ Session::has('id_kapalsewa_form') ? $data_form->nama_kapal : '' }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{ Session::has('id_kapalsewa_form') ? $data_form->tujuan : '' }}" required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control" required>
                                        <option value="">Pilih Tujuan...</option>
                                        @foreach($data_tujuan as $tujuan)
                                            @if(Session::has('id_kapalsewa_form') && $tujuan==$data_form->tujuan)
                                                <option value="{{ $tujuan }}" selected>{{ strtoupper($tujuan) }}</option>
                                            @else
                                                <option value="{{ $tujuan }}">{{ strtoupper($tujuan) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Owner</label>
                                    <input type="text" name="owner" class="form-control" placeholder="Owner" value="{{ Session::has('id_kapalsewa_form') ? $data_form->owner : '' }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tanggal Penyewaan</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_berangkat" class="dateTerm" value="{{ Session::has('id_kapalsewa_form') ? $data_form->tgl_berangkat : '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama PIC</label>
                                    <input type="text" name="penanggung_jawab" class="form-control" placeholder="Penanggung Jawab" value="{{ Session::has('id_kapalsewa_form') ? $data_form->penanggung_jawab : '' }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Selesai Sewa</label>
                                    <div class="dateMounth">
                                        <input type="date" name="tgl_datang" class="dateTerm" value="{{ Session::has('id_kapalsewa_form') ? $data_form->tgl_datang : '' }}" required>
                                    </div>
                                </div>
                                @if ( auth()->user()->level == '1')
                                <div class="form-group col-md-6">
                                    <label>Harga Sewa dari Owner</label>
                                    <input type="text" id="dengan-rupiah" name="harga_sewa_owner" class="form-control" placeholder="Rp.xxx.xxx" value="{{ Session::has('id_kapalsewa_form') ? $data_form->harga_sewa_owner : '' }}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Sewa Ke Customer</label>
                                    <input type="text" id="dengan-rupiahh" name="harga_sewa_customer" class="form-control" placeholder="Rp.xxx.xxx" value="{{ Session::has('id_kapalsewa_form') ? $data_form->harga_sewa_customer : '' }}" required>
                                </div>
                                @else
                                @endif
                                <div class="form-group col-md-6">
                                    <label>Data Customer</label>
                                    <input type="text" name="customer" class="form-control" placeholder="Nama PT Customer" value="{{ Session::has('id_kapalsewa_form') ? $data_form->customer : '' }}" required>
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
                                    <textarea class="form-control" name="keterangan" rows="4" id="comment" placeholder="Note" required>{{ Session::has('id_kapalsewa_form') ? $data_form->keterangan : '' }}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="check1">
                                        <label class="form-check-label mb-5">
                                            Data yang di isi sudah sesuai
                                        </label>
                                    </div>
                                    <a href="/table_sw/back" class="btn btnUnit ">Back</a>
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
                              <form method="post" action="{{ url('/simpan-gambar') }}" enctype="multipart/form-data" id="form-upload">
                                @csrf 
                                <div class="modal-header">
                                    <h4 class="modal-title">Upload File</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="entityWrapper">
                                    <div class="row input-clone" id="inputClone"> 
                                        <!-- <div class="col-md-6">  
                                            <div class="upload-btn-info">
                                                <img class="ml-5 border-0 " id="preview" src="{{ asset('assets/images/uploads.jpg') }}" alt="" style="width:100px;height:96px;margin-left:15px;margin-top:15px;margin-right:10px;"/>
                                                <input type="file" id="photo" name="photo" accept="application/pdf"  />
                                                <p class="text-upload-file ml-5">Unggah File</p>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12" style="padding-right: 35px;">
                                            <input type="hidden" id="kpid" name="kpid" class="form-control inputText" placeholder="ID Kapal" value="{{ Session::has('id_kapalsewa_form') ? Session::get('id_kapalsewa_form') : '' }}">
                                            <input type="text" id="nama_file" name="nama_file" class="form-control inputText" placeholder="Nama Kontrak" required>
                                            <input type="text" id="no_izin" name="no_izin" class="form-control inputText" placeholder="Nomor Perizinan" required>
                                            <input type="date" id="tgl_terbitfile" name="tgl_terbitfile" class="form-control inputText" placeholder="Tanggal Terbit File" required>
                                            <input type="date" id="tgl_berakhirfile" name="tgl_berakhirfile" class="form-control inputText" placeholder="Tanggal Berakhir File" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <center><button class="btn btnroot mt-3" id="addFile" type="submit" onclick="return confirm('Kontrak Sudah Benar?')">Simpan</button></center>
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
