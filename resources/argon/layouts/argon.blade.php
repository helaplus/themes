<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Mifos Mobi', 'Mifos Mobi') }}</title>
    <!-- Favicon -->

    <link href="{{ asset('argon') }}/img/brand/mifos-mobi-logo.png" rel="icon" type="image/jpg">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
{{--    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('plugins/simple-line-icons/css/simple-line-icons.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('plugins/jquery.dataTables/dataTables.bootstrap.min.css') }}">
    {{--<link rel="stylesheet" href="{{ asset('css/custom-styles.css') }}">--}}
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('argon') }}/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="{{ asset('argon') }}/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- Argon CSS -->

    <link type="text/css" href="{{ asset('argon') }}/css/argon.css?v=1.0.0" rel="stylesheet">
    <link type="text/css" href="{{ asset('argon') }}/css/custom.css?v=1.0.0" rel="stylesheet">
</head>
<body class="{{ $class ?? '' }}">
@auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('helaplusthemes::partials.navbars.sidebar')
@endauth
<div class="main-content">
    @include('helaplusthemes::partials.navbars.navbar')
    @yield('content')
</div>

@guest()
    @include('helaplusthemes::partials.footers.guest')
@endguest

<script src="{{ asset('argon') }}/vendor/jquery/dist/jquery.min.js"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('plugins/jquery/jquery-2.1.3.min.js') }}"></script>
<!-- Datatables -->
<script src="{{ asset('plugins/jquery.dataTables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/jquery.dataTables/dataTables.bootstrap.min.js') }}"></script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Restfulizer.js - A tool for simulating put,patch and delete requests -->
<script src="{{ asset('js/restfulizer.js') }}"></script>
<!-- Custom Javascript -->
<script src="{{ asset('js/custom-scripts.js') }}"></script>
<script src="{{ asset('argon') }}/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

@stack('js')

<!-- Argon JS -->
<script src="{{ asset('argon') }}/js/argon.js?v=1.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
@stack('scripts')

</body>
</html>