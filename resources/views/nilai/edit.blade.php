@extends('layouts.app')

@section('title', 'Post-Edit')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Kegiatan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Kegiatan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Edit</h2>
            <p class="section-lead">Di halaman ini, kita dapat mengedit kegiatan survei yang telah dibuat sebelumnya.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Kegiatan Survei</h4>
                    <a class="btn btn-primary" href="{{ route('nilai.index') }}">Kembali</a>
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
                <form action="{{ route('nilai.update',$nilai->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nilai Ketepatan</strong>
                                    <input type="text" name="nilai_ketepatan" value="{{ $nilai->nilai_ketepatan }}"
                                    class="form-control">
                                </div>
                                <div class="form-group">
                                    <strong>Nilai Kualitas</strong>
                                    <input type="text" name="nilai_kualitas" value="{{ $nilai->nilai_kualitas }}"
                                    class="form-control">
                                </div>
                                <div class="form-group">
                                    <strong>Nilai Sikap</strong>
                                    <input type="text" name="nilai_sikap" value="{{ $nilai->nilai_sikap }}"
                                    class="form-control">
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
