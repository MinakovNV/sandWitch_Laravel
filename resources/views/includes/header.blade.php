
<div class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
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
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="{{ url('/') }}" class="text-uppercase">SandWitch</a>
                </div>
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
                @guest
                    <div class="ml-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-xl-block">
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}" class="nav-link">{{ __('Register') }}</a>
                                    </li>
                                @endif
                                <li class="cta">
                                    <a href="{{ route('login') }}" class="nav-link"><span class="border bg-dark rounded text-white border-dark">{{ __('Login') }}</span></a>
                                </li>
                            </ul>
                        </nav>
                        <a href="#" class="d-inline-block d-xl-none site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a>
                    </div>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position:relative; padding-left:50px;">
                            <img src="/uploads/avatars/{{ Auth::user()->avatar}}"
                                 style="width:32px; height:32px; position:absolute;  left:10px; border-radius:50%" alt="Here should be logo">
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/profile')}}">
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </div>
        </div>
    </div>
</div>
