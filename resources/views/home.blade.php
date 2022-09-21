@extends('layouts.app')

@section('title', 'Hero')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Manajemen Mitra</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Components</a></div>
                    <div class="breadcrumb-item">Manajemen Mitra</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Welcome Back!</h2>
                <p class="section-lead">Terimakasih telah bergabung menjadi bagian dari keluarga kami.</p>

                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="hero bg-primary text-white">
                            <div class="hero-inner">
                                <h2>Halo, {{ $user->name }}</h2>
                                <p class="lead">Kamu sudah masuk dalam sistem, Lengkapi informasi tentang akun anda dan pastikan tidak ketinggalan informasi statistik.
                                <div class="mt-4">
                                    <a href="{{ route('profile') }}"
                                        class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                                        Informasi Pribadi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
