@extends('layouts.app')

@section('title', 'Post-Show')

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
            <p class="section-lead">Di halaman ini, admin dapat melihat jumlah pendaftar</p>
            <div class="card">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">
                <h4>Data Pendaftar</h4><a class="btn btn-primary" href="{{ route('pendaftar.index') }}">Kembali</a>
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
                        <th>Tanggal</th>
                        <th>Nama</th>
                        <th >Survei yang Diikuti</th>
                        <th>Jenis Survei</th>
                        <th >Status Pendaftar</th>
                    </tr>

                    @foreach ($pendaftar as $item)
                    <tr>
                        <td style="text-align: center">{{ $loop->iteration }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->kegiatan->product->name }}</td>
                        <td>{{ $item->kegiatan->jenis }}</td>
                        <td>
                        @if($item->status==1)
                            <a href="{{ url('change-status/'.$item->id) }}"
                                onclick="return confirm('Apakah anda yakin ingin mengubah status pendaftar ini?')"
                                class="btn btn-sm btn-success">Diterima</a>
                        @else
                            <a href="{{ url('change-status/'.$item->id) }}"
                                onclick="return confirm('Apakah anda yakin ingin mengubah status pendaftar ini?')"
                                class="btn btn-sm btn-danger">Belum Diterima</a>
                        @endif
                    </td>
                    </tr>
                    @endforeach
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
