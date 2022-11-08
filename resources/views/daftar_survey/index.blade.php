@extends('layouts.app')

@section('title', 'Post-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Daftar Kegiatan Survei/Sensus</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Daftar Kegiatan Survei Sensus</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Daftar Kegiatan Survei/Sensus</h2>
            <p class="section-lead">Di halaman ini, mitra dapat memilih kegiatan Survei / Sensus</p>
            <div class="card">
                <div class="card-header">
                    <h4>DAFTAR KEGIATAN SURVEI/SENSUS</h4>
                </div>

                    <div class="container">
                        <div class="row">
                        @foreach ($kegiatan as $item)
                            <div class="col-sm-4 py-3 py-sm-0">
                                <div class="card box-shadow">
                                <img src="img/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" >{{ $item->product->name }}</h5>
                                    <p class="card-text"><i class="fa-solid fa-user-tie"></i> &nbsp; Jenis : {{ $item->jenis }}</p>
                                    <p class="card-text"><i class="fa-solid fa-calendar-days"></i> &nbsp; Tanggal : {{ $item->tanggal }}</p>
                                    <a href="#" class="btn btn-primary">Daftar</a>
                                </div>
                                </div>
                            </div>
                        @endforeach
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush
