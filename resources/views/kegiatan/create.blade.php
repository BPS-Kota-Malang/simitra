@extends('layouts.app')

@section('title', 'Post-Create')

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
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Kegiatan</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Create</h2>
            <p class="section-lead">Di halaman ini, kita dapat membuat kegiatan survei</p>
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Detail Kegiatan Baru</h4>
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
                </div>

                <div class="card-body">
                    <form action="{{ route('kegiatan.store') }}" method="POST">
                        @csrf
                         <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Kegiatan Survei:</strong>
                                    <select class="custom-select my-1 mr-sm-2" name="id_products" id="id_products">
                                        <option selected disabled>Pilih Kegiatan Survei</option>
                                        @foreach ($products as $item)
                                        <option value="{{ $item->id }}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jenis</strong>
                                    <select class="custom-select my-1 mr-sm-2" name="jenis" id="jenis" >
                                            <option selected disabled >Pilih Jenis </option>
                                            <option value="Lapangan">Lapangan</option>
                                            <option value="Pengolahan">Pengolahan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Tanggal</strong>
                                    <input type="text" name="tanggal" class="form-control" placeholder="Silahkan masukkan tanggal kegiatan....">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Gaji</strong>
                                    <input type="text" name="gaji" class="form-control" placeholder="Silahkan masukkan nilai gaji....">
                                </div>
                            </div>
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jenis Mitra</strong>
                                    <br><br>
                                    <label><input type="radio" name="jenis_mitra" value="Bulanan" /> &nbsp; Bulanan</label>
                                    <br>
                                    <label><input type="radio" name="jenis_mitra" value="Honor" /> &nbsp; Honor</label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <a class="btn btn-primary" href="{{ route('kegiatan.index') }}">Kembali</a>
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
