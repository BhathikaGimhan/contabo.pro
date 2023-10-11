<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trinity History | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
@extends('layouts/master')

@section('content')
<style>
    .section-body {
            background-image: url('{{ asset("assets/images/homepage-sections/background/Section_Background 02-min.png") }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center; /* Set the height to 100% of the viewport height */
            z-index: -1; /* This is optional, it places the background behind other content */
        }
    .auth-input-group {
    align-items: center !important;
    width: 400px;
    margin-left: 30%;
}
.separator h3 {
    width: 100%;
    text-align: center;
    border-bottom: 1px solid #ededed;
    line-height: 0.1em;
    margin: 10px 0 20px;
}
.small-text {
    font-family: "Gauthier Next FY", sans-serif;
    font-size: 10px;
    font-weight: 400;
    line-height: 12px;
    letter-spacing: 0;
    text-align: center;
}
.btn-area button {
    width: 279px;
    height: 50px;
    border: none;
    border-radius: 0;
    background-color: var(--blue);
    font-size: 1.2em;
    color: #ffe6b0;
    margin-bottom: 20px;
}
.drop_shadow {
    box-shadow: none;
}
h2.afterbtn-h3 {
    font-family: 'GauthierNextFY';
    font-weight: 400;
    line-height: 24px;
    font-size: 20px;
}
.auth-input-group input {
    font-family: "Gauthier Next FY", sans-serif;
    font-size: 14px;
    font-weight: 400;
    line-height: 17px;
    letter-spacing: 0;
    text-align: left;
    /* Add placeholder styles */
    ::placeholder {
        color: #103355;
font-family: Gauthier Next FY;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
    }
}
/* Style the placeholders for email and password fields */
.input-section .auth-input-group input::placeholder {
    color: #103355;
font-family: Gauthier Next FY;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
}

/* Style the placeholders for small-text elements (if needed) */
.small-text::placeholder {
    color: #103355;
font-family: Gauthier Next FY;
font-size: 14px;
font-style: normal;
font-weight: 400;
line-height: normal;
}
.info-text p{
   

    height: 55px;
    left: 26px;
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 17px;
    text-align: center;
    color: #103355;
}
</style>
<body>
    <div class="container-fluid section-body">
                <div class="container">
                    <div class="text-center login-text">
                        <h2 style="color: #103355;
                        text-align: center;
                        font-family: Gauthier Next FY;
                        font-size: 40px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;">Sign In</h2><br>
                        <p style="color: #103355;
                        text-align: center;
                        font-family: Gauthier Next FY;
                        font-size: 20px;
                        font-style: normal;
                        font-weight: 400;
                        line-height: normal;">Sign-In to gain full access to all sections of the
                            Trinity History website!</p><br>
                    </div>
                    <div class="social-login">
                        <div class="d-flex justify-content-center">
                            <button class="google-btn google" onclick="location.href = 'auth/google';">
                                <div class="d-flex justify-content-between">
                                    <img class="google-icon"
                                        src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                                    Sign in with Google
                                </div>
                            </button>

                            <button class="google-btn microsoft" onclick="location.href = 'auth/microsoft';">
                                <div class="d-flex justify-content-between">
                                    <img class="google-icon"
                                        src="https://cdn.pixabay.com/photo/2013/02/12/09/07/microsoft-80660_960_720.png" />
                                    Sign in with Microsoft
                                </div>
                            </button>
                        </div>
                        <div class="text-center info-text d-flex justify-content-center">
                            <p style="color: #103355;
                            text-align: center;
                            font-family: Gauthier Next FY;
                            font-size: 20px;
                            font-style: normal;
                            font-weight: 400;
                            line-height: normal;">If you are a current Staff member or a Student at Trinity College, <span class="under-line" style="text-decoration: underline">Kandy, please sign in from your College Email Account.</span>
                                <span>sign in from your College Email Account.</span>
                            </p>
                        </div>
                    </div>
                    <div class="login-section">
                        <div class="separator text-center">
                            <h3><span>OR</span></h3>
                        </div>
                        <div class="login-area">
                            <h2 class="text-center" style="color: #103355;
                            text-align: center;
                            font-family: Gauthier Next FY;
                            font-size: 20px;
                            font-style: normal;
                            font-weight: 900;
                            line-height: normal;">SIGN-IN WITH YOUR ACCOUNT</h2>
                            <div class="inputs">
                                <form method="POST" action="{{ route('login') }}" role="form" class="text-start">
                                    @csrf
                                    <div class="input-section">
    <div class="auth-input-group">
        <input type="email" name="email" id="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" placeholder="Your Email Address"
            required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
        @enderror
    </div>
</div>
<div class="input-section password">
    <div class="auth-input-group">
        <input type="password" name="password" id="password" class="@error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
        @enderror
    </div>
</div>

                                    <div class="btn-area d-flex justify-content-center">
                                        <button type="submit" class="btn text-uppercase">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
</html>
