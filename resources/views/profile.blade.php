@extends('layouts.app')

@section('title', 'Profile')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-social/assets/css/bootstrap.css') }}">
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
                                <img alt="image"
                                    src="{{ asset('img/avatar/avatar-1.png') }}"
                                    class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-value">Jabatan</div>
                                        <div class="profile-widget-item-label">Mitra</div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name">{{ $user->name }}<div
                                        class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div> Mitra
                                    </div>
                                </div>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                when an unknown printer took a galley of type and scrambled it to make a 
                                type specimen book.It has survived not only five centuries, but also the leap 
                                into electronic typesetting, remaining essentially unchanged. 
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-7">
                        <div class="card">
                            <form method="post"
                                class="needs-validation"
                                novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-10 col-12">
                                            <label>Nama</label>
                                            <input type="text"
                                                class="form-control"
                                                value="{{ $user->name }}"
                                                required=""
                                                placeholder="Silahkan masukkan nama anda...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-10 col-12">
                                            <label>Email</label>
                                            <input type="email"
                                                class="form-control"
                                                value="{{ $user->email }}"
                                                required=""
                                                placeholder="Silahkan masukkan email anda...">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label>Bio</label>
                                            <textarea class="form-control summernote-simple">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                                                when an unknown printer took a galley of type and scrambled it to make a 
                                                type specimen book.It has survived not only five centuries, but also the leap 
                                                into electronic typesetting, remaining essentially unchanged. 
                                            </textarea>
                                            <button class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div> 
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
