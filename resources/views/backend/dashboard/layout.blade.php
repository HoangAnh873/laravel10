<!DOCTYPE html>
<html lang="en">
    <head>
        @include('backend.dashboard.component.head')    
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="Backend/AdminLTE-3.1.0/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('backend.dashboard.component.nav')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('backend.dashboard.component.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @include($template)
        <!-- /.content-wrapper -->
        @include('backend.dashboard.component.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        @include('backend.dashboard.component.script')
        </body>
</html>
