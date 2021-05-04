<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('title')
    <link rel="stylesheet" href="{{asset('back_end/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('back_end/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar')
    @yield('content')
    @include('layouts.footer')
</div>
<script src="{{asset('back_end/jquery/jquery.min.js')}}"></script>
<script src="{{asset('back_end/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('back_end/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
