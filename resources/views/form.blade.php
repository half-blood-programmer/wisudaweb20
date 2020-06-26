@extends('layoutbos.master')
@section('content')

@if(Auth::user()->id_level === 1)
    {@section('content')
        @include('member')
    @endsection}
@else

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Form Elements</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Form Design <small>coming soon</small></h2>

              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />

              {{-- <form method="post" action="{{ route('register') }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> --}}
                @csrf
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name" >{{ __('Nama Lengkap') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="name" type="text" class="my-0 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">{{ __('Nama Lengkap') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="email" type="text" class="my-0 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="npm">{{ __('Nomor Pokok Mahasiswa') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="npm" type="text" class="my-0 form-control @error('npm') is-invalid @enderror" name="npm" value="{{ old('npm') }}" required autocomplete="npm">
                    </div>
                    @error('npm')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="password">{{ __('Password') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="password" type="password" class="my-0 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="password-confirm" type="password" class="my-0 form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="kelas">{{ __('Kelas') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="kelas" type="text" class="my-0 form-control @error('kelas') is-invalid @enderror" name="kelas" value="{{ old('kelas') }}" required autocomplete="kelas">
                    </div>
                    @error('kelas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="prodi">{{ __('Program Studi') }}</label>
                    <div class="col-md-6 col-sm-6 ">
                        <input  class="form-control" id="prodi" type="text" class="my-0 form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('prodi') }}" required autocomplete="prodi">
                    </div>

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

                <div class="ln_solid"></div>
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                    <button class="btn btn-primary" type="button">Cancel</button>
                    <button class="btn btn-primary" type="reset">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    @endif
@endsection
