<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Fonts --}}
    <link href="{{ asset('frontend/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap5.min.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">



</head>
<body>
    @include('layouts.inc.frontnavbar')
    <div class="container-fluid">
        @yield('content')
    </div>
     <!-- Scripts -->
     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
     <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('frontend/js/popper.min.js') }}" defer></script>
     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
     <script src="{{ asset('frontend/js/custom.js') }}" defer></script>
     <script>
        var slider = new simpleSlider('.simple-slider-first');
    </script>
     @yield('scripts')
</body>
</html>
