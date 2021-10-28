@extends('layouts.app')

@section('content')
<div class="containerr">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="register-namebox">
                            <label for="name" class="rdisplay-name">{{ __('Name') }}</label>

                            <div class="r-input-name">
                                <input id="name" type="text" class="rinput-name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-email">
                            <label for="email" class="rdisplay-email">{{ __('E-Mail Address') }}</label>

                            <div class="r-input-email">
                                <input id="email" type="email" class="rinput-email" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-pass">
                            <label for="password" class="rdisplay-pass">{{ __('Password') }}</label>

                            <div class="r-input-pass">
                                <input id="password" type="password" class="rinput-pass" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="register-pass">
                            <label for="password-confirm" class="rdisplay-pass">{{ __('Confirm Password') }}</label>

                            <div class="r-input-pass">
                                <input id="password-confirm" type="password" class="rinput-pass" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="loginbtn2">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
