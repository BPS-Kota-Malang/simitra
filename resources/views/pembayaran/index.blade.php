@extends('layouts.app')

@section('title', 'User-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Pembayaran Mitra</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Management</a></div>
        <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
        <div class="breadcrumb-item">Pembayaran</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Halaman Pembayaran</h2>
      <p class="section-lead">Di halaman ini, admin dapat mengkonfirmasi pembayaran untuk mitra</p>
      <div class="card">
        <div class="card-header">
          <h4>Data Pembayaran</h4>
        </div>

        <br>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
          <p>{{ $message }}</p>
        </div>
        @endif

        <table class="table table-bordered">
          <tr style="text-align: center">
            <th>No</th>
            <th>Nama</th>
            <th>Survei yang Diikuti</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>Upah</th>
            <th>Tanggal</th>
            <th>Status Pembayaran</th>
            <th width="200px">Aksi</th>
          </tr>

        </table>

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
