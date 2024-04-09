<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BarberShop & Hair Salon HTML Template">
    <meta name="author" content="">
    <title>Barber Shop || BarberShop Hair Salon HTML Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">

    <link rel="stylesheet" href=" {{ asset('css/elegant-font-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/elegant-line-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/barber-icons.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/venobox/venobox.css') }}">

    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>

<body>
    <div id='preloader'>
        <div class='loader'>
            <img src="{{ asset('img/loading.gif') }}" width="80" alt="">
        </div>
    </div>
    <header id="header" class="header-section">
        <div class="container">
            <nav class="navbar ">
                <a href="#" class="navbar-brand"><img src="{{ asset('img/logo.png') }}" alt="Barbershop"></a>
                <div class="d-flex menu-wrap align-items-center">
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li><a data-scroll class="nav-link active" href="{{ url('/') }}">Home<span
                                        class="sr-only">(current)</span></a>
                                <ul>
                                    <li><a href="{{ url('/') }}">Home Default</a></li>
                                    <li><a href="index-3.html">Home Modern</a></li>
                                    <li><a href="index-4.html">Home Classic</a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About</a>
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="about-company.html">About Company</a></li>
                                </ul>
                            </li>
                            <li><a href="services.html">Services</a>
                                <ul>
                                    <li><a href="services.html">Services 01</a></li>
                                    <li><a href="services-2.html">Services 02</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul>
                                    <li><a href="appointment.html">Appointment</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="team.html">Our Team</a></li>
                                    <li><a href="pricing.html">Our Pricing</a></li>
                                    <li><a href="404.html">404 Error</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="header-btn">
                        <a href="{{ route('customer.check') }}" class="default_btn" type="submit">Check
                            Appointment</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    {{-- yields the content --}}
    @yield('content')
</body>
<a data-scroll href="#header" id="scroll-to-top"><i class="arrow_up"></i></a>

<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>

<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>

<script src="{{ asset('js/vendor/jquery.isotope.v3.0.2.js') }}"></script>

<script src="{{ asset('js/vendor/smooth-scroll.min.js') }}"></script>

<script src="{{ asset('js/vendor/venobox.min.js') }}"></script>

<script src="{{ asset('js/vendor/jquery.ajaxchimp.min.js') }}"></script>

<script src="{{ asset('js/vendor/jquery.slicknav.min.js') }}"></script>

<script src="{{ asset('js/vendor/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('js/vendor/jquery.mb.YTPlayer.min.js') }}"></script>

<script src="{{ asset('js/vendor/wow.min.js') }}"></script>

<script src="{{ asset('js/contact.js') }}"></script>

<script src="{{ asset('js/appointment.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>

</html>
