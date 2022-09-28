@extends('layouts.app')

@section('title', 'Post-Edit')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Postingan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Postingan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Edit</h2>
            <p class="section-lead">Di halaman ini, kita dapat mengedit postingan yang telah dibuat sebelumnya.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Postingan</h4>
                    <a class="btn btn-primary" href="{{ route('products.index') }}">Kembali</a>
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
                <form action="{{ route('products.update',$product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Nama Kegiatan:</strong>
                                <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Detail Kegiatan:</strong>
                                <textarea class="form-control" style="height:150px" name="detail"
                                    placeholder="Detail">{{ $product->detail }}</textarea>
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