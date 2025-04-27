@extends('layouts.app')

@section('content')
@include('partials.header')
@include('inc.navbar')

<section class="auth-section d-flex justify-content-center align-items-center" style="min-height: 100vh; background: #f5f5f5;">
    <div class="auth-box shadow-lg p-4 rounded bg-white" style="width: 100%; max-width: 500px;" data-aos="fade-up">
        <h3 class="text-center mb-4">Login to <strong>FitnessFrick</strong></h3>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror"
                       id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                       id="password" name="password" required>
                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

            <button type="submit" class="btn btn-dark w-100">Login</button>

            <div class="text-center mt-3">
                <a href="{{ route('password.request') }}">Forgot Your Password?</a> |
                <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
</section>

@include('partials.footer')
@endsection
