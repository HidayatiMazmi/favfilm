<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}"> -->

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center header-inner">
        <div class="container-fluid container-xxl d-flex align-items-center">

            <div id="logo" class="me-auto">
                <a href="{{ url('/') }}" class="scrollto"><img src="{{ asset('assets/img/logo.png') }}" alt="" title=""></a>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Film</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Drama Korea</a></li>
                            <li><a href="#">Indonesia</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    @guest
                    @else
                        <li class="dropdown"><a href="#">{{ Auth::user()->username }}<i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                
            </nav>
            @guest
                @if (Route::has('login'))
                    <a class="buy-tickets scrollto" href="{{ route('login') }}">Login</a>
                @endif
                <!-- @if (Route::has('register'))
                    <a class="buy-tickets scrollto" href="{{ route('register') }}">Register</a>
                @endif -->
            @else
                @if (Route::has('create_film'))
                    <a class="buy-tickets scrollto" href="{{ route('create_film') }}">Create Film</a>
                @endif
            @endguest
            <!-- <a class="buy-tickets scrollto" href="#buy-tickets">Buy Tickets</a> -->


        </div>
    </header>
    <!-- End Header -->

    <main id="main" class="py-4">
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6 footer-info">
                <img src="assets/img/logo.png" alt="TheEvenet">
                <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                Pontianak, Kalimantan Barat<br>
                Indonesia <br>
                <strong>Phone:</strong> +62 819 9363 8719<br>
                <strong>Email:</strong> hidayatimazmi@gmail.com<br>
                </p>

                <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

            </div>

            </div>
        </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>FavFilm</strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> -->

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
