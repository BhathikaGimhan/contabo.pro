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
    <link rel="stylesheet" href="{{ asset('assets/css/auth-final.css') }}">
</head>

<body class="cream-bg">
    <div class="container">
        <form method="POST" action="{{ route('register-step2.post') }}" role="form">
            @csrf
            <div class="row mt-5 forms">
                <div class="col-md-6 col-sm-12">
                    <h3 class="col-header">
                        Personal Details
                    </h3>
                    <div class="input-item item-left">
                        <div class="item-text">
                            <label for="title">Title:</label>
                            <div class="require">*Required</div>
                        </div>
                        <select class="form-select w-100" id="title" name="title">
                            <option value="mr">MR</option>
                            <option value="miss">MISS</option>
                            <option value="mrs">MRS</option>
                        </select>
                    </div>
                    <div class="input-item item-left">
                        <div class="item-text">
                            <label for="fist_name">First Name:</label>
                            <div class="require">*Required</div>
                        </div>
                        <input type="text" name="first_name" id="first_name"
                            class="w-100 @error('first_name') is-invalid @enderror"
                            value="{{ old('first_name', Auth::user()->first_name) }}">
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-item item-left">
                        <div class="item-text">
                            <label for="last_name">Last Name:</label>
                            <div class="require">*Required</div>
                        </div>
                        <input type="text" name="last_name" id="last_name"
                            class="w-100 @error('last_name') is-invalid @enderror"
                            value="{{ old('last_name', Auth::user()->last_name) }}">
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-item item-left">
                        <div class="item-text">
                            <label for="phone">Phone Number:</label>
                        </div>
                        <input type="text" name="phone" id="phone"
                            class="w-100 @error('phone') is-invalid @enderror"
                            value="{{ old('phone', Auth::user()->phone) }}">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-item item-left text">
                        I am &nbsp;
                        <div class="form-check form-check-inline pl-0">
                            <input class="form-check-input" type="radio" id="oldBoy" value="oldBoy"
                                name="user_type" checked>
                            <label class="form-check-label" for="inlineCheckbox1">an Old Boy</label>
                        </div>
                        <div class="form-check form-check-inline pl-0">
                            <input class="form-check-input" type="radio" id="guest" value="guest"
                                name="user_type">
                            <label class="form-check-label" for="inlineCheckbox2">a Guest</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <h3 class="col-header">
                        Address
                    </h3>
                    <div class="input-item">
                        <div class="item-text">
                            <label for="address1">Line 1:</label>
                        </div>
                        <input type="text" name="address1" id="address1"
                            class="w-100 @error('address1') is-invalid @enderror"
                            value="{{ old('address1', Auth::user()->address1) }}">
                        @error('address1')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-item">
                        <div class="item-text">
                            <label for="address2">Line 2:</label>
                        </div>
                        <input type="text" name="address2" id="address2" class="w-100"
                            value="{{ old('address2', Auth::user()->address2) }}">
                    </div>
                    <div class="input-item">
                        <div class="item-text">
                            <label for="city">City:</label>
                        </div>
                        <input type="text" name="city" id="city"
                            class="w-100 @error('city') is-invalid @enderror"
                            value="{{ old('city', Auth::user()->city) }}">
                        @error('city')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                    <div class="input-item">
                        <div class="item-text">
                            <label for="country">Country:</label>
                        </div>
                        <input type="text" name="country" id="country"
                            class="w-100 @error('country') is-invalid @enderror"
                            value="{{ old('country', Auth::user()->country) }}">
                    </div>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <small>{{ $message }}</small>
                        </span>
                    @enderror
                    <div class="input-item">
                        <div class="item-text">
                            <label for="postal_code">Postal Code:</label>
                        </div>
                        <input type="text" name="postal_code" id="postal_code"
                            class="w-100 @error('postal_code') is-invalid @enderror"
                            value="{{ old('postal_code', Auth::user()->postal_code) }}">
                        @error('postal_code')
                            <span class="invalid-feedback" role="alert">
                                <small>{{ $message }}</small>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row text-center justify-content-center">
                    <button type="submit" class="create-account completeButton btn">CREATE ACCOUNT</button>
                    <p class="terms-link">By creating your TRINITY HISTORY website account you agree to our <a
                            href="">Terms of Use</a> and <a href="">Privacy
                            Policy</a>.</p>
                </div>
            </div>

        </form>
    </div>
</body>

</html>
