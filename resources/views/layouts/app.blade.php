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
    </body>
</html>
