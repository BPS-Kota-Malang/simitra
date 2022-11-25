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
            <th width="300px">Survei yang Diikuti</th>
            <th>Jenis Survei</th>
            <th>Gaji</th>
            <th>Total Gaji</th>
            <th>Jenis Mitra</th>
            <th >Status Pembayaran</th>
            <th width="300px">Aksi</th>
          </tr>

          @foreach ($pembayaran as $item)
          <tr>
            <td style="text-align: center">{{ $loop->iteration }}</td>
            <td>{{ $item->user->name }}</td>
            <td>{{ $item->kegiatan->product->name }}</td>
            <td>{{ $item->kegiatan->jenis }}</td>
            <td>
                @if($item->kegiatan->jenis_mitra=='Honor')
                    {{  $item->gaji }}
                @elseif($item->kegiatan->jenis_mitra=='Bulanan')
                    {{  $item->kegiatan->gaji }}
                @else
                    {{ $item->gaji }}
                @endif
            </td>
            <td>{{ $item->total_gaji }}</td>

            <td>{{ $item->kegiatan->jenis_mitra }}</td>
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
                    <a class="btn btn-info" href="{{ route('pembayaran.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('pembayaran.edit',$item->id) }}">Edit</a>
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
