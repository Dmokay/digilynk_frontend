<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Digilynk</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!-- Styles -->
        <link href='vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,300' rel='stylesheet' type='text/css'>
        <link href="fonts/Stroke-Gap-Icons-Webfont/style.css" rel="stylesheet" type="text/css" />

        <!-- components -->
        <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="vendor/owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" /> 
        <link href="vendor/slider-pro/dist/css/slider-pro.min.css" rel="stylesheet" type="text/css" /> 
        <link href="vendor/slick-carousel/slick/slick.css" rel="stylesheet" type="text/css" /> 
        <link href="vendor/animate.css/animate.min.css" rel="stylesheet" type="text/css" /> 
        <link href="vendor/fancybox/source/jquery.fancybox.css" rel="stylesheet" type="text/css" /> 

        <link href="css/main.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-scrolling-animations="true" class="blue-theme">
        
        <div id="page-preloader"><span class="spinner"></span></div>
        
        @include('layouts.includes.header')

        @yield('content')

        @include('layouts.includes.footer')


        <!-- Scripts -->

        <!-- components -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="vendor/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="vendor/owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="vendor/waypoints/lib/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="vendor/slider-pro/dist/js/jquery.sliderPro.min.js" type="text/javascript"></script>
        <script src="vendor/slick-carousel/slick/slick.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js" type="text/javascript"></script>
        <script src="vendor/wow/dist/wow.min.js" type="text/javascript"></script>
        <script src="vendor/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="js/modernizr.js" type="text/javascript"></script>

        <!-- custom scripts -->
        <script src="js/contact.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/map.js" type="text/javascript"></script>

    </body>
</html>


