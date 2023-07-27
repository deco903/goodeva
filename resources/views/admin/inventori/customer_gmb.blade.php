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
                                <input type="search" name="nama_barang" placeholder="Pencarian.." aria-describedby="button-addon4" class="form-control bg-one border-0">
                            </div>
                           </form>
                            @if( auth()->user()->level == '1')
                            <button type="button" class="btn btnUnit" data-toggle="modal" data-target="#modalCreate">Tambah</button>
                            @elseif ( auth()->user()->level == '2')
                            <button type="button" class="btn btnUnit" data-toggle="modal" data-target="#modalCreate">Tambah</button>
                            @else
                            @endif 
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
                                    <th>Nama Barang</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Unit</th>
                                    <th>Total Stock</th>
                                    <th>Keterangan</th>
                                    <th>Terakhir diUbah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no=1; ?>
                            @if($customergmb->count() > 0)
                            @foreach($customergmb as $res=>$cus_gmb)
                                <tr>
                                    <th>{{$res + $customergmb->firstitem()}}</th>
                                    <td>{{$cus_gmb->nama_barang}}</td>
                                    <td>Rp. {{$cus_gmb->harga_beli}}</td>
                                    <td>Rp. {{$cus_gmb->harga_jual}}</td>
                                    <td>{{$cus_gmb->unit}}</td>
                                    <td>{{$cus_gmb->total_stock}}</td>
                                    <td>{{$cus_gmb->text}}</td>
                                    <td>{{Auth::user()->name}}</td>
                                    <td>
                                        <button class="btn btn-icon" type="menu"><i class="fas fa-file"></i></button>
                                        <button class="btn btn-icon" id="btnStock" data-toggle="modal" data-target="#modalStock-{{$cus_gmb->id}}" ><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-icon" id="btnStock" data-toggle="modal" data-target="#modalUpdate-{{$cus_gmb->id}}" ><i class="fas fa-user-edit"></i></button>
                                        <button gmb-id="{{$cus_gmb->id}}" gmb-nama="{{$cus_gmb->nama_barang}}" class="btn btn-icon deletecust" id="deletestock" type="reset"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="9"><center>Data Masih Kosong</center></td>
                                </tr>
                            @endif
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
                                <h6 class="modal-title titleModal">Tambah Barang</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   <form action="{{route('customergmbstore')}}" method="POST">
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
                                                <label>Harga Beli</label>
                                                <input type="text" name="harga_beli" id="beligmb" class="form-control" min="0" placeholder="harga beli" required/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Harga Jual</label>
                                                <input type="text" name="harga_jual" id="jualgmb" class="form-control" min="0" placeholder="harga jual" required/>
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
            <!-- /# -->


            <!----Modal Edit stock-->
              @foreach($customergmb  as $data_gmb) 
              <div class="modal fade" id="modalStock-{{$data_gmb->id}}" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title titleModal">Edit Barang</h6>
                                <div class="vl"></div>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ url('/cust_gmb/edit/'.$data_gmb->id) }}" method="POST">
                                      @csrf 
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Nama Barang</label>
                                                <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" value="{{$data_gmb->nama_barang}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Harga Beli</label>
                                                <input type="text" name="harga_beli" id="belieditgmb-{{$data_gmb->id}}" class="form-control" min="0" value="{{($data_gmb->harga_beli) }}"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Harga Jual</label>
                                                <input type="text" name="harga_jual" id="jualeditgmb-{{$data_gmb->id}}" class="form-control" min="0" value="{{($data_gmb->harga_jual) }}"/>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Stock</label>
                                                <input type="number" name="stock" id="stockgmb-{{$data_gmb->id}}" class="form-control" min="0" placeholder="Stock" value="{{$data_gmb->total_stock}}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Unit</label>
                                                <select name="unit" id="inputState" class="form-control">
                                                    <option selected>{{$data_gmb->unit}}</option>
                                                    <option>pcs</option>
                                                    <option>Karung</option>
                                                    <option>Roll</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Type</label>
                                                <select name="type" id="inputState" class="form-control">
                                                    <option selected>{{$data_gmb->type}}</option>
                                                    <option>3/4</option>
                                                    <option>All Size</option>
                                                    <option>BMM</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Total Stock</label>
                                                <input type="number" name="total_stock" id="sumgmb-{{$data_gmb->id}}" class="form-control" value="{{$data_gmb->total_stock}}">
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <textarea name="text" class="form-control" rows="4" id="comment" placeholder="Note">{{$data_gmb->text}}</textarea>
                                            </div>
                                        </div>
                                        <div class="basic-form">
                                          <div class="form-group">
                                            <button type="submit" class="btn btn-default" style="background-color:#55B0DC; color: #fff;">Edit</button>
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!----End Modal Edit stock-->


                <!----Modal edit tambah/kurang gmb-->
                @foreach($customergmb  as $res_cus)
                    <div class="modal fade" id="modalUpdate-{{$res_cus->id}}" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h6 class="modal-title titleModal">Edit Tambah/Kurang Stock</h6>
                                    <div class="vl"></div>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ url('/cust_gmb/edit/update/'. $res_cus->id) }}" method="POST">
                                           @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Nama Barang</label>
                                                    <input type="text" name="nama_barang" class="form-control" value="{{$res_cus->nama_barang}}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Stock</label>
                                                    <input id="stockInitgmb-{{$res_cus->id}}" type="number" name="stock" class="form-control" value="{{$res_cus->total_stock}}" readonly>
                                                </div>
                                               
                                                <div class="form-group col-md-6">
                                                    <div class="row">
                                                        <div class="col">
                                                            <label>Choose</label>
                                                            <select name="choose" id="mathStategmb-{{$res_cus->id}}" class="form-control">
                                                                <option selected>{{$res_cus->choose}}</option>
                                                                <option value="+">Penambahan Stock</option>
                                                                <option value="-">Pengurangan Stock</option>
                                                            </select>
                                                        </div>
                                                        <div class="col">
                                                            <label>Update Stock</label>
                                                            <input id="stockFinalgmb-{{$res_cus->id}}" type="number" name="update_stock" class="form-control" value="{{$res_cus->update_stock}}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Unit</label>
                                                    <input type="text" name="unit" class="form-control" value="{{$res_cus->unit}}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Type</label>
                                                    <input type="text" name="type" class="form-control" value="{{$res_cus->type}}" readonly>
                                                </div>
                                                <div class="form-group col-md-6">
                                                  <label>Total Stock</label>
                                                  <input type="hidden" name="total_stock" id="totalStockgmb-{{$res_cus->id}}"  class="form-control" value="{{$res_cus->total_stock}}" readonly>
                                                </div>
                                            </div>
                                            <div class="basic-form">
                                                <div class="form-group">
                                                    <textarea name="text" id="updatetext" class="form-control" rows="4" placeholder="Note">{{$res_cus->text}}</textarea>
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
                    <!--end of Modal edit stock1-->

            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
