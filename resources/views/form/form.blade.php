<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title>@yield('title')</title>
    <base href="{{env('APP_URL')}}">
    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="favicon.png" type="image/png">

    <!-- ==== Google Font ==== -->

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="assets/css/fontawesome-stars-o.min.css">
    
    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="assets/css/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="assets/css/colors/theme-color-1.css" id="changeColorScheme">
    
    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    {{-- <!-- Preloader Start -->
    <div id="preloader">
        <div class="preloader bg--color-1--b" data-preloader="1">
            <div class="preloader--inner"></div>
        </div>
    </div> --}}
    <!-- Preloader End -->

    {{-- Main --}}
    @yield('content')
    {{-- End Main --}}
     <!-- ==== jQuery Library ==== -->
     <script src="assets/js/jquery-3.2.1.min.js"></script>

     <!-- ==== Bootstrap Framework ==== -->
     <script src="assets/js/bootstrap.min.js"></script>
 
     <!-- ==== StickyJS Plugin ==== -->
     <script src="assets/js/jquery.sticky.min.js"></script>
 
     <!-- ==== HoverIntent Plugin ==== -->
     <script src="assets/js/jquery.hoverIntent.min.js"></script>
 
     <!-- ==== Marquee Plugin ==== -->
     <script src="assets/js/jquery.marquee.min.js"></script>
 
     <!-- ==== Validation Plugin ==== -->
     <script src="assets/js/jquery.validate.min.js"></script>
 
     <!-- ==== Isotope Plugin ==== -->
     <script src="assets/js/isotope.min.js"></script>
 
     <!-- ==== Resize Sensor Plugin ==== -->
     <script src="assets/js/resizesensor.min.js"></script>
 
     <!-- ==== Sticky Sidebar Plugin ==== -->
     <script src="assets/js/theia-sticky-sidebar.min.js"></script>
 
     <!-- ==== Zoom Plugin ==== -->
     <script src="assets/js/jquery.zoom.min.js"></script>
 
     <!-- ==== Bar Rating Plugin ==== -->
     <script src="assets/js/jquery.barrating.min.js"></script>
 
     <!-- ==== Countdown Plugin ==== -->
     <script src="assets/js/jquery.countdown.min.js"></script>
 
     <!-- ==== RetinaJS Plugin ==== -->
     <script src="js/retina.min.js"></script>
 
     <!-- ==== Google Map API ==== -->
     {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK9f7sXWmqQ1E-ufRXV3VpXOn_ifKsDuc"></script> --}}
 
     <!-- ==== Main JavaScript ==== -->
     <script src="js/main.js"></script> 
 
 </body>
 </html>
 