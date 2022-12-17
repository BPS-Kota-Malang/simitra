@extends('layouts.app')

@section('title', 'Profile')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
<link rel="stylesheet" href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ $user->name }}</h2>
            <p class="section-lead">
                Sesuaikan informasi dengan pribadi anda sendiri.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="{{ url('img/avatar/avatar-1.png') }}"
                                class="rounded-circle profile-widget-picture">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-value">Jabatan</div>
                                    <div class="profile-widget-item-label">{{ $user->guestRole->name }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Nama</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->name}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Email</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->email}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Jenis Kelamin</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->jenis_kelamin}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Agama</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->agama}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Kecamatan</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->guestKecamatan->kecamatan_tipe}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Kelurahan</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->guestKelurahan->sub_kecamatan}}
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">RT</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->rt}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">RW</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->rw}}</div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-md-4">Pengalaman Sensus</div>
                                    <div class="col-md-6 font-weight-bold">{{$user->pgl_sensus}}</div>
                                </div>
                            </li>
                        </div>
                        <div class="col-12 my-3 text-center">
                            <a href="{{route('kelengkapan.index')}}" class="btn btn-sm btn-outline-primary">Cek
                                Kelengkapan Dokumen</a>
                        </div>
                        <div class="col-12 my-3 text-center">
                            <a href="{{route('history')}}" class="btn btn-sm btn-outline-primary">History Kegiatan</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card">
                        <form action="{{route('profileStore')}}" enctype="multipart/form-data" method="POST" class="needs-validation" novalidate="">
                            @csrf
                            <div class="card-header">
                                <h4>Edit Profile</h4>
                            </div>

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

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" value="{{ $user->name }}" name="name"
                                            required="" placeholder="Silahkan masukkan nama anda...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $user->email }}" name="email"
                                            required="" placeholder="Silahkan masukkan email anda...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-1">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" value="{{ $user->alamat }}"
                                            name="alamat" required="" placeholder="Silahkan masukkan alamat anda ..">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Jabatan</label>
                                        <select class="form-control py-0" name="jabatan" required="">
                                            <option disabled value>Pilih Jabatan</option>
                                            <option value="{{$user->role}}">{{$user->guestRole->name}}</option>
                                            @foreach ($role as $r)
                                            <option value="{{ $r->id }}">{{$r->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Agama</label>
                                        <select class="form-control py-0" name="agama" required="">
                                            <option disabled value>Pilih Agama</option>
                                            <option>{{ $user->agama }}</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="khonghucu">Khong Hu Cu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control py-0" name="jenis_kelamin" required="">
                                            <option disabled value>Pilih Jenis Kelamin</option>
                                            <option>{{ $user->jenis_kelamin }}</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Kecamatan</label>
                                        <select class="form-control py-0" name="kecamatan">
                                            <option disabled value>Pilih Kecamatan</option>
                                            <option value="{{$user->kecamatan}}">
                                                {{$user->guestKecamatan->kecamatan_tipe}}</option>
                                            @foreach ($kecamatan as $item)
                                            <option value="{{ $item->id }}">{{$item->kecamatan_tipe}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Kelurahan</label>
                                        <select class="form-control py-0" name="kelurahan">
                                            <option disabled value>Pilih Kelurahan</option>
                                            <option value="{{$user->kelurahan}}">
                                                {{$user->guestKelurahan->sub_kecamatan}}</option>
                                            @foreach ($sub_kecamatan as $item)
                                            <option value="{{ $item->id }}">{{$item->sub_kecamatan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>RT</label>
                                        <input type="text" class="form-control" value="{{ $user->rt }}" name="rt"
                                            required="" placeholder="Silahkan masukkan RT anda...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>RW</label>
                                        <input type="text" class="form-control" value="{{ $user->rw }}" name="rw"
                                            required="" placeholder="Silahkan masukkan RW anda...">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label>Pengalaman Sensus/Survei BPS</label>
                                        <br>
                                        <input type="checkbox" name="pengalaman[]" value="Sensus Penduduk"> &nbsp; Sensus Penduduk
                                        2020 (SP2020)
                                        <br>
                                        <input type="checkbox" name="pengalaman[]" value="Sensus Ekonomi"> &nbsp; Sensus Ekonomi
                                        2016 (SE2016)
                                        <br>
                                        <input type="checkbox" name="pengalaman[]" value="Susenas"> &nbsp; Survei Sosial
                                        Ekonomi Nasional (Susenas)
                                        <br>
                                        <input type="checkbox" name="pengalaman[]" value="Sakernas"> &nbsp; Survei
                                        Angkatan Kerja Nasional (Sakernas)
                                        <br>
                                        <input type="checkbox" name="pengalaman[]" value="Lainnya"> &nbsp; Survei /
                                        Sensus BPS Lainnya
                                        <br>
                                        <input type="checkbox" name="pengalaman[]" value="Belum"> &nbsp; Belum Pernah
                                        mengikuti Survei / Sensus BPS
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-10 col-12">
                                        <label class="form-label" for="customFile">Foto</label>
                                        <input type="file" class="form-control" value="{{ $user->foto }}" name="foto"
                                            required="" id="customFile" />
                                    </div>
                                </div>
                                <button class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>

<!-- Page Specific JS File -->
@endpush