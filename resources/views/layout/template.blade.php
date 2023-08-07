<!doctype html>
<html lang="es">
  @livewireStyles()
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title') | La colmena</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- End fonts -->
    <!-- core:css -->
    <link rel="stylesheet" href="/assets/vendors/core/core.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/assets/css/demo1/style.css">
    <!-- sweet alert -->
    <link rel="stylesheet" href="/assets/vendors/sweetalert2/sweetalert2.min.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="/assets/images/favicon.png" />
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
</head>
<body>
    @include ('layout.header')
    @include ('layout.footer')
    <!-- core:js -->
    <script src="/assets/vendors/core/core.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/assets/vendors/chartjs/Chart.min.js"></script>
    <script src="/assets/vendors/jquery.flot/jquery.flot.js"></script>
    <script src="/assets/vendors/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="/assets/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/assets/js/dashboard-light.js"></script>
    <script src="/assets/js/datepicker.js"></script>
    <!-- sweet alert -->
    <script src="/assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <!-- End custom js for this page -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <!-- End custom js for this page -->
    @yield('scripts')
    @livewireScripts()
</body>
</html>

