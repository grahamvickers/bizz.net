<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bizz Net</title>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/nku3uiu.css">

    <!-- Favicons -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset ('images/favicon-32x32.png') }}">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>
<body>
    <header id="mainHead">
        <a href="/"><img src="/images/bn_icon_1.svg" alt="Royal Hunt Logo" id="logo" ></a>

        <!-- desktop nav -->
        <nav id="mainNav">
            <h2 class="hidden">Main Navigation</h2>
            <ul>
                <li><a href="/listings">LISTINGS</a></li>
                <li><a href="/register">SIGN UP</a></li>
                <li><a href="/login">LOGIN</a></li>
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
                    <li><a href="/register">SIGN UP</a></li>
                    <li><a href="/login">LOGIN</a></li>
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
