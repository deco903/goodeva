@extends('layouts.template')
@section('title','Inventori SPN')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0 col-md-12">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Agency</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                            <form action="{{route('agencysearch')}}" method="GET">   
                            @csrf  
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="submit" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" name="nama_kapal" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                            </form>
                            <button type="button" class="btn btnUnit" data-toggle="modal" data-target="#modalCreate">Tambah</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                  @include('admin.inventori.notif.success')
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm ">
                            <thead>
                                <tr class="table-iven">
                                    <th>#</th>
                                    <th>Nama Kapal</th>
                                    <th>Voy</th>
                                    <th>Bendera</th>
                                    <th>GT</th>
                                    <th>Port Asal</th>
                                    <th>Tanggal Kedatangan</th>
                                    <th>Muatan Bongkar</th>
                                    <th>Jenis Muatan</th>
                                    <th>Tgl Keberangkatan</th>
                                    <th>Tujuan</th>
                                    <th>Muatan</th>
                                    <th>Detail</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @if($data->count() > 0)
                              @foreach($data as $res=>$key)
                               <tr>
                                 <td>{{$res + $data->firstitem()}}</td>
                                 <td>{{$key->nama_kapal}}</td>
                                 <td>{{$key->voy}}</td>
                                 <td>{{$key->bendera}}</td>
                                 <td>{{$key->gt}}</td>
                                 <td>{{$key->port_asal}}</td>
                                 <td>{{date('d-M-y', strtotime($key->tgl_kedatangan))}}</td>
                                 <td>{{$key->muatan_bongkar}}</td>
                                 <td>{{$key->jenis_muatan}}</td>
                                 <td>{{date('d-M-y', strtotime($key->tgl_keberangkatan))}}</td>
                                 <td>{{$key->tujuan}}</td>
                                 <td>{{$key->muatan}}</td>
                                 <td>{{$key->detail}}</td>
                                 <td>{{$key->keterangan}}</td>
                               </tr>
                              @endforeach
                             @else
                               <tr>
                                 <td colspan="13"><center>Data Masih Kosong</center></td>
                               </tr>
                            @endif
                            </tbody>
                        </table>
                      
                    </div>
                </div>
                <!----Modal Create-->

                <!----Modal Create tambah stock-->
                <div class="modal fade" id="modalCreate" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Tambah Barang</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('agencystore')}}" method="POST">
                                      @csrf 
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nama Kapal</label>
                                                <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Barang" required/>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Voy</label>
                                                <input type="text" name="voy" class="form-control" placeholder="Nama Voy" required/>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Bendera</label>
                                                <input type="text" name="bendera" class="form-control" placeholder="Nama Bendera" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>GT</label>
                                                <input type="text" name="gt" id="value1" class="form-control" min="0" placeholder="masukan GT" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Port Asal</label>
                                                <select name="port_asal" id="inputState" class="form-control">
                                                    <option selected>Pilih Unit</option>
                                                    <option>Makassar</option>
                                                    <option>Batam</option>
                                                    <option>Jakarta</option>
                                                    <option>Balikpapan</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Kedatangan</label>
                                                <input type="date" name="tgl_kedatangan" id="sum" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Muatan Bongkar</label>
                                                <input type="text" name="muatan_bongkar" id="sum" class="form-control" placeholder="Muatan Bongkar"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Jenis Muatan</label>
                                                <select name="jenis_muatan" id="inputState" class="form-control">
                                                    <option selected>Pilih Unit</option>
                                                    <option>Batu</option>
                                                    <option>Kayu</option>
                                                    <option>Emas</option>
                                                    <option>Timah</option>
                                                    <option>Besi</option>
                                                    <option>Gergaji</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tanggal Keberangkatan</label>
                                                <input type="date" name="tgl_keberangkatan" id="sum" class="form-control"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Tujuan</label>
                                                <input type="text" name="tujuan" id="sum" class="form-control" placeholder="Tujuan"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Muatan</label>
                                                <input type="text" name="muatan" id="sum" class="form-control" placeholder="Muatan"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Detail</label>
                                                <input type="text" name="detail" id="sum" class="form-control" placeholder="Detail"/>
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <textarea name="keterangan" class="form-control" rows="4" id="comment" placeholder="Note"></textarea>
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <div class="form-group">
                                               <button type="submit" class="btn btn-default" style="background-color: #55B0DC; color: #fff;">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of modal create-->
        
                    
            </div>
        </div>
    </div>
</div>

@endsection
