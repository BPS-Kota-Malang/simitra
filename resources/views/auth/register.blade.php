@extends('layouts.auth')

@section('title', 'Register')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Registrasi Mitra - BPS Kota Malang</h4>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-12">
                        <label for="name">Nama</label>
                        <input id="name"
                            type="text"
                            class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name') }}"
                            name="name"
                            required autocomplete="name" autofocus
                            placeholder="Silahkan masukkan nama anda...">
                        
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-12">
                        <label for="email">Email</label>
                        <input id="email"
                            type="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email') }}"
                            name="email"
                            required autocomplete="email"
                            placeholder="Silahkan masukkan email anda...">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-12">
                        <label for="password"
                            class="d-block">Password</label>
                        <input id="password"
                            type="password"
                            class="form-control pwstrength @error('password') is-invalid @enderror"
                            data-indicator="pwindicator"
                            name="password"
                            required autocomplete="new-password"
                            placeholder="Silahkan masukkan password baru anda...">
                        <div id="pwindicator"
                            class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group col-12">
                        <label for="password-confirm"
                            class="d-block">Ulangi Password</label>
                        <input id="password-confirm"
                            type="password"
                            class="form-control"
                            name="password_confirmation"
                            required autocomplete="new-password"
                            placeholder="Silahkan ulang password baru anda...">
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                            name="agree"
                            class="custom-control-input"
                            id="agree">
                        <label class="custom-control-label"
                            for="agree">Saya menyetujui syarat dan ketentuan yang berlaku.</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
