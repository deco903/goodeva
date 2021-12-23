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
                         <a href="{{route('indexspntgl')}}"><button type="button" class="btn btn-light" style="height:35px;margin-bottom:-13px;">SPN</button></a>
                         <a href="{{route('indexgmb')}}"><button type="button" class="btn btn-primary">GBM</button></a>
                    </div>
                </div>
                <div class="col-md-12" style="background-color: #; border: 1px solid #17202A; height: auto; margin: 10px 0px; padding: 3px; text-align: left; width: auto;">
                 <div class="row ml-1">
                   <div class="col-sm-4">
                     <a href="{{route('cetakinvgmbexcel')}}" target="_blank"><button type="button" class="btn btn-primary" style="width:100px;height:30px;"><p style="font-size:10px;"><i class="far fa-file-excel">  Export as Excel</i></p></button></a>
                     <a href="{{route('cetakinvgmb')}}" target="_blank"><button type="button" class="btn btn-primary" style="width:100px;height:30px;"><p style="font-size:10px;"><i class="fas fa-file-pdf">  Export as PDF</i></p></button></a>
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
                   <div class="col-sm-4">
                     <h5>Transaksi Report</h5>
                     @if($datagmb != NULL)
                           <p>Date : {{date('d-M-y', strtotime(\Request::get('fromDate')))}} - {{date('d-M-y', strtotime(\Request::get('toDate')))}}</P>
                      @else 
                           <p></p>
                     @endif
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
                                 <tr>
                                   @if($datagmb != NULL)
                                      <td colspan="8" style="background:#87CEFA;"><p style="padding-left:36px;height:3px;">Date : {{date('d-M-y', strtotime(\Request::get('fromDate')))}} - {{date('d-M-y', strtotime(\Request::get('toDate')))}}</p></td>
                                    @else 
                                      <td><p></p></td>    
                                   @endif
                                  </tr>
                                 @if(count($datagmb) == 0)
                                  <tr>
                                    <td colspan="6"><center>Data Masih Kosong</center></td>
                                  </tr> 
                                  @else
                                   @foreach($datagmb as $valuegmb)
                                    <tr align="center">
                                        <td>{{date('d-M-y', strtotime($valuegmb->waktu))}}</td>
                                        <td>{{$valuegmb->nama_barang}}</td>
                                        <td>{{$valuegmb->unit}}</td>
                                        <td>{{$valuegmb->stock_awal}}</td>
                                        <td>
                                            @if($valuegmb->choose == '+')
                                              <p style="background-color:#77DD77;color:#FFFFFF;width:100px;"> {{$valuegmb->choose}} {{$valuegmb->update_stock}} </p>
                                            @elseif($valuegmb->choose == ' ')
                                              <p style="color:black;width:100px;"> {{$valuegmb->choose}} {{$valuegmb->update_stock}} </p>
                                            @else
                                              <p style="background-color:#FF3D33;color:#FFFFFF;width:100px;"> {{$valuegmb->choose}} {{$valuegmb->update_stock}} </p>
                                            @endif
                                        </td> 
                                        <td>
                                          {{$valuegmb->total_stock}}
                                        </td>
                                        <td>
                                            {{$valuegmb->text}}
                                        </td> 
                                        <td>
                                            @if($valuegmb->status == 'OK')
                                                <p>{{$valuegmb->status}}</p>
                                            @else
                                                <p style="background-color:#A52A2A;color:#FFFFFF;width:100px;">{{$valuegmb->status}}</p>
                                            @endif
                                        </td> 
                                    </tr>
                                   @endforeach
                               @endif
                                </tbody>
                            </table>
                            {{ $datagmb->appends(request()->query())->links() }}
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
