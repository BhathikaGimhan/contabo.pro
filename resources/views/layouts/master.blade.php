<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Trinity History | @yield('title')</title>
    @include('layouts/css')
    @yield('assets-css')
    <script src="{{ asset('assets/lib/webviewer.min.js') }}"></script>

</head>

<body>

    @include('layouts/header-final')
    @yield('content')
    @include('layouts/footer')
    @include('layouts/js')
</body>

</html>
