@extends('layouts.app')

@section('content')
@include('partials.header')
@include('inc.navbar')

<section class="auth-section d-flex justify-content-center align-items-center" style="min-height: 100vh; background: #f5f5f5;">
    <div class="auth-box shadow-lg p-4 rounded bg-white" style="width: 100%; max-width: 600px;" data-aos="fade-up">
        <h3 class="text-center mb-4">Join <strong>FitnessFrick</strong></h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group mb-3">
                <label for="name">Full Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autofocus>
                @error('name')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                       name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="age">Age (in years)</label>
                <input id="age" type="number" step="1" class="form-control @error('age') is-invalid @enderror"
                       name="age" value="{{ old('age') }}" required>
                @error('age')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="height">Height (in meters)</label>
                <input id="height" type="number" step="0.01" class="form-control @error('height') is-invalid @enderror"
                       name="height" value="{{ old('height') }}" required>
                @error('height')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="weight">Weight (in kg)</label>
                <input id="weight" type="number" step="0.1" class="form-control @error('weight') is-invalid @enderror"
                       name="weight" value="{{ old('weight') }}" required>
                @error('weight')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                       name="password" required>
                @error('password')
                    <span class="text-danger small">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required>
            </div>

            <button type="submit" class="btn btn-dark w-100">Register</button>

            <div class="text-center mt-3">
                Already have an account? <a href="{{ route('login') }}">Login</a>
            </div>
        </form>
    </div>
</section>

@include('partials.footer')
@endsection
