@extends('layouts.template')
@section('title','Report Inventori GBM')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="row page-titles col-sm-12 ml-1">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4 style="color:black;">Report Inventory GBM</h4>
                    </div><br>
                    <div class="welcome-text col-sm-3" style="margin-left:-15px;" >
                         <a href="{{route('inventori')}}"><button type="button" class="btn btn-primary">SPN</button></a>
                         <a href=""><button type="button" class="btn btn-primary">GMB</button></a>
                    </div>
                </div>
                <div class="col-md-12" style="background-color: #; border: 1px solid #17202A; height: auto; margin: 10px 0px; padding: 3px; text-align: left; width: auto;">
                 <div class="row ml-1">
                   <div class="col-sm-4">
                     <button type="button" class="btn btn-primary" style="width:100px;height:30px;"><p style="font-size:10px;"><i class="far fa-file-excel">  Export as Excel</i></p></button>
                     <button type="button" class="btn btn-primary" style="width:100px;height:30px;"><p style="font-size:10px;"><i class="fas fa-file-pdf">  Export as PDF</i></p></button>
                   </div>
                   <div class="col-sm-4">

                   </div>
                   <div class="col-sm-4">
                   <form action="{{route('inventorigmb')}}" method="GET">
                       @csrf
                        <label for="birthday">Transaksi Date </label></br>
                        <input type="date" id="fromdate" name="date" required>
                        <input type="date" id="todate" name="todate" required>
                          <input type="submit">
                    </form>
                   </div>
                 </div>          
                 <div class="row ml-1">
                   <div class="col-sm-4">
                     <h5>Transaksi Report</h5>
                     <p>Date : 18 April 2021 - 23 April 2021</p>
                   </div>  
                 </div>            
                <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-responsive-sm">
                                <thead>
                                    <tr class="table-iven" id="users-table" align="center">
                                        <th>Trx Date</th>
                                        <th>Nama Barang</th>
                                        <th>Unit</th>
                                        <th>Stock Record</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody >
                                  
                                 <tr>
                                     <td colspan="6" style="background:#87CEFA;"><p style="margin-left:50px;height:3px;">20 April 2021</p></td>
                                 </tr>
                                 @foreach($datagmb as $valuegmb)
                                 <tr align="center">
                                     <td>{{$valuegmb->waktu}}</td>
                                     <td>{{$valuegmb->nama_barang}}</td>
                                     <td>{{$valuegmb->unit}}</td>
                                     <td>
                                        <p style="background-color:#00FF00;width:100px;"> {{$valuegmb->choose}} {{$valuegmb->update_stock}} </p>
                                     </td> 
                                     <td>
                                        {{$valuegmb->text}}
                                     </td> 
                                     <td>
                                        {{$valuegmb->keterangan}}
                                     </td> 
                                 </tr>
                               @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!----Modal Create-->        
            </div>
        </div>
    </div>
</div>

@endsection

@push('script')

@endpush
