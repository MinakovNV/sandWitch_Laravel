@extends('layouts.app')

@section('content')
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="site-logo"><a href="index.html" class="text-uppercase">SandWitch</a></div>
                <div>
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-xl-block">
                            <li><a href="index.html" class="nav-link" style="color:black">Home</a></li>
                            <li><a href="about.html" class="nav-link" style="color:black">About</a></li>
                            <li><a href="ourteam.html" class="nav-link" style="color:black">Our Team</a></li>
                            <li><a href="contacts.html" class="nav-link" style="color:black">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="ml-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                            <li><a href="registration.html" class="nav-link">Register</a></li>
                            <li class="cta"><a href="login.html" class="nav-link"><span class="border bg-dark rounded text-white border-dark">Sign In</span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>

    </header>

    <div class="intro-section custom-owl-carousel" id="home-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mr-auto" data-aos="fade-up">

                    <div class="owl-carousel slide-one-item-alt-text">

                        <div class="slide-text">
                            <h1>SandWitch</h1>
                            <p class="mb-5">Best opportunity to project all your plans.</p>
                            <p><a href="about.html" class="btn btn-outline-dark py-3 px-5">More information</a></p>
                        </div>
                        <div class="slide-text">
                            <h1>Let's Start</h1>
                            <p class="mb-5">Just create an account and find many new hobby friends and write down all your plans.</p>
                            <p><a href="registration.html" class="btn btn-outline-dark py-3 px-5">Registration</a></p>
                        </div>
                        <div class="slide-text">
                            <h1>Glad to see you!</h1>
                            <p class="mb-5">Welcome to the social network of your preferences. We hope you enjoy it here. Read about our team to find out more..</p>
                            <p><a href="ourteam.html" class="btn btn-outline-dark py-3 px-5">Our team</a></p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 ml-auto"  data-aos="fade-up" data-aos-delay="100">

                    <div class="owl-carousel slide-one-item-alt">
                        <img src="images/home_2.JPG" alt="Image" class="img-fluid">
                        <img src="images/home_3.JPG" alt="Image" class="img-fluid">
                        <img src="images/home_1.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="owl-custom-direction">
                        <a href="#" class="custom-prev" style="background-color: dimgrey"><span class="icon-keyboard_arrow_left"></span></a>
                        <a href="#" class="custom-next" style="background-color: dimgrey"><span class="icon-keyboard_arrow_right"></span></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div> <!-- .site-wrap -->

{{--<script src="js/jquery-3.3.1.min.js"></script>--}}
{{--<script src="js/jquery-ui.js"></script>--}}
{{--<script src="js/popper.min.js"></script>--}}
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="/js/app.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/main.js"></script>

</body>
@endsection
