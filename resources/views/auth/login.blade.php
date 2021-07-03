@extends('layoutslogin.applogin')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="kanan">
                <a class="logo2" style="color: #20B2AA;">
                    {{ config('laravel', 'Jaga Jogja') }}
                </a>
                <br>
                <a class="judul">Login ke Akun Anda</a>
                <div class="card-body padmid">
                    <form method="POST" action="{{ route('login') }}" onsubmit="return confirm('Apakah anda yakin?');">
                        @csrf

                        <div class="form-group">
                            <label for="email">{{ __('alamat email*') }}</label>
                            
                            <div>
                                <div>
                                    <input id="email" type="email" class="form-control inputku @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('password*') }}</label>
                            
                            <div>
                                <div>
                                    <input id="password" type="password" class="form-control inputku @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="rememberme-container">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="rememberme" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                            @if (Route::has('password.request'))
                                <a class="forgot-password btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8">
                                <button type="submit" id="btnresult" class="btn btn-gabung">
                                    {{ __('masuk') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="kiri konten">
                <div class="title1 m-b-d">
                    <h1>memberikan kontribusi terbaikmu</h1>
                </div>

                <div class="sub-title-ku">
                    Untuk menjadi Jogja yang lebih Istimewa
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
