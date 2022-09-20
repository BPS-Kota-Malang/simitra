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
            <h4>Pendaftaran - Mitra</h4>
        </div>

        <div class="card-body">
            <form method="POST">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="frist_name">Nama Awal</label>
                        <input id="frist_name"
                            type="text"
                            class="form-control"
                            name="frist_name"
                            autofocus
                            placeholder="Silahkan masukkan nama awal anda...">
                    </div>
                    <div class="form-group col-6">
                        <label for="last_name">Nama Akhir</label>
                        <input id="last_name"
                            type="text"
                            class="form-control"
                            name="last_name"
                            placeholder="Silahkan masukkan nama akhir anda...">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Silahkan masukkan email anda...">
                    <div class="invalid-feedback">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="password"
                            class="d-block">Password</label>
                        <input id="password"
                            type="password"
                            class="form-control pwstrength"
                            data-indicator="pwindicator"
                            name="password"
                            placeholder="Silahkan masukkan password anda...">
                        <div id="pwindicator"
                            class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    <div class="form-group col-6">
                        <label for="password2"
                            class="d-block">Konfirmasi Password</label>
                        <input id="password2"
                            type="password"
                            class="form-control"
                            name="password-confirm"
                            placeholder="Silahkan konfirmasi ulang password anda...">
                    </div>
                </div>

                <div class="form-divider">
                    Data Alamat
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Provinsi</label>
                        <select class="form-control selectric">
                            <option>Jawa Timur</option>
                            <option>Luar Jawa Timur</option>
                        </select>
                    </div>
                    <div class="form-group col-6">
                        <label>Kecamatan</label>
                        <select class="form-control selectric">
                            <option>Klojen</option>
                            <option>Blimbing</option>
                            <option>Lowokwaru</option>
                            <option>Sukun</option>
                            <option>Kedungkandang</option>
                            <option>Di Luar Malang</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-6">
                        <label>Kelurahan</label>
                        <input type="text"
                            class="form-control"
                            placeholder="Silahkan masukkan nama kelurahan anda...">
                    </div>
                    <div class="form-group col-6">
                        <label>Alamat</label>
                        <input type="text"
                            class="form-control"
                            placeholder="Silahkan masukkan alamat anda...">
                    </div>
                </div>

                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox"
                            name="agree"
                            class="custom-control-input"
                            id="agree">
                        <label class="custom-control-label"
                            for="agree">Saya setuju dengan persyaratan</label>
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
