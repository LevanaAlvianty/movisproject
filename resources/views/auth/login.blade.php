@extends('layouts.logintemplate')

@section('content')
<section class="material-half-bg">
    <div class="cover"></div>
</section>

<section class="login-content">
    <div class="logo">
        <h1>Movis</h1>
    </div>
            
    <div class="login-box">
        <form method="POST" class="login-form" action="{{ route('login') }}">
        @csrf
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
        <div class="form-group">
            <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="control-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div><br>

            <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary pull-right">
                    <i class="fa fa-sign-in fa-lg fa-fw"></i>
                        {{ __('SIGN IN') }}
                </button>
            </div>
        </form>
    </div>
</section>
@endsection
