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
        @yield('title')
    </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
      <!--Shortcut Icon -->
      <link rel="shorcut icon" href="{{ asset('style/images/icon2.png')}}">
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