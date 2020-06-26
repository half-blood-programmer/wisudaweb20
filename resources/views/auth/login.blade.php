@extends('layout.masterguest')
@section('title', 'Login')
@section('content')
<div id="fullpage" class="fullpage-default">
    <div class="section animated-row fp-section fp-table active fp-completely" data-section="slide07" data-fp-styles="null" data-anchor="slide07" style="height: 635px;"><div class="fp-tableCell" style="height: 635px;">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-7 wide-col-laptop" style="margin-top: 4em">
                    <div class="title-block animated fadeInUp" data-animate="fadeInUp">
                    </div>
                    <div class="contact-section">
                        <div class="row">
                            <div class="col-md-4 mx-auto animated fadeInUp">
                                    <div class="contact-box">
                                    <div class="contact-row">
                                        <span class="text">
                                                Silakan login terlebih dahulu. Belum punya akun? <a class="head" href="{{ route('register') }}">Register</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mx-auto animated fadeInUp" data-animate="fadeInUp">
                                <div id="form-messages" class="mt-3"></div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-field">
                                        <input id="email" type="email" class="form-control mb-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Alamat Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-field">
                                        <input id="password" type="password" class="form-control mb-0 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-field">
                                        <div class="form-check text-left ml-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="text" class="form-check-label" for="remember">Ingat saya
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn" type="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
</div>
@endsection
