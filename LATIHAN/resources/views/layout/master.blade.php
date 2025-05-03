<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <!-- Ini Bagian Header -->
    @include('layout.header')

    <!-- Ini Bagian Sidebar -->
    @include('layout.sidebar')

    <!-- Ini Bagian Content -->
    @yield('content')

    <!-- Ini Bagian Footer-->
    @include('layout.footer')

</body>
</html>