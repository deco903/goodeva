@extends('layouts.template')
@section('title','Customer GBM')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0 col-md-12">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Customer GBM</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                          <form action="{{route('caricustgmb')}}" method="GET">
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
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr class="table-iven">
                                    <th>#</th>
                                    <th></th>
                                    <th>Nama Kapal</th>
                                    <th>Nama Barang</th>
                                    <th></th>
                                    <th>PCS</th>
                                    <th></th>
                                    <th></th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php $no=1; ?>
                                @foreach($customergmb as $cus=>$result)
                                 <tr>
                                    <th>{{$cus + $customergmb->firstitem()}}</th>
                                    <td></td>
                                    <td>{{$result->nama_kapal}}</td>
                                    <td>{{$result->nama_barang}}</td>
                                    <td></td>
                                    <td>{{$result->pcs}}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                      <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                      <button class="btn btn-icon" id="btnStock" data-toggle="modal" data-target="" ><i class="fas fa-edit"></i></button>
                                      <button class="btn btn-icon" id="btnStock" data-toggle="modal" data-target="" ><i class="fas fa-user-edit"></i></button>
                                      <button class="btn btn-icon deletegmb" id="deletestock" type="reset"><i class="fas fa-trash"></i></button>       
                                    </td>
                                 </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$customergmb->links()}}
                    </div>
                </div>



                <!----Modal Create-->
                <div class="modal fade" id="modalCreate" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Tambah Customer</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   <form action="{{route('customergmbstore')}}" method="POST">
                                      @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nama Kapal</label>
                                                <input type="text" name="nama_kapal" class="form-control" placeholder="Nama Kapal">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Nama Barang</label>
                                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Pcs</label>
                                                <select name="pcs" id="inputState" class="form-control">
                                                    <option selected>Pilih Pcs</option>
                                                    <option>1 pcs</option>
                                                    <option>2 pcs</option>
                                                    <option>3 pcs</option>
                                                    <option>4 pcs</option>
                                                    <option>5 pcs</option>
                                                    <option>6 pcs</option>
                                                </select>
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
            <!-- /# -->
            </div>
        </div>
    </div>
</div>

@endsection
