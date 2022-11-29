@extends('layouts.auth')
@section('content')
<div class="d-table">
    <div class="d-table-cell">
        <div class="container">
            <div class="account-content">
                <div class="account-header">
                    <img src="{{asset('admin/assets/images/main-logo.svg')}}" alt="main-logo">
                    <h3>Registration</h3>
                </div>

                <form class="account-wrap" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mb-24 icon">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{asset('admin/assets/images/icon/user-square.svg')}}" alt="user-square">
                    </div>
                    <div class="form-group mb-24 icon">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{asset('admin/assets/images/icon/sms.svg')}}" alt="sms">
                    </div>
                    <div class="form-group mb-24 icon">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password"
                                    required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <img src="{{asset('admin/assets/images/icon/key.svg')}}" alt="key">
                    </div>
                    <div class="form-group mb-24 icon">
                        <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password">
                        <img src="{{asset('admin/assets/images/icon/key.svg')}}" alt="key">
                    </div>
                    <div class="form-group mb-24">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I agree <a href="terms.html">Terms & Policy</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-24">
                        <button type="submit" class="default-btn">Registration</button>
                    </div>
                    <div class="form-group mb-24">
                        <p class="account">Already Have An Account? <a href="login.html">Log In</a></p>
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
