<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Fonts --}}
    <link href="{{ asset('admin/css/fontawesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/nucleo-svg.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link id="pagestyle" href="../?v=3.0.1" rel="stylesheet" />
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">



</head>
<body class="g-sidenav-show  bg-gray-200">
@include('layouts.inc.sidebar')

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.adminnav')
    <div class="container-fluid">
        @yield('content')
        @include('layouts.inc.adminfooter')
    </div>
    </main>
     <!-- Scripts -->
     <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
     <script src="{{asset ('admin/js/perfect-scrollbar.min.js')}}"></script>
     <script src="{{asset ('admin/js/material-dashboard.min.js')}}"></script>
     <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}" defer></script>
     <script src="{{ asset('admin/js/kit.fontawesome.js') }}" defer></script>
     <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     @if (session('status'))
     <script>
         swal("{{session('status')}}");
     </script>
     @endif
     @yield('scripts')
</body>
</html>
