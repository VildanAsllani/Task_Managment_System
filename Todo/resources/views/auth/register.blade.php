<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
</head>
<body bgcolor="white">
<div class="register animate__animated animate__fadeIn faster">
    <div class="cover">
        <h1>REGISTER</h1>
        <div class="circle circle-small"></div>
        <div class="circle circle-medium"></div>
        <div class="circle circle-large"></div>
    </div>
    <div class="register-form">
        <form class="form-ui" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label class="form-group-label">Name</label>
                <input type="text" class="form-group-input" name="name" value="{{ old('name') }}" placeholder="Enter your fullname" autocomplete="disable">
                @error('name')
                <div class="error">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-group-label">Nickname</label>
                <input type="text" class="form-group-input" name="nickname" value="{{ old('nickname') }}" placeholder="Enter your Nickname, let be unique plz" autocomplete="disable">
                @error('nickname')
                <div class="error">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-group-label">Email</label>
                <input type="email" class="form-group-input" name="email" value="{{ old('email') }}" placeholder="Enter your email" autocomplete="disable">
                @error('email')
                <div class="error">
                    <strong>{{$message}}</strong>
                </div>
                @enderror
            </
            </div>
            <div class="form-group">
                <label class="form-group-label">Password</label>
                <input type="password" class="form-group-input" name="password" placeholder="Enter your password">
                @error('password')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label class="form-group-label">Repeat password</label>
                <input type="password" class="form-group-input" name="password_confirmation" placeholder="Confirm your password">
                @error('password_confirmation')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <input type="submit" class="form-group-submit" value="REGISTER">
                <span>Already registered? <a href="{{route('login')}}">Login here</a></span>
            </div>
        </form>
    </div>
</div>
</body>
</html>
