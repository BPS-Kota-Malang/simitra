@extends('layouts.app')

@section('title', 'Roles-Show')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Roles</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Roles</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Show</h2>
            <p class="section-lead">Di halaman ini, kita dapat melihat informasi sebuah roles.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Lihat Info Roles</h4>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-info alert-has-icon border">
                                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                                    <div class="alert-body">
                                        <div class="alert-title">Info</div>
                                        Informasi Permission dari Posisi.
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Posisi : </strong>
                                            {{ $role->name }}
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong>Permissions:</strong>
                                            @if(!empty($rolePermissions))
                                                @foreach($rolePermissions as $v)
                                                    <span class="badge badge-pill badge-success">{{ $v->name }} <br></span>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="pull-right">
                                    <a class="btn btn-primary" href="{{ route('roles.index') }}">Kembali</a>
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