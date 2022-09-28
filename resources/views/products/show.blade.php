@extends('layouts.app')

@section('title', 'Post-Show')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Postingan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Postingan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Show</h2>
            <p class="section-lead">Di halaman ini, kita dapat melihat detail kegiatan atau informasi.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Lihat Info Postingan</h4>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-info alert-has-icon border">
                                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Info</div>
                                        Informasi tentang postingan.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Nama Kegiatan:</strong>
                                            {{ $product->name }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Detail Kegiatan:</strong>
                                            {{ $product->detail }}
                                        </div>
                                    </div>
                                </div>
 

                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('products.index') }}">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-whitesmoke">
                    BPS - Kota Malang
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