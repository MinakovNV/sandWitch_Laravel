<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="en">
    <head>
        <title>SandWitch &mdash; Opportunity to project all your plans</title>
        @include('includes.head')
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

{{--        <div class="loader">--}}
{{--            <div class="spinner-border text-primary" role="status">--}}
{{--                <span class="sr-only">Loading...</span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="site-wrap">--}}
{{--        <div class="site-mobile-menu site-navbar-target">--}}
{{--            <div class="site-mobile-menu-header">--}}
{{--                <div class="site-mobile-menu-close mt-3">--}}
{{--                    <span class="icon-close2 js-menu-toggle"></span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="site-mobile-menu-body"></div>--}}
{{--        </div>--}}
            <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
                @include('includes.header')
            </header>
            <main>
                @yield('content')
            </main>
            <?php
            $homepage = "/";
            $currentpage = $_SERVER['REQUEST_URI'];
            if ($currentpage != $homepage){
                echo'<footer class="footer-section bg-light">';?>
                @include('includes.footer');
                <?php echo'</footer>';
             }?>
    </div>
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
