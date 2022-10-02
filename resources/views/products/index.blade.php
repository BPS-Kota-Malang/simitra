@extends('layouts.app')

@section('title', 'Post-Index')

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
                <div class="breadcrumb-item"><a href="#">Postingan</a></div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Postingan</h2>
            <p class="section-lead">Di halaman ini, kita dapat melihat postingan admin.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Data Postingan</h4>
                </div>
                <div class="col-lg-12 margin-tb">
                    <a class="btn btn-success" href="{{ route('products.create') }}">Tambah Postingan</a>
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
                        <th>Detail Kegiatan</th>
                        <th width="280px">Aksi</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        <td>
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
                                @can('product-edit')
                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                @endcan

                                @csrf
                                @method('DELETE')
                                @can('product-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>

                {!! $products->links() !!}

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