@extends('layouts.app')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text" style="margin-bottom: 2em;" >
                        <h4>Detail Data Kapal Sewa</h4>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                    <form action="" method="POST" enctype="multipart/form-data">
                       @csrf
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <h5 class="mb-3">No : {{$kapal_sewa->unit}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Data Customer : {{$kapal_sewa->customer}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="mb-3">Nama Kapal : {{$kapal_sewa->nama_kapal}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Owner : {{$kapal_sewa->owner}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="mb-3">Destinasi : {{$kapal_sewa->keberangkatan}} - {{$kapal_sewa->tujuan}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="dateMounth">Tanggal Sewa : {{Carbon\Carbon::parse($kapal_sewa->tgl_berangkat)->format("d M Y")}} - {{Carbon\Carbon::parse($kapal_sewa->tgl_datang)->format("d M Y")}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 class="mb-3">Penanggung Jawab : {{$kapal_sewa->penanggung_jawab}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Harga Sewa Owner : {{$kapal_sewa->harga_sewa_owner}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5>Harga Sewa Customer : {{$kapal_sewa->harga_sewa_customer}}</h5>
                                </div>
                                <div class="form-group col-md-6">
                                    <h5 for="image" class="form-label">Note : {{$kapal_sewa->keterangan}}</h5>
                                </div>
                                <div class="form-group col-md-12">
                                    <h5>Sertifikat :</h5>
                                    <div class="row">
                                    <?php $idx = 1; ?>
                                    @foreach($data_foto as $foto)
                                        <div class="col-md-3">
                                            <span class="text-show mb-3" style="font-weight: 700"><?= $idx; ?>. {{ $foto->nama_file }}</span>
                                            <ul class="ml-4 text-show">
                                                <li style="list-style-type: circle;">Nomor Perizinan : {{ $foto->no_izin }}</li>
                                                <li style="list-style-type: circle;">Tanggal Berlaku : {{ Carbon\Carbon::parse($foto->tgl_terbitfile)->format("d M Y") }} - {{ Carbon\Carbon::parse($foto->tgl_berakhirfile)->format("d M Y") }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <embed src="{{ asset('assets/images/file.png') }}" class="thumb-cert">
                                        </div>
                                        <div class="col-md-7">
                                        </div>
                                        <?php $idx++; ?>
                                    @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                                <div class="form-group" >
                                    <a href="/page_sw" class="btn btnUnit ">Back</a>
                                    <a href="/print/{{$kapal_sewa->id}}" class="btn btnUnit mr-3" type="menu">Print Preview</a>
                                </div>
                        </form>
                    
                    
                    
                    
                    </div>
                    </form>
                    
                        <!----Modal Upload File-->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')

@endpush