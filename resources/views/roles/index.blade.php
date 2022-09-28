@extends('layouts.app')

@section('title', 'Default Layout')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Management Roles</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Management</a></div>
                <div class="breadcrumb-item"><a href="#">Kebijakan</a></div>
                <div class="breadcrumb-item">Roles</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Halaman Role</h2>
            <p class="section-lead">Di halaman ini, kita dapat melihat role pengguna.</p>
            <div class="card">
                <div class="card-header">
                    <h4>Data Roles</h4>
                </div>
                <div class="col-lg-12 margin-tb">
                    @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.create') }}">Buat Role Baru</a><br>
                    @endcan
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
                        <th>Posisi</th>
                        <th width="280px">Aksi</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td style="text-align: center">{{ ++$i }}</td>
                        <td style="text-align: center">{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                            @can('role-edit')
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                            @endcan
                            @can('role-delete')
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                            $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                </table>

                {!! $roles->render() !!}

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