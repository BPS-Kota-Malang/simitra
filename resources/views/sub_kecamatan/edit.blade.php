@extends('layouts.app')

@section('title', 'Kelurahan-Edit')

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
            <h2 class="section-title">Halaman Edit</h2>
            <p class="section-lead">Di halaman ini, kita dapat mengedit wilayah kelurahan mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Kelurahan</h4>
                    <a class="btn btn-primary" href="{{ route('sub_kecamatan.index') }}">Kembali</a>
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
                    <form action="{{ route('sub_kecamatan.update',$sub_kecamatan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Letak Kecamatan:</strong>
                                    <select class="form-select" name="id_kecamatan" id="id_kecamatan"
                                        aria-label=".form-select-sm example">
                                        <option selected disabled>Pilih Data Kecamatan</option>
                                        @foreach ($kecamatan as $item)
                                        <option value="{{ $item->id }}">{{$item->kecamatan_tipe}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Kelurahan:</strong>
                                    <input type="text" name="sub_kecamatan" value="{{ $sub_kecamatan->sub_kecamatan }}" class="form-control"
                                        placeholder="Silahkan Isi Data Kelurahan...">
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