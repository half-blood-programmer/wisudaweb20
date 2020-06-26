@extends('layout.masterguest')
@section('title', 'Daftar Peserta')
@section('content')

<div id="fullpage" class="fullpage-default">
    <div class="section animated-row" >
        <div class="section-inner">
            <div class="row justify-content-center">
               <div class="col-md-7 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <h2>Form Pendaftaran</h2>
                    </div>
                    <div class="col-md-6 mx-auto">
                        <div class="row">
                            <div  data-animate="fadeInUp">
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <div class="input-field" style="text-align:left;">
                                        <label for="name" class="text form-label" >{{ __('Nama Lengkap') }}</label>
                                        <input id="name" type="text" class="my-0 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-field" style="text-align:left;">
                                        <label for="npm" class="text form-label">{{ __('Nomor Pokok Mahasiswa') }}</label>
                                        <input id="npm" type="text" class="my-0 form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm">

                                        @error('npm')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-field" style="text-align:left;">
                                        <label for="email" class="text form-label" >{{ __('Alamat Email') }}</label>
                                        <input id="email" type="text" class="my-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="input-field" style="text-align:left;">
                                    <label for="password" class="text form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="my-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="input-field" style="text-align:left;">
                                    <label for="password-confirm" class="text form-label">{{ __('Konfirmasi Password') }}</label>
                                        <input id="password-confirm" type="password" class="my-0 form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>


                                    <div class="input-field" style="text-align:left;">
                                        <label for="kelas" class="text form-label">{{ __('Kelas') }}</label>
                                        <input id="kelas" type="text" class="my-0 form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas">

                                        @error('kelas')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-field" style="text-align:left;">
                                    <label for="prodi" class="text form-label">{{ __('Program Studi') }}</label>
                                        <select class="my-0 form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('prodi') }}" required autocomplete="prodi">
                                            <option value="D III Akuntansi"> D III Akuntansi </option>
                                            <option value="D III Pajak">D III Pajak </option>
                                            <option value="D III PBB  / Penilai">D III PBB  / Penilai </option>
                                            <option value="D III Bea Cukai">D III Bea Cukai</option>
                                            <option value="D III Kebendaharaan Negara">D III Kebendaharaan Negara</option>
                                            <option value="D III Maanajemen Aset">D III Maanajemen Aset</option>
                                            <option value="D I Pajak  / Penilai">D I Pajak </option>
                                            <option value="D I Bea Cukai">D I Bea Cukai</option>
                                            <option value="D I Kebendaharaan Negara">D I Kebendaharaan Negara</option>
                                        </select>
                                        @error('prodi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>

                                    <div class="input-field">
                                        <div class="form-check text-left ml-3">
                                                    <input class="form-check-input" type="checkbox" name="agreement" id="agreement" {{ old('agreement') ? 'checked' : '' }}>

                                                    <label class="form-check-label" for="agreement">Dengan klik tombol Daftar, saya menyetujui ketentuan yang telah ditetapkan oleh panitia {{ config('app.name') }}
                                                    </label>

                                        @error('agreement')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                        </div>
                                    </div>


                                <button class="btn col-md-12" type="submit">DAFTAR</button>
                                </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" >
                </div>
            </div>
        </div>
    </div>
    </div>

    @endsection

