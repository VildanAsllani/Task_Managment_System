<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body >
    <div class="login animate__animated animate__fadeIn faster">
        <div class="login-form">
            <center><img src="{{asset('images/logo.png')}}" height="100px"></center>
            <form class="form-ui" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="form-group-label">Email</label>
                    <input type="email" class="form-group-input" value="{{ old('email') }}" name="email">
                    @error('email')                                   
                    <div class="error">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-group-label">Password</label>
                    <input type="password" class="form-group-input" name="password">
                    @error('password')                                   
                    <div class="error">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="form-group-submit" value="LOGIN">
                <span>No account? <a href="{{route('register')}}">Sign up here for free</a></span>
                </div>
            </form>
        </div>
        <div class="cover">
            <h1>LOGIN</h1>
            <div class="circle circle-small"></div>
            <div class="circle circle-medium"></div>
            <div class="circle circle-large"></div>
        </div>
    </div>
</body>
</html>