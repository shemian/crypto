@extends('../app')

@section('content')


<div class="vh-100 d-flex justify-content-center">
    <div class="form-access my-auto">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}" >
            @csrf
            <span>Reset Password</span>

           

            <div class="form-group">
                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
        </form>

      
    </div>
</div>
@endsection
