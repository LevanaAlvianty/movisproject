@extends('layouts.login.logintemplate')

@section('content')
<section class="material-half-bg">
    <div class="cover"></div>
</section>

<section class="login-content">
    <div class="logo">
        <h1>Movis</h1>
    </div>
            
    <div class="login-box">
        <form method="post" class="login-form" action="{{ route('pegawai.login.post') }}" >
        {{ csrf_field() }}
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div class="form-group has-feedback">
                <!-- <i class="fa fa-lg fa-edit "></i><i class="fa fa-id-card-o"></i> -->
                <label for="email" class="control-label">NIP</label>
                <input type="text" class="form-control @error('nip') is-invalid @enderror"  value="{{ old('nip') }}" required placeholder="" name="nip">
                @error('nip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group has-feedback">
                <!-- <i class="fa fa-lg fa-lock"></i> -->
                <label for="password" class="control-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" required placeholder="" name="password">
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group btn-container">
                <button type="submit" class="btn btn-primary pull-right btn-block btn-flat">
                    <i class="fa fa-sign-in fa-lg fa-fw"></i> Sign In
                </button>
            </div>
                <!-- /.col -->
        </form>
    </div>
</section>
@endsection

@push('js')
<script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
    $('.login-box').toggleClass('flipped');
    return false;
    });
</script>
@endpush()
