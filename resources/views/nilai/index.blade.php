@extends('layouts.app')

@section('title', 'Post-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Nilai</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rekrutmen</a></div>
                <div class="breadcrumb-item"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Nilai</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Nilai</h2>
            <p class="section-lead">Di halaman ini, kita dapat menambahkan nilai dalam seleksi mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Data Nilai Seleksi Mitra</h4>
                </div>

                <div class="row">
                    @if (Session::has('success'))
                    <div class="col-12">
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    </div>
                    @endif
                    <div class="col-md-12">
                        <div class="card ">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tambah Nilai Mitra</h6>
                            </div>
                            <div class="card-body">
                                <form action="{{route('nilai.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nilai">Nilai Ketepatan</label>
                                        <input type="text" class="form-control @error('nilai_ketepatan') is-invalid @enderror"
                                            id="nilai_ketepatan" name="nilai_ketepatan" placeholder="Masukkan nilai ketepatan..."
                                            value="{{ old('nama_ketepatan')}}">
                                        @error('nilai_ketepatan')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <br>
                                        <label for="nilai">Nilai Kualitas</label>
                                        <input type="text" class="form-control @error('nilai_kualitas') is-invalid @enderror"
                                            id="nilai_kualitas" name="nilai_kualitas" placeholder="Masukkan nilai kualitas..."
                                            value="{{ old('nilai_kualitas')}}">
                                        @error('nilai_kualitas')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                        <br>
                                        <label for="nilai">Nilai Sikap</label>
                                        <input type="text" class="form-control @error('nilai_sikap') is-invalid @enderror"
                                            id="nilai_sikap" name="nilai_sikap" placeholder="Masukkan nilai sikap..."
                                            value="{{ old('nilai_sikap')}}">
                                        @error('nilai_sikap')
                                        <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            BPS - Kota Malang
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
