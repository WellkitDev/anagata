<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>PROFILE | PT. Anagata</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bootstrap App Landing Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Themefisher">
    <meta name="generator" content="Themefisher Small Apps Template v1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="{{ asset('apps/plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('apps/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('apps/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('apps/plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('apps/plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('apps/plugins/aos/aos.css') }}">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('apps/css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


    <nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
        <div class="container">
            <a class="navbar-brand" href="#">ANAGATA<span>EDU</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item @@about">
                        <a class="nav-link" href="#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us
                        </a>
                    </li>
                    <li class="nav-item @@product">
                        <a class="nav-link" href="#product">Product</a>
                    </li>

                    {{-- <li class="nav-item @@journal">
                        <a class="nav-link" href="#journal">Journal</a>
                    </li> --}}
                    <li class="nav-item @@contact">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- start home section --}}

    @yield('content')
    {{-- end home section --}}














    <!--============================
=            Footer            =
=============================-->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
                        <div class="block">
                            <a class="navbar-brand" href="#">ANAGATA<span>EDU</span></a>
                            <!-- Social Site Icons -->
                            <ul class="social-icon list-inline">
                                <li class="list-inline-item">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="ti-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="ti-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <h3 class="text-center text-white">Drop us a mail</h3>
                        <form action="">
                            <div class="row">
                                <!-- Name -->
                                <div class="col-md-6 mb-2">
                                    <input class="form-control main" type="text" placeholder="Name" required>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6 mb-2">
                                    <input class="form-control main" type="email" placeholder="Your Email Address"
                                        required>
                                </div>
                                <!-- subject -->
                                <div class="col-md-12 mb-2">
                                    <input class="form-control main" type="text" placeholder="Subject" required>
                                </div>
                                <!-- Message -->
                                <div class="col-md-12 mb-2">
                                    <textarea class="form-control main" name="message" rows="10" placeholder="Your Message"></textarea>
                                </div>
                                <!-- Submit Button -->
                                <div class="col-12 text-right">
                                    <button class="btn btn-main-md">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center bg-dark py-4">
            <small class="text-secondary">Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>. Designed &amp; Developed by Team</a>
            </small class="text-secondary">
        </div>

        <div class="text-center bg-dark py-1">
            <small>
                <p>Distributed By <a href="#">Wellkit❤</a></p>
            </small class="text-secondary">
        </div>
    </footer>


    <!-- To Top -->
    <div class="scroll-top-to">
        <i class="ti-angle-up"></i>
    </div>

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('apps/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('apps/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('apps/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('apps/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('apps/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
    <script src="{{ asset('apps/plugins/aos/aos.js') }}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
    <script src="{{ asset('apps/plugins/google-map/gmap.js') }}"></script>

    <script src="{{ asset('apps/js/script.js') }}"></script>
</body>

</html>
