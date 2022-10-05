@extends('layouts.app')

@section('title', 'Kelurahan-Index')

@push('style')
<!-- CSS Libraries -->
@endpush

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
            <h2 class="section-title">Halaman Wilayah Kelurahan</h2>
            <p class="section-lead">Di halaman ini, kita dapat menambahkan wilayah kelurahan mitra.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Data Kebutuhan Lokasi Kelurahan</h4>
                </div>
                <div class="col-lg-12 margin-tb">
                    <a class="btn btn-success" href="{{ route('sub_kecamatan.create') }}">Tambah Data Kelurahan</a>
                </div>
                
                <br>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <table class="table table-bordered">
                    <tr style="text-align: center">
                        <th>No</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th width="280px">Aksi</th>
                    </tr>
                    @foreach ($sub_kecamatan as $kelurahan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kelurahan->guestKecamatan->kecamatan_tipe }}</td>
                        <td>{{ $kelurahan->sub_kecamatan }}</td>
                        <td>
                            <form action="{{ route('sub_kecamatan.destroy',$kelurahan->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('sub_kecamatan.show',$kelurahan->id) }}">Show</a>
                                @can('product-edit')
                                <a class="btn btn-primary"
                                    href="{{ route('sub_kecamatan.edit',$kelurahan->id) }}">Edit</a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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