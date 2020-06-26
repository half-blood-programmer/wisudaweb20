<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Custom Theme Style -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

        @if(Request::url() === route('home'))
        <title>{{ config('app.name') }} - {{ config('app.description') }}</title>
        @else
        <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>
        @endif
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="fixedasset/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="fixedasset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/fullpage.min.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/animate.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/templatemo-style.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/responsive.css">

    </head>

        {{-- @if(Request::url() !== route('home'))
            <video autoplay muted loop id="myVideo">
            <source src="fixedasset/images/video-bg.mp4" type="video/mp4">
            </video>
        @endif --}}

    <body style="background-image: url(fixedasset/images/bg-cloud.png);"> {{-- style="background-image: url('fixedasset/images/star.png')"> --}}
        {{-- <div id="video">
            <div class="preloader">
                <div class="preloader-bounce">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div> --}}
                @include('layout.part.topnavguest')

                    @yield('content')

                {{-- @include('layout.part.footer') --}}



        <script src="fixedasset/js/parralax.js"></script>
        <script src="fixedasset/js/main.js"></script>
        <script src="fixedasset/js/jquery.js"></script>
        <script src="fixedasset/js/bootstrap.min.js"></script>
        <script src="fixedasset/js/fullpage.min.js"></script>
        <script src="fixedasset/js/scrolloverflow.js"></script>
        <script src="fixedasset/js/owl.carousel.min.js"></script>
        <script src="fixedasset/js/jquery.inview.min.js"></script>
        <script src="fixedasset/js/form.js"></script>
        <script src="fixedasset/js/custom.js"></script>


    </body>
</html>
