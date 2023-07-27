<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="logo-icon" sizes="76x76" href="{{ asset('assets/images/logo.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/logo.png') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lib/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!---Fontawesome-->
    <link
    rel="stylesheet"1
    href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"
  />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://stackpath.boostrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
  />
</head>

<body>
    @yield('content')


    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>

    <script>
      $(".toggle-password").click(function() {
    $(this).toggleClass("fa-eye fa-eye-slash");
    input = $(this).parent().find("input");
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
    });
    </script>
</body>
</html>