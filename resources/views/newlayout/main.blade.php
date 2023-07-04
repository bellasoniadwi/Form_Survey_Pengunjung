<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>
        Sinarmed || 
        @yield('title')
    </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('style/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('style/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('style/images/fevicon.png')}}" type="image/gif" />
      <!-- font css -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('style/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
    @include('sweetalert::alert')
    
    @include('newlayout.header')
    
        @yield('content')

    @include('newlayout.footer')


    <!-- Javascript files-->
    <script src="{{ asset('style/js/jquery.min.js')}}"></script>
    <script src="{{ asset('style/js/popper.min.js')}}"></script>
    <script src="{{ asset('style/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('style/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('style/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('style/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{ asset('style/js/custom.js')}}"></script>
   </body>