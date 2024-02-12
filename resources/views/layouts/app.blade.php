<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/nice-select.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/responsive.css">

    <title>{{ $title ?? '' }} {{ setting('site.title') }}</title>
    <link rel="icon" type="image/png" href="{{ config('app.url') }}/assets/img/all-img/favicon.png">
</head>

<body>


    <!-- Start Educated Top Navbar Area -->
    @include('inc.header')
    <!-- End Educated Top Navbar Area -->

    @yield('content')

    <!-- Start Educated Footer Area -->
    @include('inc.footer')
    <!-- End Educated Footer Area -->

</body>

</html>
