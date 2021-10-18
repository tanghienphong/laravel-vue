<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website title - bootstrap html template</title>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
{{--    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>--}}
{{--    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">--}}

<!-- Font awesome 5 -->
{{--    <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">--}}

<!-- custom style -->
{{--    <link href="css/ui.css" rel="stylesheet" type="text/css">--}}
{{--    <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)">--}}

<!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/front-end.css') }}" rel="stylesheet"/>

    <!-- custom javascript -->
    {{--    <script src="js/script.js" type="text/javascript"></script>--}}
    <script src="{{ asset('js/front-end.js') }}" defer></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function () {
            // jQuery code

        });
        // jquery end
    </script>
    @stack('scripts')
</head>
<body>
<div id="app">
    <header class="section-header">

        <nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
            <div class="container">
                <ul class="navbar-nav d-none d-md-flex mr-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="#" class="nav-link"> Call: +99812345678 </a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
                        <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                            <li><a class="dropdown-item" href="#">Arabic</a></li>
                            <li><a class="dropdown-item" href="#">Russian </a></li>
                        </ul>
                    </li>
                </ul> <!-- list-inline //  -->
            </div> <!-- navbar-collapse .// -->
            <!-- container //  -->
        </nav> <!-- header-top-light.// -->

        <section class="header-main border-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6">
                        <a href="http://bootstrap-ecommerce.com" class="brand-wrap">
                            <img class="logo" src="images/logo.png">
                        </a> <!-- brand-wrap.// -->
                    </div>
                    <div class="col-lg-6 col-12 col-sm-12">
                        <form action="#" class="search">
                            <div class="input-group w-100">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="widgets-wrap float-md-right">
                            <div class="widget-header  mr-3">
                                <a href="#" class="icon icon-sm rounded-circle border"><i
                                        class="fa fa-shopping-cart"></i></a>
                                <span class="badge badge-pill badge-danger notify">0</span>
                            </div>
                            <div class="widget-header icontext">
                                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                                <div class="text">
                                    <span class="text-muted">Welcome!</span>
                                    <div>
                                        <a href="#">Sign in</a> |
                                        <a href="#"> Register</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- widgets-wrap.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header>
    <main-menu></main-menu>
    @yield('content')
    <footer class="section-footer border-top bg">
        <div class="container">
            <section class="footer-top  padding-y">
                <div class="row">
                    <aside class="col-md col-6">
                        <h6 class="title">Brands</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Adidas</a></li>
                            <li><a href="#">Puma</a></li>
                            <li><a href="#">Reebok</a></li>
                            <li><a href="#">Nike</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Company</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Find a store</a></li>
                            <li><a href="#">Rules and terms</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Help</h6>
                        <ul class="list-unstyled">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Money refund</a></li>
                            <li><a href="#">Order status</a></li>
                            <li><a href="#">Shipping info</a></li>
                            <li><a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-md col-6">
                        <h6 class="title">Account</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> User Login </a></li>
                            <li><a href="#"> User register </a></li>
                            <li><a href="#"> Account Setting </a></li>
                            <li><a href="#"> My Orders </a></li>
                        </ul>
                    </aside>
                    <aside class="col-md">
                        <h6 class="title">Social</h6>
                        <ul class="list-unstyled">
                            <li><a href="#"> <i class="fab fa-facebook"></i> Facebook </a></li>
                            <li><a href="#"> <i class="fab fa-twitter"></i> Twitter </a></li>
                            <li><a href="#"> <i class="fab fa-instagram"></i> Instagram </a></li>
                            <li><a href="#"> <i class="fab fa-youtube"></i> Youtube </a></li>
                        </ul>
                    </aside>
                </div> <!-- row.// -->
            </section>    <!-- footer-top.// -->

            <section class="footer-bottom row">
                <div class="col-md-2">
                    <p class="text-muted"> © 2019 Company name </p>
                </div>
                <div class="col-md-8 text-md-center">
                    <span class="px-2">info@pixsellz.io</span>
                    <span class="px-2">+879-332-9375</span>
                    <span class="px-2">Street name 123, Avanue abc</span>
                </div>
                <div class="col-md-2 text-md-right text-muted">
                    <i class="fab fa-lg fa-cc-visa"></i>
                    <i class="fab fa-lg fa-cc-paypal"></i>
                    <i class="fab fa-lg fa-cc-mastercard"></i>
                </div>
            </section>
        </div><!-- //container -->
    </footer>
</div>
</body>
</html>
