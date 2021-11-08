<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jqvmap/css/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fullcalendar/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!--cdn jquery sweetalert-->
    <script
    src="https://code.jquery.com/jquery-3.6.0.slim.js"
    integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
    crossorigin="anonymous"></script>

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
    
  @stack('custom-css')
  
</head>
<body>

</body>

<!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('home')}}" class="brand-logo">
                <img class="logo-compact" src="{{ asset('assets/images/logo.png') }}" alt="">
                <img class="brand-title" src="{{ asset('assets/images/logo.png') }}" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

      @include('layouts_frontend.navbar.index')
      @include('layouts_frontend.sidebar.index')
      @yield('content')

    
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Initiators -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('assets/js/inventori.js') }}"></script>
    <script src="{{ asset('assets/js/inventori.js') }}"></script>
    <script src="{{ asset('assets/js/inventoriupdate.js') }}"></script>

    <!-- Required vendors -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>


    <!---vendor calender--->
    <script src="{{ asset('assets/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqueryui/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins-init/fullcalendar-init.js') }}"></script>




    <!-- Vectormap -->
    <script src="{{ asset('assets/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/morris/morris.min.js') }}"></script>


    <script src="{{ asset('assets/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/gaugeJS/dist/gauge.min.js') }}"></script>

    <!--  flot-chart js -->
    <script src="{{ asset('assets/vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.resize.js') }}"></script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

    <!-- Counter Up -->
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/vendor/jquery.counterup/jquery.counterup.min.js') }}"></script>


    <script src="{{ asset('assets/js/dashboard/dashboard-1.js') }}"></script>

    <!--sweeet alert custom-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('script')
</body>
</html>