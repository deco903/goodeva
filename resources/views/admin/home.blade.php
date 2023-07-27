@extends('layouts.template')
@section('content')
<div class="content-body">
            <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 p-r-0 title-margin-right">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Kapal Pribadi</h3>
                    </div>
                </div>
            </div>
            <!-- /# column -->
            <div class="col-lg-4 p-l-0 title-margin-left">
                <div class="page-header">
                    <div class="page-title">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Home</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>


        <!----Column-->
        <section id="main-content">
            <div class="row">  
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase" style="color: #000;">
                                       Kapal Idle</div>
                                </div>
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-uppercase mb-1 ml-5 mt-4">Unit</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$onIdle}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase" style="color: #000;">
                                       Kapal on Dutty</div>
                                </div>
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-uppercase mb-1 ml-5 mt-4">Unit</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$onDKP}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase" style="color: #000;">
                                       Total Kapal</div>
                                </div>
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-light text-uppercase mb-1 ml-5 mt-4">Unit</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$sum}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <section>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Kapal Pribadi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name Kapal</th>
                                            <th>Status</th>
                                            <th>Asal</th>
                                            <th>Tujuan</th>
                                            <th>Estimasi Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1; ?>
                                     @if($data->count() > 0)
                                        @foreach($data as $datas=>$res)
                                        <tr>
                                            <td>{{ $datas + $data->firstitem() }}</td>
                                            <td>{{ $res->nama_kapal }}</td>
                                            <td>
                                                @if($res->keterangan == 'DONE')
                                                    <p><span class="badge badge-success">Expired</span></p>
                                                 @else
                                                    <p><span class="badge badge-primary">Active</span></p>
                                                @endif
                                            </td>
                                            <td><span>{{ $res->keberangkatan }}</span></td>
                                            <td>{{ $res->tujuan }}</td>
                                            <td>{{date('d-M-y', strtotime($res->sewa_selesai))}}</td>
                                        </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6"><center>Data Masih Kosong</center></td>
                                    </tr>     
                                    @endif
                                    </tbody>
                                </table>
                                {{$data->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- row -->


                <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-intro-title">Calendar</h4>
                        <div class="">
                            <div id="external-events" class="my-3">
                                
                                <div data-class="bg-primary"><i class="fa fa-move"></i>Kapal Pribadi</div>
                                <div data-class="bg-success"><i class="fa fa-move"></i>Kapal Sewa
                                </div>

                            </div>
                            <!-- checkbox -->
                           
                            
                        </div>
                    </div>
                </div>
                <div class="card"  style="border: 4px solid black;">
                    <div class="card-body">
                      <p class="garis">
                        <h4 class="card-intro-title">Noted</h4>
                         <div class="">
                            <div id="external-events" class="my-3">
                               <p>User</p>
                               <p>Text : Test 1</p>
                            </div>  
                        </div>

                        <form action="{{route('inputext')}}" method="POST">
                        @csrf
                        <div class="">
                            <div id="external-events" class="my-3">
                                <textarea name="note" class="form-control" rows="4" id="comment" placeholder="Texfield" required></textarea>
                            </div>
                            <div id="external-events" class="my-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        </form>
                      </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar" class="app-fullcalendar" >

                        </div>
                    </div>
                </div>
            </div>

            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add New Events</strong></h4>
                        </div>
                        <div class="modal-body">

                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                event</button>

                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-category">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add a category</strong></h4>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Category Name</label>
                                        <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Choose Category Color</label>
                                        <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                            <option value="success">Success</option>
                                            <option value="danger">Danger</option>
                                            <option value="info">Info</option>
                                            <option value="pink">Pink</option>
                                            <option value="primary">Primary</option>
                                            <option value="warning">Warning</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
 
     <script>
$(document).ready(function () {
   
   var SITEURL = "{{ url('/') }}";
     
   $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
     
   var calendar = $('#calendar').fullCalendar({
       editable: true,
       events: SITEURL + "/calendarpribadi",
       displayEventTime: false,
       editable: false,
       eventStartEditable: false,
       nextDayThreshold:'00:00', // not 00:00:00
       eventRender: function (event, element, view) {
           if (event.allDay === 'true') {
                   event.allDay = true;
           } else {
                   event.allDay = false;
           }
       }
      
   
   });
    
   });
    
   function displayMessage(message) {
       toastr.success(message, 'Event');
   } 
     
    </script>

    <!-- <script>
$(document).ready(function () {
   
   var SITEURL = "{{ url('/') }}";
     
   $.ajaxSetup({
       headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
     
   var calendar = $('#calendarsewa').fullCalendar({
       editable: true,
       events: SITEURL + "/calendarsewa",
       displayEventTime: false,
       editable: true,
       eventColor: '#7ED321',
       eventRender: function (event, element, view) {
           if (event.allDay === 'true') {
                   event.allDay = true;
           } else {
                   event.allDay = false;
           }
       },
   
   });
    
   });
    
   function displayMessage(message) {
       toastr.success(message, 'Event');
   } 
   </script> -->
      
@endpush
@push('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/10/highcharts.js"></script>

<script>
    Highcharts.chart('container-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Browser market shares in May, 2020',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Chrome',
            y: 70.67,
            sliced: true,
            selected: true
        }, {
            name: 'Edge',
            y: 14.77
        },  {
            name: 'Firefox',
            y: 4.86
        }, {
            name: 'Safari',
            y: 2.63
        }, {
            name: 'Internet Explorer',
            y: 1.53
        },  {
            name: 'Opera',
            y: 1.40
        }, {
            name: 'Sogou Explorer',
            y: 0.84
        }, {
            name: 'QQ',
            y: 0.51
        }, {
            name: 'Other',
            y: 2.6
        }]
    }]
});
</script>
@endpush