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
                                <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                </div>
                                @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <h4 class="text-center">E-mail</h4>
                                <div class="form-group mt-3">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-group mt-3">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                        <a href="/login" class="btn btn-primart btn-block">Kembali</a>
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
