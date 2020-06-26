<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} - {{ config('app.description') }}</title>

        <!-- Bootstrap -->
        <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link href="bos/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="bos/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="bos/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="bos/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Datatables -->

        <link href="bos/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="bos/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="bos/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="bos/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="bos/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="bos/build/css/custom.min.css" rel="stylesheet">
        <link href="bos/build/css/chart.css" rel="stylesheet">

        <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
        @if(Auth::user()->id_level === 1)
        <link rel="icon" type="image/png" href="fixedasset/images/logo.png"/>
        <link rel="stylesheet" type="text/css" href="fixedasset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/fullpage.min.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/owl.carousel.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/animate.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/templatemo-style.css">
        <link rel="stylesheet" type="text/css" href="fixedasset/css/responsive.css">
        @endif


    </head>

        {{-- @if(Request::url() !== route('home'))
            <video autoplay muted loop id="myVideo">
            <source src="assets/images/video-bg.mp4" type="video/mp4">
            </video>
        @endif --}}
    @if(Auth::user()->id_level === 1)
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
    @endif

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('layoutbos.part.topnav')

                @include('layoutbos.part.sidemenu')

                    @yield('content')

                @include('layoutbos.part.footer')

            </div>
        </div>          <!-- jQuery -->
    <script src="bos/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="bos/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="bos/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="bos/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="bos/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="bos/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="bos/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="bos/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="bos/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="bos/vendors/Flot/jquery.flot.js"></script>
    <script src="bos/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="bos/vendors/Flot/jquery.flot.time.js"></script>
    <script src="bos/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="bos/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="bos/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="bos/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="bos/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="bos/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="bos/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="bos/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="bos/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="bos/vendors/moment/min/moment.min.js"></script>
    <script src="bos/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="bos/build/js/custom.min.js"></script>

    <!-- Datatables -->
    <script src="bos/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bos/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="bos/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="bos/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="bos/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="bos/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="bos/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="bos/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="bos/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="bos/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="bos/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="bos/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="bos/vendors/jszip/dist/jszip.min.js"></script>
    <script src="bos/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="bos/vendors/pdfmake/build/vfs_fonts.js"></script>

    <script src="bos/vendors/morris.js/morris.min.js"></script>
    <script src="bos/vendors/raphael/raphael.min.js"></script>
    <script src="bos/vendors/script.js"></script>

    @if(Auth::user()->id_level === 1)
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
    @endif

    </body>
</html>
