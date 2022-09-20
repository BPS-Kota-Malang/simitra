@extends('layouts.auth')

@section('title', 'Reset Password')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Reset Password</h4>
        </div>

        <div class="card-body">
            <p class="text-muted">Kami akan mengirimkan link untuk reset password anda</p>
            <form method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"
                        type="email"
                        class="form-control"
                        name="email"
                        tabindex="1"
                        required
                        autofocus
                        placeholder="Silahkan masukkan email anda...">
                </div>

                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input id="password"
                        type="password"
                        class="form-control pwstrength"
                        data-indicator="pwindicator"
                        name="password"
                        tabindex="2"
                        required
                        placeholder="Silahkan masukkan password baru anda...">
                    <div id="pwindicator"
                        class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password-confirm">Konfirmasi Password</label>
                    <input id="password-confirm"
                        type="password"
                        class="form-control"
                        name="confirm-password"
                        tabindex="2"
                        required
                        placeholder="Silahkan masukkan konfirmasi password anda...">
                </div>

                <div class="form-group">
                    <button type="submit"
                        class="btn btn-primary btn-lg btn-block"
                        tabindex="4">
                        Reset Password
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery.pwstrength/jquery.pwstrength.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/auth-register.js') }}"></script>
@endpush
