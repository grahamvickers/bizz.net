<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bizz.net') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/nku3uiu.css">


    <!-- Styles -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <header id="mainHead">      
        <img src="/images/bn_icon_1.svg" alt="Royal Hunt Logo" id="logo" >

        <!-- desktop nav -->
        <nav id="mainNav">
            <h2 class="hidden">Main Navigation</h2>
            <ul>
                <li><a href="/listings">LISTINGS</a></li>
                <li><a href="/listings#/create">CREATE LISTING</a></li>
                <li><a href="/listings#/profile">SETTINGS</a></li>
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('LOGOUT') }}
                    </a>
                </li>
            </ul>
        </nav>

        <!-- hambuger nav -->
        <span id="hmbgrMenu" style="font-size:30px;cursor:pointer;color: #3C35F2;" onclick="showNav()">&#9776; </span>

        <div id="navOverCon" class="overlay">
            <h2 class="hidden">Main Navigation</h2>
            <a href="javascript:void(0)"class="closebtn" onclick="hideNav()">&times;</a>
            <div class="overlay-con">
                <ul>
                    <li><a href="/listings">LISTINGS</a></li>
                    <li><a href="/listings#/create">CREATE LISTING</a></li>
                    <li><a href="/listings#/profile">SETTINGS</a></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('LOGOUT') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
