<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<html lang="en">
<head>
    <title>SandWitch &mdash; Opportunity to project all your plans</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
