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
                            <li class="breadcrumb-item"><a href="index-km.html">Accounting</a></li>
                            <li class="breadcrumb-item active"><b>Inventory</b></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
            <!-- /# column -->
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <button type="button" class="btn btnCreate" data-toggle="modal" data-target="#modalCreate">Create</button>
                        <button type="button" class="btn btnCreate"><a href="history-km.html">History</a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-l-0 title-margin-left">
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
                    </div>
                </div>
            </div>
        </div>

        <!---Content-->

        <div class="table-responsive mt-5">
                    <table class="table">
                        <thead>
                            <tr class="table-iven">
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </th>
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
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </th>
                                <td>Cat Minyak</td>
                                <td>Ltr</td>
                                <td>3</td>
                                <td>-</td>
                                <td>6</td>
                                <td>Minyak satu</td>
                                <td>Admin 1</td>
                                <td>
                                    <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                    <button class="btn btn-icon" type="button"><i class="fas fa-edit" data-toggle="modal" data-target="#modalStock"></i></button>
                                    <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </th>
                                <td>Cat Minyak</td>
                                <td>Ltr</td>
                                <td>3</td>
                                <td>-</td>
                                <td>6</td>
                                <td>Minyak satu</td>
                                <td>Admin 1</td>
                                <td>
                                    <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                    <button class="btn btn-icon" type="button"><i class="fas fa-edit" data-toggle="modal" data-target="#modalStock"></i></button>
                                    <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </th>
                                <td>Cat Minyak</td>
                                <td>Ltr</td>
                                <td>3</td>
                                <td>-</td>
                                <td>6</td>
                                <td>Minyak satu</td>
                                <td>Admin 1</td>
                                <td>
                                    <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                    <button class="btn btn-icon" type="button"><i class="fas fa-edit" data-toggle="modal" data-target="#modalStock"></i></button>
                                    <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    </div>
                                </th>
                                <td>Cat Minyak</td>
                                <td>Ltr</td>
                                <td>3</td>
                                <td>-</td>
                                <td>6</td>
                                <td>Minyak satu</td>
                                <td>Admin 1</td>
                                <td>
                                    <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                    <button class="btn btn-icon" type="button"><i class="fas fa-edit" data-toggle="modal" data-target="#modalStock"></i></button>
                                    <button class="btn btn-icon" type="reset"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>



                <!----Modal Create-->

                <div class="modal fade" id="modalCreate" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Tambah Barang</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="content">
                                <div class="dialog">
                                    <label>Nama Barang</label><br>
                                    <input type="name" placeholder="" aria-describedby="button-addon4" class="formCreate">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="dialog">
                                            <label>Stock</label><br>
                                            <input type="number" placeholder="" aria-describedby="button-addon4" class="formCreate" style="width: 85%;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dialog">
                                            <label>Satuan</label><br>
                                            <select id="satuan" class="satuanCreate" style="width: 82%;">
                                                <option value="Kilogram">Kg</option>
                                                <option value="ons">Ons</option>
                                                <option value="gram">gram</option>
                                                <option value="unit">Unit</option>
                                                <option value="pcs">pcs</option>
                                                <option value="Ltr">Liter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="dialog">
                                    <label>Total Stock</label><br>
                                    <input type="number" placeholder="" aria-describedby="button-addon4" class="formCreate1">
                                </div>
                                <div class="dialog">
                                    <label>Keterangan</label><br>
                                    <textarea class="areaTextCreate"></textarea>
                                </div>
                                <button class="btn btnSave" type="menu">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                    
                    <!-- /# -->


                    <!----Modal Create tambah stock-->

                <div class="modal fade" id="modalStock" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Tambah Barang</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="content">
                                <div class="dialog">
                                    <label>Nama Barang</label><br>
                                    <input type="name" placeholder="" aria-describedby="button-addon4" class="formCreate">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="dialog">
                                            <label>Stock</label><br>
                                            <input type="number" placeholder="" aria-describedby="button-addon4" class="formCreate" style="width: 85%;">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dialog">
                                            <label>Satuan</label><br>
                                            <select id="satuan" class="satuanCreate" style="width: 82%;">
                                                <option value="Kilogram">Kg</option>
                                                <option value="ons">Ons</option>
                                                <option value="gram">gram</option>
                                                <option value="unit">Unit</option>
                                                <option value="pcs">pcs</option>
                                                <option value="Ltr">Liter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="dialog">
                                    <label>Update Stock</label><br>
                                    <input type="number" placeholder="" aria-describedby="button-addon4" class="formCreate1">
                                </div>
                                <div class="dialog">
                                    <label>Total Stock</label><br>
                                    <input type="number" placeholder="" aria-describedby="button-addon4" class="formCreate1">
                                </div>
                                <div class="dialog">
                                    <label>Keterangan</label><br>
                                    <textarea class="areaTextCreate"></textarea>
                                </div>
                                <button class="btn btnSave" type="menu">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
                           
            
            <!-- /# -->
                        
                <!-- /# column -->
        </section>
    </div>
</div>
</div>
@endsection