@extends('layouts.app')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb float-left" >
                                <li class="breadcrumb-item"><a href="index-km.html">Daftar Kapal Pribadi</a></li>
                                <li class="breadcrumb-item active"><b>Tambah Unit</b></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /# row -->
            <section id="main-content">
                
                <div class="col-md-12">
                  <form action="{{route('storetable.km')}}" method="POST">
                      @csrf 
                      <div class="row">
                        <div class="col-md-6">
                            <div class="inputUnit">
                                <input type="name" class="form-Input" placeholder="No" >
                            </div>
                            <div class="inputUnit">
                                <input type="name" class="form-Input" placeholder="Nama Kapal">
                            </div>
                            <div class="inputUnit">
                                <input type="name" class="form-Input" placeholder="Kru Kapal">
                            </div>
                            <div class="inputUnit">
                                <input type="name" class="form-Input" placeholder="Nama Penyewa">
                            </div>
                            <div class="inputUnit">
                                <div class="row">
                                    <button type="menu" class="btn plusSa" data-toggle="modal" data-target="#UploadFile">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <p class="textIcon">Upload File</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputUnit">
                                <select class="form-select dateTerm" aria-label="Default select example">
                                    <option selected>Destinasi Keberangkatan</option>
                                    <option value="1">Jakarta</option>
                                    <option value="2">Bandung</option>
                                    <option value="3">Semarang</option>
                                </select>
                                <!-- <input type="text" name="penanggung_jawab" class="form-Input" placeholder="Destinasi" required> -->
                            </div>
                            <div class="inputUnit">
                                <select class="form-select dateTerm" aria-label="Default select example">
                                    <option selected>Destinasi Tujuan</option>
                                    <option value="1">Jakarta</option>
                                    <option value="2">Bandung</option>
                                    <option value="3">Semarang</option>
                                </select>
                                <!-- <input type="text" name="penanggung_jawab" class="form-Input" placeholder="Destinasi" required> -->
                            </div>
                                <div class="inputUnit">
                                    <div class="dateMounth">
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm" style="background-color: #f4f4f4;">
                                    </div>
                                </div>
                                <div class="inputUnit">
                                    <div class="dateMounth">
                                        <input type="date" name="dateofbirth" id="dateofbirth" class="dateTerm" style="background-color: #f4f4f4;">
                                    </div>
                                </div>
                                <div class="inputUnit">
                                    <input type="number" class="form-Input" placeholder="Nilai Kontrak">
                                </div>
                                <center>
                                    <button type="submit" class="btn btn-secondary btnSubmitUnit" data-toggle="modal" data-target="uploadFile"><a href="./tambah-mp.html">Simpan</a></button>
                                </center>
                            </div>
                        </div>
                   </form>

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
                                                <input type="file" name="myfile"/>
                                                <p class="text-upload-file">Unggah File</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="name" class="form-Input input-Form" placeholder="Nama File">
                                            <input type="name" class="form-Input input-Form" placeholder="No Perizinan">
                                            <input type="name" class="form-Input input-Form" placeholder="Tanggal terbit file">
                                            <input type="name" class="form-Input input-Form" placeholder="Tanggal berakhir file">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button class="btn btnroot" type="button" id="addFile">Simpan</button>
                                            <button class="btn btnroot" type="button" id="addFile" style="margin-right: 1em;" >Tambah File</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                </div>
            </section>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">

 $('#datepicker').datetimepicker({

        language:  'id',

        weekStart: 1,

        todayBtn:  1,

  autoclose: 1,

  todayHighlight: 1,

  startView: 2,

  minView: 2,

  forceParse: 0

    });

</script> -->
<!-- <script>
	$(document).ready(function(){
		var date_input=$('input[name="tanggal"]');
		var container=$('#main-content form').length>0 ? $('#main-content form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script> -->
@endsection