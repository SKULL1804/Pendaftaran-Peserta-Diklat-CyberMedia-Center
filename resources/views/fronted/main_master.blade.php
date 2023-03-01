<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>CyberMedia Center</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="{{ asset('img/cmc.jpg') }}" rel="icon">
        <link href="{{ asset('img/cmc.jpg') }}" rel="logo">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('fronted/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fronted/assets/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('fronted/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fronted/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('fronted/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('fronted/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('fronted/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('fronted/assets/css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            @include('partials.fronted.navbar')
        </header><!-- End Header -->

        @yield('hero')

        <main id="main">
            @yield('content')
        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            @include('partials.fronted.footer')
        </footer><!-- End Footer -->

        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('fronted/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
        <script src="{{ asset('fronted/assets/vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('fronted/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('fronted/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('fronted/assets/js/main.js') }}"></script>

    </body>

</html>
