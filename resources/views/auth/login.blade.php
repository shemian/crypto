@extends('app')

@section('content')


<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <span>Sign In</span>

            <div class="form-group">
                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <div class="text-right">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
            
            <div class="custom-control custom-checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
        <h2>Don't have an account? <a href="{{ route('register') }}">Sign up here</a></h2>
    </div>
</div>
@endsection
