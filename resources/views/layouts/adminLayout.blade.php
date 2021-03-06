<!DOCTYPE html>
<html lang="en">
<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 4.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description"
    content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
  <meta name="keywords"
    content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
  <title>@yield('title','notitle')</title>
  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->
  <!-- CORE CSS-->
  <link href="{{ asset('vendors/materialize-costum/materialize.css')}}" type="text/css" rel="stylesheet">
  <link href="{{ asset('vendors/style.css')}}" type="text/css" rel="stylesheet">
  <!-- Custome CSS-->
  {{-- <link href="css/custom/custom.css" type="text/css" rel="stylesheet"> --}}
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  {{-- <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet"> --}}
  <link href="{{ asset('vendors/flag-icon/css/flag-icon.min.css')}}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('develop/css/myadminstyle.css')}}">
</head>

<body>

  @yield('section')

  <!-- ================================================
      Scripts
      ================================================ -->
  <!--materialize js-->
  <script type="text/javascript" src="{{ asset('vendors/materialize-costum/materialize.min.js')}}"></script>

</body>

</html>