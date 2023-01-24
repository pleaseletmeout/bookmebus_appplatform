<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.user.header')
    <style>
        #edit_button:hover{
            color: #28a745;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @yield('content')

        @include('layouts.user.footer')
    </div>
    <!-- ./wrapper -->

    <script src="{{asset('/assets/')}}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/assets/')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/assets/')}}/dist/js/adminlte.min.js"></script>
    <script src="{{asset('/assets/')}}/plugins/jquery/jquery.min.js"></script>
    <!-- DataTables -->
    <script src="{{asset('/assets/')}}/plugins/datatables/jquery.dataTables.js"></script>
    <script src="{{asset('/assets/')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/assets/')}}/dist/js/demo.js"></script>
    <script src="{{asset('/assets/')}}/dist/js/pages/dashboard3.js"></script>

    <script>
    $(function() {
        $("#example1").DataTable();
    });
    </script>
</body>

</html>