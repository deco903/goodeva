@extends('admin.auth.header.app')
<body class="h-100" style="background-color: #5AB6DE">
<div class="authincation h-100">
    <div class="container-fluid h-100 w-50">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-5">
                                    <img src="{{ asset('assets/images/logo.png') }}">
                                </h4>

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="form-group mt-4">
                                <input id="password" type="password" placeholder="Confirm Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                        </div>
                    </form>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
