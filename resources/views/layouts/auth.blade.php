<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    @yield('title')
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body>
    @yield('content')
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
</body>

</html>
