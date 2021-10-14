<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="logo-icon" sizes="76x76" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/logo.png') }}">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/calendar2/pignose.calendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/chartist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/weather-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/menubar/sidebar.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!---Fontawesome-->
    <link
    rel="stylesheet"
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://stackpath.boostrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  />

     
   <!--Datepicker-->
   <!-- <link href="{{asset('datepicker/bootstrap.min.css')}}" rel="stylesheet" media="screen">
   <link href="{{asset('datepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen"> -->

   <!--formden.js akan membuat output data AJAX-->
  <!-- <script type="text/javascript" src="https://formden.com/static/cdn/formden.js"></script> -->
  <!-- bootstrap-iso digunakan untuk mengatur tampilan -->
  <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> -->
  <!--Menambahkan libray font awesome karena kita menggunakan ikon untuk tampilannya-->
  <!-- <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" /> -->



</head>
<body>

    @include('layouts.navbar.index')
    @include('layouts.sidebar.index')
    @yield('content')
    <!-- jquery vendor -->
    <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('assets/js/dashboard2.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!--jsdeliver-->
    <!-- <script type="text/javascript" src="{{asset('datepicker/jquery/jquery-1.8.3.min.js')}}" charset="UTF-8"></script>
    <script type="text/javascript" src="{{asset('datepicker/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('datepicker/js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
    <script type="text/javascript" src="{{asset('datepicker/js/locales/bootstrap-datetimepicker.id.js')}}" charset="UTF-8"></script> -->

     <!-- Menambahkan jQuery -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->

    <!-- Menambahakan Date Range Picker -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> -->


    @stack('script')
</body>