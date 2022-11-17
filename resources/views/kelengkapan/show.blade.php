@extends('layouts.app')

@section('title', 'Data Kelengkapan')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h3 text-gray-800">Data Kelengkapan</h1>
        <a href="{{route('kelengkapan.show')}}" class="btn btn-sm btn-outline-scondary shadow-sm"><i class="fas fa-arrow-left fa-sm"></i> Kembali</a>
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="card shadow my-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Dokumen</h6>
                </div>
                {{-- <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Author</div>
                                <div class="col-md-8">{{ $user->name }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Judul Dokumen</div>
                                <div class="col-md-8">{{$data->judul}}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Jenis Dokumen</div>
                                <div class="col-md-8">{{$data->tipe->name}}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Tanggal Terbit</div>
                                <div class="col-md-8">{{ $data->created_at->isoFormat('dddd, D MMMM Y') }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Program Studi</div>
                                <div class="col-md-8">{{ $data->user->prodi }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Jurusan</div>
                                <div class="col-md-8">{{ $data->user->jurusan }}</div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">Abstrak Dokumen</div>
                                <div class="col-md-8">{{$data->abstrak}}</div>
                            </div>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow my-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview Dokumen</h6>
                </div>
                {{-- <div class="card-body">
                    <object data="{{asset('dokumen/' . $data->file)}}" type="application/pdf" class="w-100" height="600">
                        <iframe src="https://docs.google.com/viewer?url={{asset('dokumen/' . $data->file)}}&embedded=true"></iframe>
                    </object>
                </div> --}}
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
