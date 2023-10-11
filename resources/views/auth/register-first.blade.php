<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trinity History | Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
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
        font-family: "Gauthier Next FY", sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 17px;
        letter-spacing: 0;
        text-align: left;
    }
}
.login-text{
    color: #103355;
text-align: center;
font-family: Gauthier Next FY;
font-style: normal;
font-weight: 700;
line-height: normal;
}
.login-text p{
    color: #103355;
text-align: center;
font-family: Gauthier Next FY;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: normal;
} 

</style>
<body>
    <div class="container-fluid section-body">
                <div class="container">
                    <div class="text-center login-text">
                        <h2>Sign Up</h2><br>
                        <p>Register with us to gain full access to all sections of the Trinity History website!</p> <br>
                    </div>
                    <div class="social-login">
                        <div class="d-flex justify-content-center">
                            <button class="google-btn" onclick="location.href = '/auth/google';">
                                <div class="d-flex justify-content-between">
                                    <img class="google-icon"
                                        src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                                    Sign in with Google
                                </div>
                            </button>
                            <button class="google-btn small-logo" onclick="location.href = '/auth/microsoft';">
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
                            line-height: normal;">If you are a current Staff member or a Student at Trinity College, Kandy, please
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
                            line-height: normal;">CREATE AN ACCOUNT WITH EMAIL</h2>
                            <div class="inputs">
                                <form method="POST" action="{{ route('register') }}" role="form"
                                    class="text-start">
                                    @csrf
                                    <div class="input-section">
                                        <div class="auth-input-group">
                                            <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus placeholder="Your Name">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <small>{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-section">
                                        <div class="auth-input-group">
                                            <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <small>{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-section">
                                        <div class="auth-input-group">
                                            <input id="password" type="password" class="@error('password') is-invalid @enderror" value="{{ old('password') }}" name="password" required autocomplete="new-password" placeholder="Password">
                                            <span class="small-text" style="color: #103355;
                                            text-align: center;
                                            font-family: Gauthier Next FY;
                                            font-size: 10px;
                                            display: inline-block;
                                            font-style: normal;
                                            font-weight: 400;
                                            line-height: normal;">Enter at least six characters including a capital letter, a number, and a special character</span>
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <small>{{ $message }}</small>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="input-section password">
                                        <div class="auth-input-group">
                                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                        </div> <br>
                                    </div>

                                    <div class="btn-area d-flex justify-content-center">
                                        <button type="submit" class="btn text-uppercase">Continue</button>
                                    </div>
                                    <center><h2 class="afterbtn-h3" style="color: #103355;
                                        text-align: center;
                                        font-family: Gauthier Next FY;
                                        font-size: 20px;
                                        font-style: normal;
                                        font-weight: 400;
                                        line-height: normal;">By creating your TRINITY HISTORY website account you agree to our <a class="under-line">Terms of Use</a> and <a class="under-line">Privacy Policy</a>.</h2></center>
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
