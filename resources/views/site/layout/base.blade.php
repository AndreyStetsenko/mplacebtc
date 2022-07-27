<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Andrew Stetsenko">

    @yield('head')

    <!-- BEGIN: CSS Assets-->
    <link id="bootstrap" href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('site/css/plugins.css') }}" rel="stylesheet" type="text/css" />    
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('site/css/de-grey.css') }}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->   
    <link id="colors" href="{{ asset('site/css/colors/scheme-04.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('site/css/coloring.css') }}" rel="stylesheet" type="text/css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->


<body class="dark-scheme de-grey">
    <div id="wrapper">
        @include('site.layout.header')

        @yield('content')

        @include('site.layout.footer')
    </div>

    <script src="{{ asset('site/js/app.js') }}"></script>
    <script src="{{ asset('site/js/plugins.js') }}"></script>
    <script src="{{ asset('site/js/designesia.js') }}"></script>

    @yield('script')
</body>

</html>
