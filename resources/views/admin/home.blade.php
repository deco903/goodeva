@extends('layouts.template')
@section('content')
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1>Hello, <span>Welcome Here</span></h1>
                            <li><a href="{{route('logout')}}">Logout</a></li>
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
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib ">
                                    <img src="assets/images/kapal.jpg" style="width: 80px; height: 80px; border-radius: 100%;">
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Profit</div>
                                    <div class="stat-digit">1,012</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib ">
                                    <img src="assets/images/kapal.jpg" style="width: 80px; height: 80px; border-radius: 100%;">
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Profit</div>
                                    <div class="stat-digit">1,012</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="stat-widget-one">
                                <div class="stat-icon dib ">
                                    <img src="assets/images/kapal.jpg" style="width: 80px; height: 80px; border-radius: 100%;">
                                </div>
                                <div class="stat-content dib">
                                    <div class="stat-text">Total Profit</div>
                                    <div class="stat-digit">1,012</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
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
                    <!-- /# column -->
                    <!-- <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="year-calendar"></div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-box">
                                <div id="calendar"></div>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- BEGIN MODAL -->
                        <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">
                                <strong>Add New Event</strong>
                                </h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
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
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">
                                <strong>Add a category </strong>
                                </h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                <div class="row">
                                    <div class="col-md-6">
                                    <label class="control-label">Category Name</label>
                                    <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name" />
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
                    <!-- /# column -->
                </div>
                <!-- /# row -->
            </section>
        </div>
    </div>
</div>
@endsection