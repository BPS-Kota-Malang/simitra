@extends('layouts.app')

@section('title', 'Pendaftar-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pendaftar Mitra</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Management</a></div>
        <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
        <div class="breadcrumb-item">Pendaftar</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Halaman Pendaftar</h2>
      <p class="section-lead">Di halaman ini, admin dapat melihat pendaftar mitra</p>
      <div class="card">
        <div class="card-header">
          <h4>Data Pendaftar Mitra</h4>
        </div>
      </div>
        @foreach ($products as $item)
        <div class="card" style="max-width: 900px;">
            <div class="row no-gutters">
                <div class="col-md-5" style="background: #868e96;">
                    <img src="img/1.jpg" class="card-img-top h-100" >
                </div>
                <div class="col-md-7" style="max-width: 500px;">
                    <div class="card-body" >
                        <h3 class="card-title">{{ $item->name }}</h3>
                        <a class="btn btn-primary" href="{{ route('pendaftar.edit',$item->id) }}"
                             style="margin-top: 70px">Pendaftar</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="card-footer bg-whitesmoke">
          BPS - Kota Malang
        </div>

    </div>
  </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush
