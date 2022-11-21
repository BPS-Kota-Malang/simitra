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
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
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
            <th>Jenis Survei</th>
            <th>Kecamatan</th>
            <th>Kelurahan</th>
            <th>Gaji</th>
            <th>Tanggal</th>
            <th>Status Pembayaran</th>
            <th width="200px">Aksi</th>
          </tr>

          @foreach ($pembayaran as $item)
          <tr>
            <td style="text-align: center">{{ $loop->iteration }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->kegiatan->product->name }}</td>
            <td>{{ $item->kegiatan->jenis }}</td>
            <td>{{ $item->kecamatan->kecamatan_tipe }}</td>
            <td>{{ $item->subkecamatan->sub_kecamatan }}</td>
            <td>{{ $item->kegiatan->gaji }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
                @if($item->status==1)
                    <a href="{{ url('change-status/'.$item->id) }}"
                        onclick="return confirm('Apakah anda yakin ingin mengubah status pembayaran ini?')"
                        class="btn btn-sm btn-success">Sudah dibayar</a>
                @else
                    <a href="{{ url('change-status/'.$item->id) }}"
                        onclick="return confirm('Apakah anda yakin ingin mengubah status pembayaran ini?')"
                        class="btn btn-sm btn-danger">Belum dibayar</a>
                @endif
            </td>
            <td >
                <form action="{{ route('pembayaran.destroy',$item->id) }}" method="POST">
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
