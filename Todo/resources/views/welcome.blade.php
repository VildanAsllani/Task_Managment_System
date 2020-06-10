<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="fontawesome-free-5.13.0-web/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <style>
        body{
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="grid">
        <aside class="left animate__animated animate__fadeInDown">
            <img src="{{asset('images/logo.png')}}" class="logo">
            <h1>TODO TASKS ON US</h1>
            <p class="p-subtitle">A simple and intelligent to-do list that make it easy to plan your day.</p>
                @auth
                    <a href="{{ url('/home') }}" class="sign-in-button">Go to profile</a>
                    @else
                        <a href="{{ route('login') }}" class="sign-in-button">Sign in web app</a>
                @endauth
            <span>No account? <a href="{{ route('register') }}">Sign up for free</a></span>
            <strong>Very soon</strong>
            <div class="store-icons">
                <div>
                    <p>Get the app</p>
                </div>
                <div>
                    <i class="fab fa-android"></i>
                    <i class="fab fa-windows"></i>
                    <i class="fab fa-apple"></i>
                </div>
            </div>
        </aside>
    <aside class="right" style="background-image: url('{{asset('images/Web.png')}}')">
            <img src="{{asset('images/Mobile.png')}}">
        </aside>
    </div>
</body>
</html>