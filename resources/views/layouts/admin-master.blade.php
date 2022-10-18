<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Library App</title>
    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/green.css') }}">
    <link rel="stylesheet" href="{{ URL::to('assets/css/new.css') }}">

    @stack('css')

    <link rel="icon" href="{{ URL::to('favicon.ico') }}" type="image/gif" sizes="16x16">
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container -->
        @include('layouts.user-topbar')
    <!-- Header Container -->

    <!-- Dashboard Container -->
    <div class="dashboard-container">

        <!-- Dashboard Sidebar -->
        @include('layouts.admin-sidebar')
        <!-- Dashboard Sidebar -->

        @yield('content')

    </div>
    <!-- Dashboard Container -->

</div>

<!-- Scripts -->
<script src="{{ URL::to('assets/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ URL::to('assets/js/mmenu.min.js') }}"></script>
<script src="{{ URL::to('assets/js/tippy.all.min.js') }}"></script>
<script src="{{ URL::to('assets/js/simplebar.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-slider.min.js') }}"></script>
<script src="{{ URL::to('assets/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::to('assets/js/snackbar.js') }}"></script>
<script src="{{ URL::to('assets/js/clipboard.min.js') }}"></script>
<script src="{{ URL::to('assets/js/counterup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ URL::to('assets/js/slick.min.js') }}"></script>
<script src="{{ URL::to('assets/js/custom.js') }}"></script>
@stack('scripts')

<script src="{{ URL::to('assets/js/chart.min.js') }}"></script>
    
</body>
</html>