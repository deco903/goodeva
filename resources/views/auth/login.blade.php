@extends('admin.auth.header.app')
<body class="h-100" style="background-color: #5AB6DE">
<div class="authincation h-100">
    <div class="container-fluid col-md-10 col-xl-8 col-lg-8 w-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-5">
                                    <img src="{{ asset('assets/images/logo.png') }}">
                                </h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mt-4">
                            <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" placeholder="E-mail" value="{{old('email')}}" autofocus required>
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                        </div>

                        <div class="form-group"> 
                            <input type="password" name="password" id="password"  class="form-control" placeholder="Password" required><i class="toggle-password fa fa-fw fa-eye-slash"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror   
                        </div>

                        <div class="form-group ml-2">
                           
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        </div>

                        <div class="text-center ">
                            
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
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
