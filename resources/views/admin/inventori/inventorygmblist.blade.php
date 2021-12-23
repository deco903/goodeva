@extends('layouts.template')
@section('title','Report Inventori SPN')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">  
            <div class="row page-titles col-sm-12 ml-1">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4 style="color:black;">Report Inventory SPN 14 Hari Terakhir</h4>
                    </div><br>
                    <div class="welcome-text col-sm-3" style="margin-left:-15px;">
                       <a href="{{route('indexspntgl')}}"><button type="button" class="btn btn-light" style="height:35px;margin-bottom:-10px;">SPN</button></a>
                       <a ><button type="button" class="btn btn-primary" style="margin-bottom:2px;">GBM</button></a>
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
                   <form action="{{route('inventorigmb')}}" method="GET">
                       @csrf
                        <label for="birthday">Transaksi Date </label></br>
                        <input type="date" id="fromdate" name="fromDate" required>
                        <input type="date" id="todate" name="toDate" required>
                        <button class="btn btn-primary mt-0" type="submit">Search</button>
                    </form>
                   </div>
                 </div>          
                 <div class="row ml-1">
                   <div class="">
                     <h5>Transaksi Report</h5>
                    </div>&nbsp;&nbsp; 
                    <div class="">
                      <form action="{{route('searchlistgmb')}}" method="GET">
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
                    </div>
                    <div>&nbsp;&nbsp;
                      <a href="{{route('indexgmb')}}"><button class="btn btn-light mt-0" type="submit">All</button></a>
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
                                        <th>Stock awal</th>
                                        <th>In/Out</th>
                                        <th>Stock Akhir</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody >
                                @foreach($datagmb as $value=>$keygmb)
                                  <tr align="center">
                                    
                                    <td>{{date('d-M-y', strtotime($keygmb->created_at))}}</td>
                                    <td>{{$keygmb->nama_barang}}</td>    
                                    <td>{{$keygmb->unit}}</td>
                                    <td>{{$keygmb->stock_awal}}</td>
                                    <td>
                                        @if($keygmb->choose == '+')
                                            <p style="background-color:#77DD77;color:#FFFFFF;width:100px;"> {{$keygmb->choose}} {{$keygmb->update_stock}} </p>
                                          @elseif($keygmb->choose == ' ')
                                            <p style="color:black;width:100px;"> {{$keygmb->choose}} {{$keygmb->update_stock}} </p>
                                          @else 
                                            <p style="background-color:#FF3D33;color:#FFFFFF;width:100px;"> {{$keygmb->choose}} {{$keygmb->update_stock}} </p>
                                        @endif
                                    </td>
                                    <td> {{$keygmb->total_stock}}</td>
                                    <td>{{$keygmb->text}}</td>
                                    <td>
                                      @if($keygmb->status == 'OK')
                                         <p>{{$keygmb->status}}</p>
                                        @else
                                        <p style="background-color:#A52A2A;color:#FFFFFF;width:100px;">{{$keygmb->status}}</p>
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

