@extends('layouts.template')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Inventory SPN</h4>
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

                <!-- Enter your name: <input type="text" id="fname" onkeyup="myFunction()">

                <p>My name is: <span id="demo"></span></p> -->
               
             
                <input type="number" step="any" name="subtotal" id="subtotal" class="form-control" value="0" placeholder="sub total">
                <input type="number" step="any"  name="ppn" id="ppn" class="form-control" value="0" placeholder="ppn">
                <input type="text" name="total" id="total" class="form-control" value="0" readonly>
                    
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')
<!-- <script>
function myFunction() {
  var x = document.getElementById("fname").value;
  document.getElementById("demo").innerHTML = x;
}
</script> -->
<script>
    $("#subtotal").keyup(function(){
        var a = parseInt($("#subtotal").val());
        // var b = parseInt($("#ppn").val());
        var c = a;
        $("#total").val(c);
    });              

    $("#ppn").keyup(function(){
        var a = parseInt($("#subtotal").val());
        var b = parseInt($("#ppn").val());
        var c = a+b;
        $("#total").val(c);
    });
</script>

@endpush