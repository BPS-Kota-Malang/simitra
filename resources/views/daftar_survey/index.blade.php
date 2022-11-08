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
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">Daftar</button>
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
     <!--Modal-->
    <form action="#" method="post" enctype="multipart/form-data">{{ csrf_field() }}
        <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('Daftar Sensus / Survei') }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                    <strong>{{ __('Name Survei') }}:</strong>
                                    &nbsp; <td>{{ $item->product->name}}</td>
                            </div>
                             <div class="form-group">
                                    <strong>{{ __('Kegiatan') }}:</strong>
                                    &nbsp; <td>{{ $item->jenis}}</td>
                            </div>
                            <div class="form-group">
                                    <strong>Kecamatan:</strong>
                                    <select class="custom-select my-1 mr-sm-2" name="id_products" id="id_products">
                                        <option selected disabled>- Pilih Kecamatan -</option>
                                        @foreach ($kecamatan as $item)
                                        <option value="{{ $item->id }}">{{$item->kecamatan_tipe}}</option>
                                         @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                    <strong>Kelurahan:</strong>
                                    <select class="custom-select my-1 mr-sm-2" name="id_products" id="id_products">
                                        <option selected disabled>- Pilih Kelurahan -</option>
                                        @foreach ($sub_kecamatan as $item)
                                        <option value="{{ $item->id }}">{{$item->sub_kecamatan}}</option>
                                         @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Kembali') }}</button>
                            <button type="submit" class="btn btn-success">{{ __('Daftar') }}</button>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush
