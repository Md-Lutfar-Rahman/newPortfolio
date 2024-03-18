<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome-all.css')}}">
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('images/favicon.png')}}">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    @include('frontend.layouts.navbar')
    @yield('content')
</body>
</html>