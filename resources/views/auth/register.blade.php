@extends('layoutslogin.applogin')

@section('content')
<div>
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="kanan">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" onsubmit="return confirm('Apakah anda yakin?');">
                        @csrf

                        <div class="switch switch-blue">
                            <input type="radio" class="switch-input" name="role" value="hero" id="week2" checked>
                            <label for="week2" class="switch-label switch-label-off">daftar hero jogja</label>
                            <input type="radio" class="switch-input" name="role" value="pekerja" id="month2">
                            <label for="month2" class="switch-label switch-label-on">pekerja</label>
                            <span class="switch-selection"></span>
                        </div>

                        <label for="name" class="title2">{{ __('Informasi Diri') }}</label>

                        <div class="form-group">
                            <label for="name">{{ __('nama*') }}</label>  
                        
                            <div>
                                <div>
                                    <input id="name" type="text" class="form-control inputku @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label for="email">{{ __('alamat email*') }}</label>                   
                        
                            <div>
                                <div>
                                    <input id="email" type="email" class="form-control inputku @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input id="password" type="password" class="form-control inputku @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('konfirmasi password*') }}</label>       
                        
                            <div>
                                <div>
                                    <input id="password-confirm" type="password" class="form-control inputku" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-9">
                                <button type="submit" class="btn btn-gabung"> 
                                    {{ __('gabung') }}
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
<script>
    @if(session()->has('pesan'))
    Swal.fire({
        icon: 'success',
        title: 'Berhasil',
        text: 'Selamat datang di JagaJogja.id enjoy',
        showConfirmButton: true,
        timer: 3000
    });
    @endif
</script>
@endsection
