<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title_lable')</title>

    <nav class="navbar navbar-expand-sm bg-danger navbar-dark justify-content-end">
        <a class="navbar-brand" href="/home">Venik Social</a>
        <button class="btn ml-auto"></button>
        <button class="navbar-toggler" type="button">
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav mr-right">
                <li class="nav-item">
                    <a class="nav-link active" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Science</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Culture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Response</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Finance</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="nav-link" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </li>>
            </ul>
        </div>
    </nav>


    </div>
    </div>
    </nav>

</head>

<body>
@yield('content')
</body>

<footer>


</footer>
