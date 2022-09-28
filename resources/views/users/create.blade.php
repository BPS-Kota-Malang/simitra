@extends('layouts.app')

@section('title', 'User-Create')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Management User</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Management</a></div>
        <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
        <div class="breadcrumb-item">User</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Halaman Create</h2>
      <p class="section-lead">Di halaman ini, kita dapat menambahkan inputan data pengguna.</p>
      <div class="card">
        <div class="card-header">
          <h4>Tambah User Baru</h4>

          @if (count($errors) > 0)
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
        {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Nama:</strong>
              {!! Form::text('name', null, array('placeholder' => 'Silahkan masukkan nama...','class' => 'form-control')) !!}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Email:</strong>
              {!! Form::text('email', null, array('placeholder' => 'Silahkan masukkan email...','class' => 'form-control')) !!}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Password:</strong>
              {!! Form::password('password', array('placeholder' => 'Silahkan masukkan password...','class' => 'form-control')) !!}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Konfirmasi Password:</strong>
              {!! Form::password('confirm-password', array('placeholder' => 'Silahkan masukkan konfirmasi password...','class' =>
              'form-control')) !!}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <strong>Role:</strong>
              {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <a class="btn btn-primary" href="{{ route('users.index') }}">Kembali</a>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
        {!! Form::close() !!}
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