<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>SandWitch &mdash; Opportunity to project all your plans</title>
        @include('includes.head')
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
            <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
                @include('includes.header')
            </header>
            <div class="intro-section custom-owl-carousel" id="home-section">
                @yield('content')
            </div>
            <footer class="footer-section bg-light">
                @include('includes.footer')
            </footer>
            <script src="{{ asset('../js/jquery-3.3.1.min.js') }}"></script>
            <script src="{{ asset('../js/jquery-ui.js') }}"></script>
            <script src="{{ asset('../js/popper.min.js') }}"></script>
            <script src="{{ asset('../js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('../js/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('../js/jquery.easing.1.3.js') }}"></script>
            <script src="{{ asset('../js/aos.js') }}"></script>
            <script src="{{ asset('../js/jquery.fancybox.min.js') }}"></script>
            <script src="{{ asset('../js/jquery.waypoints.min.js') }}"></script>
            <script src="{{ asset('../js/jquery.animateNumber.min.js') }}"></script>
            <script src="{{ asset('../js/jquery.sticky.js') }}"></script>
            <script src="{{ asset('../js/main.js') }}"></script>
    </body>
</html>
