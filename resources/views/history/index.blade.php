@extends('layouts.app')

@section('title', 'Post-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>History Kegiatan </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Daftar History Kegiatan</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Daftar History Kegiatan Survei/Sensus</h2>
            <p class="section-lead">Halaman untuk melihat history </p>
            <div class="card">
                <div class="card-header">
                    <h4>HISTORY</h4>
                </div>

                    <div class="container">
                        <div class="row">
                        @foreach ($products as $item)
                            <div class="col-sm-4 py-3 py-sm-0">
                                <div class="card box-shadow">
                                <img src="img/1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title" >{{ $item->name }}</h5>
                                    <p class="card-text"><i class="fa-solid fa-user-tie"></i> &nbsp; Jenis : {{ $item->jenis }}</p>
                                    <p class="card-text"><i class="fa-solid fa-calendar-days"></i> &nbsp; Tanggal : {{ $item->tanggal }}</p>
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

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush
