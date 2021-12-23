@extends('layouts.template')
@section('title','Inventori SPN')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0 col-md-12">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Inventory SPN</h4>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <div class="page-header">
                        <div class="page-title">
                            <form action="{{route('carispn')}}" method="GET">   
                            @csrf  
                            <div class="input-group inputSearch mb-4 border rounded-pill p-1">
                                <div class="input-group-prepend border-0">
                                    <button id="button-addon4" type="submit" class="btn btn-link">
                                        <i class="fa fa-search icon-fa"></i>
                                    </button>
                                </div>
                                <input type="search" name="nama_barang" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
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
                                    <th>Nama Barang</th>
                                    <th>Harga Beli</th>
                                    <th>Unit</th>
                                    <th>Total Stock</th>
                                    <th>Keterangan</th>
                                    <th>Terakhir diUbah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @if($spn->count() > 0)
                              @foreach($spn as $res=>$key)
                                <tr>
                                    <th>{{$res + $spn->firstitem()}}</th>
                                    <td>{{$key->nama_barang}}</td>
                                    <td>Rp. {{($key->harga) }}</td>
                                    <td>{{$key->unit}}</td>
                                    <td>{{$key->total_stock}}</td>
                                    <td>{{$key->text}}</td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>
                                        <a href="{{route('cetakspn', $key->id)}}" class="btn btn-icon" type="menu"><i class="fas fa-file"></i></a>
                                        <button class="btn btn-icon" id="btnStock" data-toggle="modal" data-target="#modalStock-{{$key->id}}" ><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" id="btnStock" data-toggle="modal" data-target="#modalUpdate-{{$key->id}}" ><i class="fas fa-user-edit"></i></button>
                                        <button data-id="{{$key->id}}" data-nama="{{$key->nama_barang}}" class="btn btn-icon delete" id="deletestock" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                              @else
                                  <tr>
                                    <td colspan="8"><center>Data Masih Kosong</center></td>
                                  </tr>
                            @endif
                            </tbody>
                        </table>
                        {{$spn->links()}}
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
                                    <form action="{{route('spnstore')}}" method="POST">
                                      @csrf 
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nama Barang</label>
                                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <input type="hidden" name="stock_awal" class="form-control" placeholder="Nama Barang">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Stock</label>
                                                <input type="number" name="stock" id="value1" class="form-control" min="0" placeholder="Stock" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Harga Beli </label>
                                                <input type="text" name="harga" id="angkaspn" class="form-control" min="0" placeholder="harga beli" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Unit</label>
                                                <select name="unit" id="inputState" class="form-control">
                                                    <option selected>Pilih Unit</option>
                                                    <option>pcs</option>
                                                    <option>Karung</option>
                                                    <option>Roll</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Type</label>
                                                <select name="type" id="inputState" class="form-control">
                                                    <option selected>Choose...</option>
                                                    <option>3/4</option>
                                                    <option>All Size</option>
                                                    <option>BMM</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Total Stock</label>
                                                <input type="number" name="total_stock" id="sum" class="form-control" readonly />
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <textarea name="text" class="form-control" rows="4" id="comment" placeholder="Note"></textarea>
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
        

                    <!----Modal edit stock-->
                    @foreach($spn as $data) 
                    <div class="modal fade" id="modalStock-{{$data->id}}" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Edit Barang</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ url('/spn/edit/'.$data->id) }}" method="POST">
                                      @csrf 
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nama Barang</label>
                                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{$data->nama_barang}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Harga Beli</label>
                                                <input type="text" name="harga" id="belieditspn-{{$data->id}}" class="form-control" min="0" value="{{$data->harga}}"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Stock</label>
                                                <input type="number" name="stock" id="stockspn-{{$data->id}}" class="form-control" min="0" placeholder="Stock" value="{{$data->total_stock}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Unit</label>
                                                <select name="unit" id="inputState" class="form-control">
                                                    <option selected>{{$data->unit}}</option>
                                                    <option>pcs</option>
                                                    <option>Karung</option>
                                                    <option>Roll</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Type</label>
                                                <select name="type" id="inputState" class="form-control">
                                                    <option selected>{{$data->type}}</option>
                                                    <option>3/4</option>
                                                    <option>All Size</option>
                                                    <option>BMM</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Total Stock</label>
                                                <input ttype="text" name="total_stock" id="sumspn-{{$data->id}}" class="form-control" value="{{$data->total_stock}}">
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <div class="form-group">
                                              <textarea name="text" class="form-control" rows="4" id="comment" placeholder="Note">{{$data->text}}</textarea>
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <div class="form-group">
                                              <button type="submit" class="btn btn-default" style="background-color: #55B0DC; color: #fff;">Edit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                    <!--end of Modal edit stock-->


                 <!----Modal edit tambah/kurang stock1-->
                 @foreach($spn as $data=>$res)
                    <div class="modal fade" id="modalUpdate-{{$res->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title titleModal">Edit Tambah/Kurang Stock</h6>
                                    <div class="vl"></div>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ url('/spn/edit/update/'.$res->id) }}" method="POST">
                                           @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="nama_barang" class="form-control" value="{{$res->nama_barang}}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Stock</label>
                                                    <input id="stockInit2-{{$res->id}}" type="number" name="stock" class="form-control" value="{{$res->total_stock}}" readonly>
                                                </div>
                                               
                                                <div class="form-group col-md-6">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Choose</label>
                                                            <select name="choose" id="mathState2-{{$res->id}}" class="form-control">
                                                                <option selected>{{$res->choose}}</option>
                                                                <option value="+">Penambahan Stock</option>
                                                                <option value="-">Pengurangan Stock</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>Update Stock</label>
                                                            <input id="stockFinal2-{{$res->id}}" type="number" name="update_stock" class="form-control" value="{{$res->update_stock}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Unit</label>
                                                    <select name="unit" id="inputState" class="form-control" readonly>
                                                        <option selected>{{$res->unit}}</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Type</label>
                                                    <select name="type" id="inputState" class="form-control" readonly>
                                                       <option selected>{{$res->type}}</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label>Total Stock</label>
                                                  <input type="hidden" name="total_stock" id="totalStock2-{{$res->id}}" class="form-control" value="{{$res->total_stock}}" readonly>
                                                </div>
                                            </div>
                                            <div class="basic-form">
                                                <div class="form-group">
                                                  <textarea name="text" id="updatetext" class="form-control" rows="4" placeholder="Note">{{$res->text}}</textarea>
                                                </div>
                                            </div>
                                            <div class="basic-form">
                                                <div class="form-group">
                                                  <button type="submit" class="btn btn-default" style="background-color: #55B0DC; color: #fff;">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--end of Modal tambah/kurang-->

                    
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<script>
    $('.delete').click(function(){
       var spnid = $(this).attr('data-id');
       var spnnama = $(this).attr('data-nama');
        swal({
            title: "Yakin?",
            text: "data "+spnnama+" akan dihapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location =  "/delete/"+spnid+""
                swal("data berhasil dihapus", {
                icon: "success",
                });
            } else {
                swal("Data tidak jadi dihapus");
            }
        });
    });
    
</script>

@foreach($spn as $data)
<script>
   $("#stockspn-{{$data->id}}").keyup(function(){
        var a = parseInt($("#stockspn-{{$data->id}}").val());
        var b = a;
        $("#sumspn-{{$data->id}}").val(b);
    });            
</script>
@endforeach

@foreach($spn as $data=>$res)
<script>
    $(function(){
        $('#stockFinal2-'+`{{$res->id}}`).keyup(function() {
            if ($('#mathState2-'+`{{$res->id}}`).val() == "-") {
                var minStock = $('#stockInit2-'+`{{$res->id}}`).val() - $('#stockFinal2-'+`{{$res->id}}`).val();
                $('#totalStock2-'+`{{$res->id}}`).val(minStock);
            } else if ($('#mathState2-'+`{{$res->id}}`).val() == "+") {
                var addStock = parseInt($('#stockInit2-'+`{{$res->id}}`).val()) + parseInt($('#stockFinal2-'+`{{$res->id}}`).val());
                $('#totalStock2-'+`{{$res->id}}`).val(addStock);
            }
        });
    });
</script>
@endforeach

<script>
      $(document).ready(function(){
        $("#angkaspn").keyup(function(){
            // console.log("berhasil")
            $(this).maskNumber({integer: true, thousands: "."})
        })
    })
</script>

@foreach($spn as $data)
<script>
      $(document).ready(function(){
        $("#belieditspn-{{$data->id}}").keyup(function(){
            // console.log("berhasil")
            $(this).maskNumber({integer: true, thousands: "."})
        })
    })      
</script>
@endforeach

@endpush