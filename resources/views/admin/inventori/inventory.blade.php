@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Report Inventory SPN/GMB</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="button" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                            <button type="button" class="btn btnUnit" data-toggle="modal" data-target="#modalCreate">Tambah</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr class="table-iven">
                                    <th>#</th>
                                    <th> Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Stock</th>
                                    <th>Update Stock</th>
                                    <th>Total Stock</th>
                                    <th>Keterangan</th>
                                    <th>Terakhir diUbah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            </tbody>
                        </table>
                      
                    </div>
                </div>
                <!----Modal Create-->
                 

                    
            </div>
        </div>
    </div>
</div>

@endsection

