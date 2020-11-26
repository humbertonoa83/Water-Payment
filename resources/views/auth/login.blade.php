@extends('auth.base.baseLogin')

@section('login_content')
    <!-- Authentication card start -->
    <form class="md-float-material form-material" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center">
            <img src="{{ asset('files/assets/images/logotipo.png') }}" alt="logo.png">
        </div>
        <div class="auth-box card">
            <div class="card-block">
                <div class="row m-b-20">
                    <div class="col-md-12">
                        <h3 class="text-center txt-primary">Entre na sua conta</h3>
                    </div>
                </div>
                <div class="row m-b-20"></div>
                <div class="form-group form-primary">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <span class="form-bar"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <label class="float-label">Email:</label>
                </div>
                <div class="form-group form-primary">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <span class="form-bar"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <label class="float-label">Senha:</label>
                </div>
                <div class="row m-t-25 text-left">
                    <div class="col-12">
                        <div class="checkbox-fade fade-in-primary">
                            <label>
                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                <span class="text-inverse">{{ __('Remember Me') }}</span>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            </label>

                        </div>
                        <div class="forgot-phone text-right float-right">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-right f-w-600">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{ __('Login') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end of form -->
@endsection

