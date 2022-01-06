<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calon Karyawan EDI</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ URL::asset('AdminLTE/plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <nav class="navbar navbar-dark bg-danger">
        <h1>Aplikasi Calon Karyawan PT.EDI </h1>
    </nav>
    <div class="wrapper">

        <!-- Main Sidebar Container -->
        <aside class="sidebar sidebar-dark-primary elevation-4" style="width: 220px; float: left;">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ URL::asset('AdminLTE/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Daftar</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                        <!-- Heading -->
                        <div class="sidebar-heading">
                            Selamat Datang {{ Session::get('username') }}
                        </div>

                        <!-- Nav Item - Kontak -->
                        <?php if (Session::get('hak_akses') == "admin") { ?>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ url('/donor') }}">Donor</a>
                            <a class="nav-link" href="{{ url('/kantong-darah') }}">Kantong Darah</a>
                            <a class="nav-link" href="{{ url('/pendonor') }}">Pendonor</a>
                            <a class="nav-link" href="{{ url('/peramalan') }}">Peramalan</a>
                            <a class="nav-link" href="{{ url('/permintaan') }}">Permintaan</a>
                            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                        </li>
                        <?php } else if (Session::get('hak_akses') == "pmi") { ?>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ url('/donor') }}">Donor</a>
                            <a class="nav-link" href="{{ url('/kantong-darah') }}">Kantong Darah</a>
                            <a class="nav-link" href="{{ url('/pendonor') }}">Pendonor</a>
                            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                        </li>
                        <?php } else if (Session::get('hak_akses') != "") { ?>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ url('/kontak   ') }}">Data Calon Karyawan</a>
                            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                        </li>
                            <!-- if admin -->
                        <?php } else {?>
                            <a class="nav-link" href="{{ url('/kontak   ') }}">Data Calon Karyawan</a>
                            <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                        <?php } ?>
                        <!-- pendonor -->
                        <li class="nav-item">
                        </li>


                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Daftarkan diri anda</h1>
                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div id="content">
                <!-- ini tempat untuk content -->
                @yield('content')
            </div>
            <!-- /.content -->
        </div>


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ URL::asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ URL::asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ URL::asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ URL::asset('AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ URL::asset('AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ URL::asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ URL::asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ URL::asset('AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ URL::asset('AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ URL::asset('AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ URL::asset('AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('AdminLTE/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ URL::asset('AdminLTE/dist/js/pages/dashboard.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::asset('AdminLTE/dist/js/demo.js') }}"></script>
</body>

</html>
