@extends('site.layout.base')

@section('body')
    <body class="dark-scheme de-grey">
        <div id="wrapper">
            @yield('header')

            @yield('content')

            @yield('footer')

            @yield('script')
        </div>
    </body>
@endsection
