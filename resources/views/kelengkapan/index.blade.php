@extends('layouts.app')

@section('title', 'Data Kelengkapan')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Cek Kelengkapan Dokumen</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Management</a></div>
        <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Cek Kelengkapan Dokumen</h2>
      <p class="section-lead">Di halaman ini, kita dapat mengecek kelengkapan dokumen</p>
      <div class="card">
        <div class="card-header">
          <h4>Data Dokumen</h4>
        </div>
        <div class="col-lg-12 margin-tb">
          <a class="btn btn-success" href="{{ route('kelengkapan.create') }}" class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i>&nbsp; Tambah Dokumen</a>
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
            <th>Author</th>
            <th>Jenis Dokumen</th>
            <th>Tanggal </th>
            <th width="280px">Aksi</th>
          </tr>
           @foreach ($data as $item)
          <tr>
            <th scope="row">{{ ($data ->currentpage()-1) * $data ->perpage() + $loop->index + 1 }}</th>
            <td>{{ $item->user->name}}</td>
            <td>{{ $item->tipe->name}}</td>
            <td>{{ $item->created_at->isoFormat('dddd, D MMMM Y') }}</td>
            <td>
                <a href="{{ route('kelengkapan.download', $item->id)}}" class="btn btn-sm btn-info" target="_blank"><i class="fas fa-fw fa-download"></i></a>
                <a href="{{ route('kelengkapan.edit', $item->id)}}" class="btn btn-sm btn-success"><i class="fas fa-fw fa-edit"></i></a>
                <a href="{{ route('kelengkapan.show', $item->id)}}" class="btn btn-sm btn-primary"><i class="fas fa-fw fa-eye"></i></a>
                <form action="{{route('kelengkapan.destroy', $item->id)}}" method="POST" class="d-inline">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-fw fa-trash"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
        </table>

        {{-- {!! $data->render() !!} --}}

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
