<!doctype html>
<html lang="en">
<head>
    @yield('header_script')
</head>
    @include('layouts.head')
    @include('layouts.sidebar')
    @include('layouts.header')
    @yield('content')

    @include('layouts.footer')
    @include('layouts.foot')
    </body>
</html>
