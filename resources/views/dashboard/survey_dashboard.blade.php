@extends('layouts.app')

@section('title', 'Ecommerce Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/owl.carousel/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/flag-icon-css/css/flag-icon.min.css') }}">
@endpush

@section('main')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Statistik -
                                <div class="dropdown d-inline">
                                    <a href="#" id="orders-month">Rekrutmen</a>
                                </div>
                            </div>
                            <div class="card-stats-items">
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">24</div>
                                    <div class="card-stats-item-label">Pendaftar</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">12</div>
                                    <div class="card-stats-item-label">Seleksi</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">23</div>
                                    <div class="card-stats-item-label">Diterima</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Mitra</h4>
                            </div>
                            <div class="card-body">
                                23
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                            <div class="card-stats-title">Statistik -
                                <div class="dropdown d-inline">
                                    <a href="#" id="orders-month">Survei</a>
                                </div>
                            </div>
                            <div class="card-stats-items">
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">5</div>
                                    <div class="card-stats-item-label">Draft</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">3</div>
                                    <div class="card-stats-item-label">Survei</div>
                                </div>
                                <div class="card-stats-item">
                                    <div class="card-stats-item-count">2</div>
                                    <div class="card-stats-item-label">Selesai</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-icon shadow-primary bg-success">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Survei</h4>
                            </div>
                            <div class="card-body">
                                2
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>Rekrutmen vs Survei</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart"
                                height="182"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card gradient-bottom">
                        <div class="card-header">
                            <h4>Detail Angka</h4>
                        </div>
                        <div class="card-body"
                            id="top-5-scroll">
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-3-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">BPS</div>
                                        </div>
                                        <div class="media-title">Rekrutmen</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary"
                                                    data-width="64%"></div>
                                                <div class="budget-price-label">64</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger"
                                                    data-width="43%"></div>
                                                <div class="budget-price-label">43</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-4-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">BPS</div>
                                        </div>
                                        <div class="media-title">Survei</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary"
                                                    data-width="84%"></div>
                                                <div class="budget-price-label">84</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger"
                                                    data-width="60%"></div>
                                                <div class="budget-price-label">60</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="mr-3 rounded"
                                        width="55"
                                        src="{{ asset('img/products/product-1-50.png') }}"
                                        alt="product">
                                    <div class="media-body">
                                        <div class="float-right">
                                            <div class="font-weight-600 text-muted text-small">BPS</div>
                                        </div>
                                        <div class="media-title">Pembayaran</div>
                                        <div class="mt-1">
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-primary"
                                                    data-width="34%"></div>
                                                <div class="budget-price-label">34</div>
                                            </div>
                                            <div class="budget-price">
                                                <div class="budget-price-square bg-danger"
                                                    data-width="28%"></div>
                                                <div class="budget-price-label">28</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                        <div class="card-body">
                            <div class="owl-carousel owl-theme"
                                id="products-carousel">
                                <div>
                                    <div class="product-item pb-3">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('img/products/product-4-50.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">iBook Pro 2018</div>
                                            <div class="product-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="text-muted text-small">67 Sales</div>
                                            <div class="product-cta">
                                                <a href="#"
                                                    class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('img/products/product-3-50.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">oPhone S9 Limited</div>
                                            <div class="product-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half"></i>
                                            </div>
                                            <div class="text-muted text-small">86 Sales</div>
                                            <div class="product-cta">
                                                <a href="#"
                                                    class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="product-item">
                                        <div class="product-image">
                                            <img alt="image"
                                                src="{{ asset('img/products/product-1-50.png') }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="product-details">
                                            <div class="product-name">Headphone Blitz</div>
                                            <div class="product-review">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="text-muted text-small">63 Sales</div>
                                            <div class="product-cta">
                                                <a href="#"
                                                    class="btn btn-primary">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>History Pembayaran</h4>
                            <div class="card-header-action">
                                <a href="#"
                                    class="btn btn-danger">Lihat selengkapnya<i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive table-invoice">
                                <table class="table-striped table">
                                    <tr>
                                        <th>ID Pembayaran</th>
                                        <th>Mitra</th>
                                        <th>Status</th>
                                        <th>Jatuh Tempo</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <tr>
                                        <td><a href="#">SRV-001</a></td>
                                        <td class="font-weight-600">Kusnadi</td>
                                        <td>
                                            <div class="badge badge-warning">Unpaid</div>
                                        </td>
                                        <td>July 19, 2018</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">SRV-002</a></td>
                                        <td class="font-weight-600">Hasan Basri</td>
                                        <td>
                                            <div class="badge badge-success">Paid</div>
                                        </td>
                                        <td>July 21, 2018</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">SRV-003</a></td>
                                        <td class="font-weight-600">Muhamad Nuruzzaki</td>
                                        <td>
                                            <div class="badge badge-warning">Unpaid</div>
                                        </td>
                                        <td>July 22, 2018</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">SRV-004</a></td>
                                        <td class="font-weight-600">Agung Ardiansyah</td>
                                        <td>
                                            <div class="badge badge-warning">Unpaid</div>
                                        </td>
                                        <td>July 22, 2018</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">SRV-005</a></td>
                                        <td class="font-weight-600">Ardian Rahardiansyah</td>
                                        <td>
                                            <div class="badge badge-success">Paid</div>
                                        </td>
                                        <td>July 28, 2018</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-hero">
                        <div class="card-header">
                            <div class="card-icon">
                                <i class="far fa-question-circle"></i>
                            </div>
                            <h4>3</h4>
                            <div class="card-description">Mitra butuh bantuan</div>
                        </div>
                        <div class="card-body p-0">
                            <div class="tickets-list">
                                <a href="#"
                                    class="ticket-item">
                                    <div class="ticket-title">
                                        <h4>Bagaimana cara isi data?</h4>
                                    </div>
                                    <div class="ticket-info">
                                        <div>Laila Tazkiah</div>
                                        <div class="bullet"></div>
                                        <div class="text-primary">1 min ago</div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="ticket-item">
                                    <div class="ticket-title">
                                        <h4>Jangka waktu survei berapa lama?</h4>
                                    </div>
                                    <div class="ticket-info">
                                        <div>Rizal Fakhri</div>
                                        <div class="bullet"></div>
                                        <div>2 hours ago</div>
                                    </div>
                                </a>
                                <a href="#"
                                    class="ticket-item">
                                    <div class="ticket-title">
                                        <h4>Pembayaran diberikan kapan?</h4>
                                    </div>
                                    <div class="ticket-info">
                                        <div>Syahdan Ubaidillah</div>
                                        <div class="bullet"></div>
                                        <div>6 hours ago</div>
                                    </div>
                                </a>
                                <a href="features-tickets.html"
                                    class="ticket-item ticket-more">
                                    Lihat Semua <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.js') }}"></script>
    <script src="{{ asset('library/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index.js') }}"></script>
@endpush
