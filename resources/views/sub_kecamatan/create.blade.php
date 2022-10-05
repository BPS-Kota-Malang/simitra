@extends('layouts.app')

@section('title', 'Kelurahan-Create')

@push('style')
<!-- CSS Libraries -->
@endpush

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Kelurahan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rekrutment</a></div>
                <div class="breadcrumb-item"><a href="#">Informasi</a></div>
                <div class="breadcrumb-item">Wilayah Kelurahan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Create</h2>
            <p class="section-lead">Di halaman ini, kita dapat membuat wilayah kelurahan mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Kelurahan</h4>
                    <a class="btn btn-primary" href="{{ route('sub_kecamatan.index') }}">Kembali</a>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <form action="{{route('sub_kecamatan.store')}}" method="post">
                            @csrf
                            <label class="label" for="kelurahan">Kelurahan</label>
                            <input type="text" class="form-control" name="sub_kecamatan" id="sub_kecamatan"
                                aria-describedby="sub_kecamatan" placeholder="Silahkan masukkan nama kelurahan...">
                    </div>
                    
                    <div class="form-group">
                        <label class="label" for="kecamatan">Kecamatan</label>
                        <select class="form-select" name="id_kecamatan" id="id_kecamatan"
                            aria-label=".form-select-sm example">
                            <option selected disabled>Pilih Data Kecamatan</option>
                            @foreach ($kecamatan as $item)
                            <option value="{{ $item->id }}">{{$item->kecamatan_tipe}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                    <br><br>
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