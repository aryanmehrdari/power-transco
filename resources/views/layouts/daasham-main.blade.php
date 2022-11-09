@section('NamePageSection')
    Dashboard
@endsection
<html lang="en">
<head>





    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | @yield('NamePageSection')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">









    <!--
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>AdminPanel | Dashboard</title>

    <\!-- Font Awesome Icons --\>
    <link rel="stylesheet" href="/assets/admin/plugins/fontawesome-free/css/all.min.css">
    <\!-- overlayScrollbars --\>
    <link rel="stylesheet" href="/assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <\!-- Theme style --\>
    <link rel="stylesheet" href="/assets/admin/dist/css/adminlte.min.css">
    <\!-- Google Font: Source Sans Pro --\>
    <link rel="stylesheet" href="/assets/admin/dist/css/fontawsome.css">

    <link rel="stylesheet" href="/assets/admin/dist/css/googlefont.css">
    <\!-- DataTables --\>
    <link rel="stylesheet" href="/assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <\!-- Ekko Lightbox --\>
    <link rel="stylesheet" href="/assets/admin/plugins/ekko-lightbox/ekko-lightbox.css">
    <\!-- Ionicons --\>
    <link rel="stylesheet" href="/assets/admin/dist/css/ionicons.min.css">
-->

</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">
    <div>
        @include("partials.dasham-nav")
        @include("partials.dasham-sidebar")
    </div>
    <div>
    <div class="content-wrapper">
        @include("partials.dasham-header")
        @yield("mainSection")
    </div>
        @include("partials.dasham-footer")
    </div>
    </div>


<!--
<script src="/assets/plugins/jquery/jquery.min.js"></script>

<script src="/assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/admin/dist/js/demo.js"></script>
<script src="/assets/admin/dist/js/adminlte.js"></script>
<script src="/assets/admin/plugins/chart.js/Chart.min.js"></script>
<script src="/assets/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/assets/admin/plugins/raphael/raphael.min.js"></script>
<script src="/assets/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/assets/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="/assets/admin/dist/js/adminlte.min.js"></script>
<script src="/assets/admin/dist/js/mydash.js"></script>
-->

<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/assets/admin/dist/js/mydash.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>


@yield('datatableSection')
@yield('LamasabSection')
@yield("SettingSection")
@yield('scripts')


</body>
</html>
