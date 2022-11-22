@extends('layouts.app')

@section('title', 'Post-Edit')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Pembayaran</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Edit</h2>
            <p class="section-lead">Di halaman ini, kita dapat mengedit pembayaran yang telah dibuat sebelumnya.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Pembayaran Mitra</h4>
                    <a class="btn btn-primary" href="{{ route('pembayaran.index') }}">Kembali</a>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="card-body">
                <form action="{{ route('pembayaran.update',$pembayaran->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>Nama Mitra:</strong>
                                    <input type="text" name="id" value="{{ $pembayaran->user->name }}"
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>Survei yang diikuti:</strong>
                                    <input type="text" name="name" value="{{ $pembayaran->kegiatan->product->name }}"
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>Jenis Survei:</strong>
                                    <input type="text" name="jenis" value="{{ $pembayaran->kegiatan->jenis }}"
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>Kecamatan:</strong>
                                    <input type="text" name="kecamatan_tipe" value="{{ $pembayaran->kecamatan->kecamatan_tipe }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>Kelurahan:</strong>
                                    <input type="text" name="sub_kecamatan" value="{{ $pembayaran->subkecamatan->sub_kecamatan }}"
                                    class="form-control" >
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>Gaji:</strong>
                                    <input type="text" name="gaji" value="{{ $pembayaran->kegiatan->gaji  }}"
                                    class="form-control" >
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
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
