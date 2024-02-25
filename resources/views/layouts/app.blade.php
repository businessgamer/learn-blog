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

    <title>{{ $title ?? '' }} </title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $title ?? '' }} />
    <meta property="og:description" content="Digital Marketing is the group of strategies focused on attracting and converting potential customers online. Learn how in this guide!" />
    <meta property="og:url" content="https://rockcontent.com/blog/what-is-digital-marketing/" />
    <meta property="og:site_name" content="Educated - Learn Everything Is Here" />
    <meta property="article:publisher" content="https://www.facebook.com/educated01" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Digital marketing promotes goods and services through digital channels. Learn the various types, roles, and pros and cons of digital marketing." />
    <meta name='robots' content='index, follow, max-image-preview:large, NOODP, NOYDIR, max-snippet:-1, max-video-preview:-1' />
    <link rel="canonical" href="https://www.techtarget.com/searchcustomerexperience/definition/digital-marketing" />
    <meta name="author" content="Kristopher Jones" />
    <link rel="dns-prefetch" href="//tpc.googlesyndication.com" />
    <link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
    <link rel="dns-prefetch" href="//www.googletagservices.com" />
    <link rel='dns-prefetch' href='//www.googletagmanager.com' />
    <meta name="distribution" content="global" />
    <meta name="identifier-url" content="URL/" />

    @yield('head')

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
