    <!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        <link rel="icon" type="image/png" href="{{asset('dist/img/logo.png')}}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    {{--    <link rel="stylesheet" href='{{asset("plugins/fontawesome-free/css/all.min.css")}}'>--}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    {{--    <link rel="stylesheet" href='{{asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}'>--}}
    <!-- iCheck -->
    <link rel="stylesheet" href='{{asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}'>
    <!-- JQVMap -->
    <link rel="stylesheet" href='{{asset("plugins/jqvmap/jqvmap.min.css")}}'>
    <!-- Theme style -->
    <link rel="stylesheet" href='{{asset("dist/css/adminlte.min.css")}}'>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href='{{asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}'>
    <!-- Daterange picker -->
    <link rel="stylesheet" href='{{asset("plugins/daterangepicker/daterangepicker.css")}}'>
    <!-- summernote -->
    <link rel="stylesheet" href='{{asset("plugins/summernote/summernote-bs4.min.css")}}'>

    <link rel="shortcut icon" href="{{asset('dist/img/logo.png')}}">



    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href='http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css'>
    <!--------------------- my work in css --------------------->
    <link rel="stylesheet" href='{{asset("dist/css/work.css")}}'>
    <link rel="stylesheetcomposer create-project --prefer-dist laravel/laravel laravel_datepicker"
          href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    {{--    <link rel="stylesheet" href='{{asset("dist/css/settings.css")}}'>--}}
    {{--    <link rel="stylesheet" href='{{asset("dist/css/style.css")}}'>--}}

    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}
    {{--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">--}}








</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src='{{asset("dist/img/AdminLTELogo.png")}}' alt="AdminLTELogo" height="60"
             width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('home')}}" class="nav-link">{{ __('auth.home') }}</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">{{ __('auth.website') }}</a>
            </li>
        </ul>
        <div class="dropdown">
            <button class="btn  dropdown-toggle text-light" type="button" id="dropdownMenu2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ __('auth.lang') }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">

                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </button>
            </div>
        </div>


        <!------------------- Right navbar links ------------------->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                   aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!------------------- start Notifications Dropdown Menu ------------------->

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!------------------- end Notifications Dropdown Menu ------------------->


    <!------------------- start side nav ------------------->

    @extends('layout.side_nav')


    <!-------------------end Sidebar Menu ------------------->


    <!----------------------------start dashboard content --------------------------->

    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col ">
                    <div class="card m-2 ">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">
                                        <i class="uil uil-focus-add"></i>
                    {{----------------------------------  ( 1 ) title page ----------------------------------}}
                                        @yield('title_page')
                                    </h3>
                                </div>
                                <div class="col text-right">
                                    <ol class="breadcrumb float-sm-right p-0 title">
                                        <li class="breadcrumb-item"><a
                                                href="{{route('home')}}">{{ __('auth.home') }}
                                            </a>
                                        </li>

                    {{----------------------------------  ( 2 ) title links ----------------------------------}}


                                        @yield('title_links')


                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">

                    {{----------------------------------  ( 3 ) page content ----------------------------------}}

                                @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------end dashboard content --------------------------->

    <footer class="main-footer">
        <strong>Copyright &copy; 2021-2022 <a href="https://adminlte.io">Mina saad</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <a href="https://www.facebook.com/Coveted.Death">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/mina__sa3d/">
                <i class="fa-brands fa-instagram"></i>
            </a>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<!-- jQuery UI 1.11.4 -->
<script src='{{asset("plugins/jquery-ui/jquery-ui.min.js")}}'></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src='{{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}'></script>
<!-- ChartJS -->
<script src='{{asset("plugins/chart.js/Chart.min.js")}}'></script>
<!-- Sparkline -->
<script src='{{asset("plugins/sparklines/sparkline.js")}}'></script>
<!-- JQVMap -->
<script src='{{asset("plugins/jqvmap/jquery.vmap.min.js")}}'></script>
<script src='{{asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}'></script>
<!-- jQuery Knob Chart -->
<script src='{{asset("plugins/jquery-knob/jquery.knob.min.js")}}'></script>
<!-- daterangepicker -->
<script src='{{asset("plugins/moment/moment.min.js")}}'></script>
<script src='{{asset("plugins/daterangepicker/daterangepicker.js")}}'></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src='{{asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}'></script>
<!-- Summernote -->
<script src='{{asset("plugins/summernote/summernote-bs4.min.js")}}'></script>
<!-- overlayScrollbars -->
<script src='{{asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}'></script>
<!-- AdminLTE App -->
<script src='{{asset("dist/js/adminlte.js")}}'></script>
<!-- AdminLTE for demo purposes -->
<script src='{{asset("dist/js/demo.js")}}'></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src='{{asset("dist/js/pages/dashboard.js")}}'></script>


<script src='{{asset("dist/js/main.js")}}'></script>
<script src='{{asset("dist/js/settings.js")}}'></script>


<script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function () {
        $('#Books').DataTable();
    });
</script>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

{{-------------- script for bootstrap--------------}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

@include('sweetalert::alert')


<script src="{{asset('js/jqure.js')}}"></script>

</body>

</html>
