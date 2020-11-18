<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            BatteryFinder
        @endif
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <script src="https://kit.fontawesome.com/a4e584b747.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
</head>

<body>
{{--<div class="main-wrapper">--}}
{{--    <header class="header">--}}
{{--        <div class="container">--}}
{{--            <nav class="navbar navigation">--}}
{{--                <a class="navbar-brand" href="{{route('index')}}"><i class="fa fa-bolt fa-2x" aria-hidden="true" style="color: white;"></i>--}}
{{--                <p class="bf-logo-text"><strong  style="--}}
{{--                    color: #fff;--}}
{{--                    padding-left: 8px;--}}
{{--                    font-size: 25px;--}}
{{--                   ">BF</strong></p>--}}
{{--                </a>--}}
{{--                <div class="header__login header__login-mobile">--}}
{{--                </div>--}}
{{--                <ul class="navigation-nav">--}}
{{--                    <li class="nav-item dropdown--}}
{{--                    @if(Request::route()->getName() === 'index' || Request::route()->getName() === 'find')--}}
{{--                        active--}}
{{--                    @endif--}}
{{--                    ">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Поиск <i class="fa fa-caret-down" aria-hidden="true" style="color:#fff;"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            <a class="dropdown-item" href="{{ route('index') }}">По модели</a>--}}
{{--                            <a class="dropdown-item" href="{{ route('findBySize') }}">По размеру</a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item--}}
{{--                    @if(Request::route()->getName() === 'about')--}}
{{--                        active--}}
{{--                    @endif--}}
{{--                        ">--}}
{{--                        <a class="nav-link" href="{{ route('about') }}">О сайте</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="navigation-menu__mobile">--}}
{{--                    <ul class="navigation-menu__mobile-nav">--}}
{{--                        <div class="navigation-menu__mobile-nav-top">--}}
{{--                            <li class="navigation-menu__mobile-nav-item active">--}}
{{--                                <a class="nav-link" href="#">Поиск</a>--}}
{{--                            </li>--}}
{{--                            <li class="navigation-menu__mobile-nav-item">--}}
{{--                                <a class="nav-link" href="#">О нас</a>--}}
{{--                            </li>--}}
{{--                        </div>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="navigation-toggler">--}}
{{--                    <div class="bar1"></div>--}}
{{--                    <div class="bar2"></div>--}}
{{--                    <div class="bar3"></div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </header>--}}
{{--</div>--}}
<nav class="navbar navbar-expand-lg header" style="background-color: #6f43d6; color: #ffffff;">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}"><i class="fa fa-bolt fa-2x" aria-hidden="true"
                                                             style="color: white;"></i>
            <p class="d-none d-sm-block"><strong style="
                            color: #fff;
                            padding-left: 8px;
                            font-size: 25px;
                           ">BF</strong></p>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars navbar-toggler-icon " style="padding-top: 10px; font-size: 30px;" aria-hidden="true"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown
                    @if(Request::route()->getName() === 'index' || Request::route()->getName() === 'find' || Request::route()->getName() === 'findBySize')
                        active
                    @endif
                    ">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffffff;">
                        Поиск <i class="fa fa-caret-down" aria-hidden="true" style="color:#fff;"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="color: #ffffff;">
                        <a class="dropdown-item" href="{{ route('index') }}">По модели</a>
                        <a class="dropdown-item" href="{{ route('findBySize') }}">По размеру</a>
                    </div>
                </li>
                <li class="nav-item
                    @if(Request::route()->getName() === 'about')
                        active
                    @endif">
                    <a class="nav-link" href="{{ route('about') }}" style="color: #ffffff;">О сайте</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>
