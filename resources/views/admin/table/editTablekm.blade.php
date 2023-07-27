@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em">
                        <h4>Edit Data Kapal Pribadi</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="/page_km/table_km/update/{{$pribadi->id}}" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label>Nama Kapal</label>
                                    <input type="hidden" name="id" class="form-control" placeholder="ID Kapal" value="{{$pribadi->id}}" required>
                                    <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal" value="{{$pribadi->nama_kapal}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Keberangkatan</label>
                                    <input type="text" name="keberangkatan" class="form-control" placeholder="Keberangkatan" value="{{$pribadi->keberangkatan}}" required>
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label>Destinasi Keberangkatan</label>
                                    <select name="keberangkatan" id="inputState" class="form-control" required>
                                        <option value="">Pilih Keberangkatan...</option>
                                        @foreach($data_tujuan as $keberangkatan)
                                            @if($keberangkatan==$pribadi->keberangkatan)
                                                <option value="{{ $keberangkatan }}" selected>{{ strtoupper($keberangkatan) }}</option>
                                            @else
                                                <option value="{{ $keberangkatan }}">{{ strtoupper($keberangkatan) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> -->
                                <div class="form-group col-md-6">
                                    <label>Customer</label>
                                    <input type="text" name="customer" class="form-control" placeholder="Customer" value="{{$pribadi->customer}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" value="{{$pribadi->tujuan}}" required>
                                </div>

                                <!-- <div class="form-group col-md-6">
                                    <label>Destinasi Tujuan</label>
                                    <select name="tujuan" id="inputState" class="form-control" required>
                                        <option value="">Pilih Tujuan...</option>
                                        @foreach($data_tujuan as $tujuan)
                                            @if($tujuan==$pribadi->tujuan)
                                                <option value="{{ $tujuan }}" selected>{{ strtoupper($tujuan) }}</option>
                                            @else
                                                <option value="{{ $tujuan }}">{{ strtoupper($tujuan) }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div> -->
                               
                                <div class="form-group col-md-6">
                                    <label>Nama Kru (Jabatan)</label>
                                    <select multiple  id="multi-select" size="5" class="chosen-select form-control selectbox-scrollable" name="nama_kru[]" tabindex="22" value="{{$pribadi->nama_kru}}" required>
                                    @foreach ($nama_kru as $nama_kru)
                                        @if(old('nama_kru') == $nama_kru->nama)
                                        <option value="{{$nama_kru->nama}}  ({{$nama_kru->jabatan}})" selected> {{strtoupper($nama_kru->nama)}}  ({{strtoupper( $nama_kru->jabatan )}})</option>
                                        @else
                                        <option value="{{$nama_kru->nama}}  ({{$nama_kru->jabatan}})"> {{strtoupper($nama_kru->nama)}}  ({{strtoupper( $nama_kru->jabatan )}})</option>
                                        @endif
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mulai Sewa</label>
                                    <div class="dateMounth">
                                        <input type="date" name="mulai_sewa" id="" class="dateTerm" value="{{$pribadi->mulai_sewa}}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Nama Penyewa</label>
                                    <input type="text" name="nama_penyewa" class="form-control" placeholder="Nama Penyewa" value="{{$pribadi->nama_penyewa}}" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Sewa Selesai</label>
                                    <div class="dateMounth">
                                        <input type="date" name="sewa_selesai" id="" class="dateTerm" value="{{$pribadi->sewa_selesai}}" required>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Harga Sewa Ke Customer</label>
                                    <input type="text" id="dengan-rupiah" name="harga_sewa_customer" class="form-control" placeholder="Rp.xxx.xxx" value="{{$pribadi->harga_sewa_customer}}" required>
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
                                        <a href="{{ url('/table_km/delete_img').'/'.$foto->id }}" class="hover-delete" onclick="return confirm('Anda yakin mau menghapus foto ini?')">
                                            <span class="mdi mdi-delete"></span>
                                            <embed src="{{ asset('assets/images/file.png') }}" class="thumb-cert">
                                        </a>
                                    @endforeach
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea name="keterangan" class="form-control" rows="4" id="comment" placeholder="Note" required>{{$pribadi->keterangan}}</textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox">
                                        <label class="form-check-label">
                                            Data yang di isi sudah sesuai
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary mr-2" id="saveData">Simpan Data</button>
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
                            <form action="{{route('simpan-gambarkm')}}" method="POST" enctype="multipart/form-data">
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
                                                <input type="file" id="photo" name="photo"/>
                                                <p class="text-upload-file">Unggah File</p>
                                            </div>
                                        </div> -->
                                        <div class="col-md-12" style="padding-right: 35px;">
                                            <input type="hidden" id="kpid" name="kpid" class="form-control inputText" placeholder="ID Kapal" value="{{$pribadi->id}}">
                                            <input type="text" id="nama_file" name="nama_file" class="form-control inputText" placeholder="Nama Sertifikat" required>
                                            <input type="text" id="no_izin" name="no_izin" class="form-control inputText" placeholder="Nomor Perizinan" required>
                                            <select name="jenis_berkas" class="form-control inputText" required>
                                                <option selected>Pilih Jenis Berkas</option>
                                                <option>Sertifikat</option>
                                                <option>Kontrak</option>
                                            </select>
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
        var serializedData = $('#formKapalPribadi').serialize();
        var url = "{{ url('/table_km/storebyclickkm'); }}";
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
    
$('.multi-selectbox').each(function(){
  $(this).prepend('<div class="selectbox-scrollbar-rail"><div class="selectbox-scrollbar"></div></div>')
  var $scrollable  = $(this).find(".selectbox-scrollable"),
    $scrollbar   = $(this).find(".selectbox-scrollbar"),
    height       = $scrollable.outerHeight(true),    // visible height
    scrollHeight = $scrollable.prop("scrollHeight"), // total height
    barHeight    = height * height / scrollHeight;   // Scrollbar height!
 
// Scrollbar drag:
$scrollbar.height( barHeight ).draggable({
  axis : "y",
  containment : "parent", 
  drag: function(e, ui) {
    $scrollable.scrollTop( scrollHeight / height * ui.position.top  );
  }
}); 

// Element scroll:
$scrollable.on("scroll", function() {
  $scrollbar.css({top: $scrollable.scrollTop() / height * barHeight });
});
  
});


</script>
<script>
    $(function() {
  $('.ruleparameter').multiselect({
    includeSelectAllOption: true
  });
  $('#btnSelected').click(function() {
    var selected = $(".ruleparameter option:selected");
    var message = "";
    selected.each(function() {
      message += $(this).text() + " " + $(this).val() + "\n";
    });
    alert(message);
  });
});
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

    $('#saveData').click(function() {
        if ($('#multi-select').val() != '') {} else {
            alert('Data kru kosong! Mohon untuk mengisi data kru terlebih dahulu');
        }
    });


</script>

@endpush
