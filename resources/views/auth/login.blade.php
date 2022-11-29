@extends('layouts.auth')

@section('content')
<div class="d-table">
    <div class="d-table-cell">
        <div class="container">
            <div class="account-content">
                <div class="account-header">
                    <img src="{{ asset('admin/assets/images/main-logo.svg') }}" alt="main-logo">
                    <h3>Login</h3>
                </div>

                <form class="account-wrap" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mb-24 icon">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{ asset('admin/assets/images/icon/sms.svg') }}" alt="sms">
                    </div>
                    <div class="form-group mb-24 icon">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{ asset('admin/assets/images/icon/key.svg') }}" alt="key">
                    </div>
                    @if (Route::has('password.request'))
                    <div class="form-group mb-24">
                        <a href="{{ route('password.request') }}" class="forgot">Forgot Password?</a>
                    </div>
                    @endif
                    
                    <div class="form-group mb-24">
                        <button type="submit" class="default-btn">Log In</button>
                    </div>
                    <div class="form-group mb-24 text-center">
                        <p class="account">Not A Member? <a href="{{ route('register') }}">Create An Account</a></p>
                    </div>
                </form>

                <ul class="account-social-link">
                    <li>
                        <a href="https://www.google.com/" target="_blank">
                            <i class='bx bxl-google'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
