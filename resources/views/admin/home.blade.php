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
                <div class="col-lg-4">
                    <div class="card" style="height: 145px;">
                        <div class="stat-widget-one">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="stat-icon dib ">
                                        <h5>Kapal On Duty</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Unit</div>
                                        <div class="stat-digit">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="height: 145px;">
                        <div class="stat-widget-one">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="stat-icon dib ">
                                        <h5>Kapal idle</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Unit</div>
                                        <div class="stat-digit">2</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="height: 145px;">
                        <div class="stat-widget-one">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="stat-icon dib ">
                                        <h5>Total Kapal</h5>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Unit</div>
                                        <div class="stat-digit">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-weather">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h4>Weather Report </h4>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="float: right;">Today</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 float-left">
                                            <div class="weather">
                                                <i class="fas fa-cloud-sun-rain sunRain">
                                                    <span>73</span>
                                                </i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 float-right">
                                            <p>Friday</p>
                                            <p>Jakarta, Indonesia</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <p>Wind</p>
                                            <p>Humidity</p>
                                            <p>Pressure</p>
                                            <p>Cloud Cover</p>
                                            <p>Ceiling</p>
                                        </div>

                                        <div class="col-md-6">
                                            <p>ESE 17mph</p>
                                            <p>83%</p>
                                            <p>28.56 in</p>
                                            <p>78%</p>
                                            <p>25760ft</p>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <i class="ti ti-shine iconWeather"></i>
                                            <p>09.30</p>
                                            <p>70</p>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fas fa-cloud-sun iconWeather"></i>
                                            <p>11.30</p>
                                            <p style="top: 0;">72</p>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fas fa-cloud-sun-rain iconWeather"></i>
                                            <p>13.30</p>
                                            <p>75</p>
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fas fa-cloud-sun-rain iconWeather"></i>
                                            <p>15.30</p>
                                            <p>76</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
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
                                        <tr>
                                            <td>1</td>
                                            <td>Lorem</td>
                                            <td><span class="badge badge-success">Done</span></td>
                                            <td><span>Semarang</span></td>
                                            <td>Jakarta</td>
                                            <td>12-08-2022</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Lorem</td>
                                            <td><span class="badge badge-primary">Perjalanan</span></td>
                                            <td><span>Semarang</span></td>
                                            <td>Jakarta</td>
                                            <td>22-08-2022</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
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
                                <p>Drag and drop your event or click in the calendar</p>
                                <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>Kapal Pribadi</div>
                                <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>Kapal Sewa
                                </div>
                                <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Warning</div>
                                <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Note</div>
                            </div>
                            <!-- checkbox -->
                            <div class="checkbox checkbox-event pt-3 pb-5">
                                <input id="drop-remove" class="styled-checkbox" type="checkbox">
                                <label class="ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                            </div>
                            <a href="javascript:void()" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-event w-100">
                                <span class="align-middle"><i class="ti-plus"></i></span> Create New
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div id="calendar" class="app-fullcalendar"></div>
                    </div>
                </div>
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal fade none-border" id="event-modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add New Event</strong></h4>
                        </div>
                        <div class="modal-body"></div>
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