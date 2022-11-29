@extends('layouts.auth')
@section('content')
<div class="d-table">
    <div class="d-table-cell">
        <div class="container">
            <div class="account-content">
                <div class="account-header">
                    <img src="{{asset('admin/assets/images/main-logo.svg')}}" alt="main-logo">
                    <h3>Forget Password</h3>
                </div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <form class="account-wrap" action="{{ route('password.email') }}" method="POST">
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
                        <img src="{{asset('admin/assets/images/icon/sms.svg')}}" alt="sms">
                    </div>
                    <div class="form-group mb-24">
                        <button type="submit" class="default-btn">Submit</button>
                    </div>
                    <div class="form-group mb-24">
                        <p class="account text-center">Forgot It? <a href="{{route('register')}}">Send me Back</a></p>
                    </div>
                </form>

                <ul class="account-social-link">
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-google'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