<script>
    $('.deletecust').click(function(){
       var gmbid = $(this).attr('gmb-id');
       var gmbnama = $(this).attr('gmb-nama');
        swal({
            title: "Yakin?",
            text: "data "+gmbnama+" akan dihapus",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
            if (willDelete) {
                window.location =  "/delete/cust/"+gmbid+""
                swal("data berhasil dihapus", {
                icon: "success",
                });
            } else {
                swal("Data tidak jadi dihapus");
            }
        });
    });
    
</script>

@foreach($customergmb  as $data_gmb)
<script>
    $("#stockgmb-{{$data_gmb->id}}").keyup(function(){
        var a = parseInt($("#stockgmb-{{$data_gmb->id}}").val());
        var b = a;
        $("#sumgmb-{{$data_gmb->id}}").val(b);
    });            
</script>
@endforeach


@foreach($customergmb  as $res_cus)
<script>
    $(function(){
        $('#stockFinalgmb-'+`{{$res_cus->id}}`).keyup(function() {
            if ($('#mathStategmb-'+`{{$res_cus->id}}`).val() == "-") {
                var minStock = $('#stockInitgmb-'+`{{$res_cus->id}}`).val() - $('#stockFinalgmb-'+`{{$res_cus->id}}`).val();
                $('#totalStockgmb-'+`{{$res_cus->id}}`).val(minStock);
            } else if ($('#mathStategmb-'+`{{$res_cus->id}}`).val() == "+") {
                var addStock = parseInt($('#stockInitgmb-'+`{{$res_cus->id}}`).val()) + parseInt($('#stockFinalgmb-'+`{{$res_cus->id}}`).val());
                $('#totalStockgmb-'+`{{$res_cus->id}}`).val(addStock);
            }
        });
    });
</script>
@endforeach

<script>
      $(document).ready(function(){
        $("#beligmb").keyup(function(){
            // console.log("berhasil")
            $(this).maskNumber({integer: true, thousands: "."})
        })
    })
</script>
<script>
      $(document).ready(function(){
        $("#jualgmb").keyup(function(){
            // console.log("berhasil")
            $(this).maskNumber({integer: true, thousands: "."})
        })
    })
</script>

@foreach($customergmb  as $data_gmb)
<script>
      $(document).ready(function(){
        $("#belieditgmb-{{$data_gmb->id}}").keyup(function(){
            // console.log("berhasil")
            $(this).maskNumber({integer: true, thousands: "."})
        })
    })      
</script>
@endforeach

@foreach($customergmb  as $data_gmb)
<script>
      $(document).ready(function(){
        $("#jualeditgmb-{{$data_gmb->id}}").keyup(function(){
            // console.log("berhasil")
            $(this).maskNumber({integer: true, thousands: "."})
        })
    })      
</script>
@endforeach


@endpush
