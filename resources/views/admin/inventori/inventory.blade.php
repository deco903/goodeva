@extends('layouts.template')
@section('title','Report Inventori SPN')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">  
            <div class="row page-titles col-sm-12 ml-1">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4 style="color:black;">Report Inventory SPN</h4>
                    </div><br>
                    <div class="welcome-text col-sm-3" style="margin-left:-15px;" >
                         <a href=""><button type="button" class="btn btn-primary">SPN</button></a>
                         <a href="{{route('inventorigmb')}}"><button type="button" class="btn btn-primary">GMB</button></a>
                    </div>
                </div>
                <div class="col-md-12" style="background-color: #; border: 1px solid #17202A; height: auto; margin: 10px 0px; padding: 3px; text-align: left; width: auto;">
                 <div class="row ml-1">
                   <div class="col-sm-4">
                     <a href="{{route('cetakinvspnexcel')}}"><button type="button" class="btn btn-primary" style="width:100px;height:30px;"><p style="font-size:10px;"><i class="far fa-file-excel">  Export as Excel</i></p></button></a>
                     <a href="{{route('cetakinvspn')}}" target="_blank"><button type="button" class="btn btn-primary" style="width:100px;height:30px;"><p style="font-size:10px;"><i class="fas fa-file-pdf">  Export as PDF</i></p></button></a>
                   </div>
                   <div class="col-sm-4">

                   </div>
                   <div class="col-sm-4">
                   <form action="{{route('inventori')}}" method="GET">
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
                                     <td colspan="6" style="background:#87CEFA;"><p style="margin-left:60px;height:3px;">17 April 2021</p></td>
                                 </tr>
                                @foreach($data as $value)
                                 <tr align="center">
                                     <td>{{date('d-M-y', strtotime($value->waktu))}}</td>
                                     <td>{{$value->nama_barang}}</td>
                                     <td>{{$value->unit}}</td>
                                     <td>
                                         @if($value->choose == ' ' || $value->choose == '+')
                                           <p style="background-color:#00FF00;color:#FFFFFF;width:100px;"> {{$value->choose}} {{$value->update_stock}} </p>
                                         @else
                                           <p style="background-color:#FF0000;color:#FFFFFF;width:100px;"> {{$value->choose}} {{$value->update_stock}} </p>
                                        @endif
                                     </td> 
                                     <td>
                                        {{$value->text}}
                                     </td> 
                                     <td>
                                        @if($value->status == 'OK')
                                            <p>{{$value->status}}</p>
                                         @else
                                            <p style="background-color:#A52A2A;color:#FFFFFF;width:100px;">{{$value->status}}</p>
                                        @endif
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