@extends('layouts.app')

@section('title', 'Post-Index')

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
                <div class="breadcrumb-item"><a href="#">Kegiatan</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Kegiatan</h2>
            <p class="section-lead">Di halaman ini, admin dapat memilih kegiatan</p>
            <div class="card">
                <div class="card-header">
                    <h4>KEGIATAN SURVEI/SENSUS</h4>
                </div>

                <div class="col-lg-12 margin-tb">
                    <a class="btn btn-success" href="{{ route('kegiatan.create') }}">Tambah Kegiatan Survei</a>
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
                        <th>Nama Kegiatan Survei</th>
                        <th>Jenis</th>
                        <th>Tanggal</th>
                        <th width="280px">Aksi</th>
                    </tr>
                    @foreach ($kegiatan as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->jenis }}</td>
                        <td>{{ $item->tanggal}}</td>
                        <td>
                            <form action="{{ route('kegiatan.destroy',$item->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('kegiatan.show',$item->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('kegiatan.edit',$item->id) }}">Edit</a>
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
