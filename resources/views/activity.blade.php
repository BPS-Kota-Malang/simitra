@extends('layouts.app')

@section('title', 'Activities')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Aktifitas</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Aktifitas</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Oktober 2022</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="activities">
                            <div class="activity">
                                <div class="activity-icon bg-primary shadow-primary text-white">
                                    <i class="fas fa-arrows-alt"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        <span class="text-job">1 jam lalu</span>
                                        <span class="bullet"></span>
                                        <a class="text-job"
                                            href="#">View</a>
                                        <div class="dropdown float-right">
                                            <a href="#"
                                                data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">Options</div>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#"
                                                    class="dropdown-item has-icon text-danger"
                                                    data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                                    data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i>
                                                    Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Melakukan pendaftaran rekrutmen untuk petugas survei awal.</p>
                                </div>
                            </div>
                            <div class="activity">
                                <div class="activity-icon bg-primary shadow-primary text-white">
                                    <i class="fas fa-unlock"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        <span class="text-job">4 jam lalu</span>
                                        <span class="bullet"></span>
                                        <a class="text-job"
                                            href="#">View</a>
                                        <div class="dropdown float-right">
                                            <a href="#"
                                                data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">Options</div>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#"
                                                    class="dropdown-item has-icon text-danger"
                                                    data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                                    data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i>
                                                    Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Login ke sistem dengan menggunakan data email {{ $user->email }}</p>
                                </div>
                            </div>
                            <div class="activity">
                                <div class="activity-icon bg-primary shadow-primary text-white">
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        <span class="text-job">12 jam lalu</span>
                                        <span class="bullet"></span>
                                        <a class="text-job"
                                            href="#">View</a>
                                        <div class="dropdown float-right">
                                            <a href="#"
                                                data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">Options</div>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#"
                                                    class="dropdown-item has-icon text-danger"
                                                    data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                                    data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i>
                                                    Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Keluar dari sistem setelah 6 jam menggunakan sistem.</p>
                                </div>
                            </div>
                            <div class="activity">
                                <div class="activity-icon bg-primary shadow-primary text-white">
                                    <i class="fas fa-trash"></i>
                                </div>
                                <div class="activity-detail">
                                    <div class="mb-2">
                                        <span class="text-job">Yesterday</span>
                                        <span class="bullet"></span>
                                        <a class="text-job"
                                            href="#">View</a>
                                        <div class="dropdown float-right">
                                            <a href="#"
                                                data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                            <div class="dropdown-menu">
                                                <div class="dropdown-title">Options</div>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                                <a href="#"
                                                    class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#"
                                                    class="dropdown-item has-icon text-danger"
                                                    data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                                    data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i>
                                                    Archive</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p>Menghapus permintaan dalam penawaran menjadi petugas survei lapangan.</p>
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
