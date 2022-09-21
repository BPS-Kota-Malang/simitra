@extends('layouts.app')

@section('title', 'Settings')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Pengaturan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Settings</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Overview</h2>
                <p class="section-lead">
                    Semua pengaturan tentang website ini.
                </p>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-cog"></i>
                            </div>
                            <div class="card-body">
                                <h4>General</h4>
                                <p>Pengaturan umum seperti, judul situs, deskripsi situs, alamat dan sebagainya.</p>
                                <a href="features-setting-detail.html"
                                    class="card-cta">Ubah Pengaturan<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-search"></i>
                            </div>
                            <div class="card-body">
                                <h4>Cari</h4>
                                <p>Pengaturan pengoptimalan kegiatan, seperti rekrutmen dan survei.</p>
                                <a href="features-setting-detail.html"
                                    class="card-cta">Ubah Pengaturan<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="card-body">
                                <h4>Email</h4>
                                <p>Setting email SMTP, notifikasi dan lain-lain yang berhubungan dengan email.</p>
                                <a href="features-setting-detail.html"
                                    class="card-cta">Ubah Pengaturan<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-power-off"></i>
                            </div>
                            <div class="card-body">
                                <h4>Sistem</h4>
                                <p>Pengaturan sistem kegiatan akan diberitahukan pada bagian pengumuman.</p>
                                <a href="features-setting-detail.html"
                                    class="card-cta">Ubah Pengaturan<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="card-body">
                                <h4>Keamanan</h4>
                                <p>Pengaturan keamanan seperti firewall, akun server dan lain-lain.</p>
                                <a href="features-setting-detail.html"
                                    class="card-cta">Ubah Pengaturan<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-large-icons">
                            <div class="card-icon bg-primary text-white">
                                <i class="fas fa-stopwatch"></i>
                            </div>
                            <div class="card-body">
                                <h4>Automasi</h4>
                                <p>Pengaturan tentang otomatisasi seperti cron job, otomatisasi backup dan sebagainya.</p>
                                <a href="features-setting-detail.html"
                                    class="card-cta text-primary">Ubah Pengaturan<i class="fas fa-chevron-right"></i></a>
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
