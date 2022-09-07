@extends('layouts.dashboard')

@section('content')
<section class="section">
  <div class="row">
    <div class="col-lg-4 col-md-2 col-sm-9">
      <div class="card card-statistic-2 border">
        <div class="card-stats">
          <div class="card-stats-title">Catatan Statistik -
            <div class="dropdown d-inline">
              <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
              <ul class="dropdown-menu dropdown-menu-sm">
                <li class="dropdown-title">Pilih Bulan</li>
                <li><a href="#" class="dropdown-item">Januari</a></li>
                <li><a href="#" class="dropdown-item">Februari</a></li>
                <li><a href="#" class="dropdown-item">Maret</a></li>
                <li><a href="#" class="dropdown-item">April</a></li>
                <li><a href="#" class="dropdown-item">Mei</a></li>
                <li><a href="#" class="dropdown-item">Juni</a></li>
                <li><a href="#" class="dropdown-item">Juli</a></li>
                <li><a href="#" class="dropdown-item">Agustus</a></li>
                <li><a href="#" class="dropdown-item active">September</a></li>
                <li><a href="#" class="dropdown-item">Oktober</a></li>
                <li><a href="#" class="dropdown-item">November</a></li>
                <li><a href="#" class="dropdown-item">Desember</a></li>
              </ul>
            </div>
          </div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">5</div>
              <div class="card-stats-item-label">Admin</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">2</div>
              <div class="card-stats-item-label">Tata <br>Usaha</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">16</div>
              <div class="card-stats-item-label">Ketua<br>Tim</div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Mitra</h4>
          </div>
          <div class="card-body">
            59
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-4 col-md-2 col-sm-9">
      <div class="card card-statistic-2 border">
        <div class="card-stats">
          <div class="card-stats-title">Catatan Statistik -
            <div class="dropdown d-inline">
              <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
              <ul class="dropdown-menu dropdown-menu-sm">
                <li class="dropdown-title">Pilih Bulan</li>
                <li><a href="#" class="dropdown-item">Januari</a></li>
                <li><a href="#" class="dropdown-item">Februari</a></li>
                <li><a href="#" class="dropdown-item">Maret</a></li>
                <li><a href="#" class="dropdown-item">April</a></li>
                <li><a href="#" class="dropdown-item">Mei</a></li>
                <li><a href="#" class="dropdown-item">Juni</a></li>
                <li><a href="#" class="dropdown-item">Juli</a></li>
                <li><a href="#" class="dropdown-item">Agustus</a></li>
                <li><a href="#" class="dropdown-item active">September</a></li>
                <li><a href="#" class="dropdown-item">Oktober</a></li>
                <li><a href="#" class="dropdown-item">November</a></li>
                <li><a href="#" class="dropdown-item">Desember</a></li>
              </ul>
            </div>
          </div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">7</div>
              <div class="card-stats-item-label">Pen-<br>cacah</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">3</div>
              <div class="card-stats-item-label">Pen-<br>gawas</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">14</div>
              <div class="card-stats-item-label">Koor<br>Wilayah</div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Subject Matter</h4>
          </div>
          <div class="card-body">
            75
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-2 col-sm-9">
      <div class="card card-statistic-2 border">
        <div class="card-stats">
          <div class="card-stats-title">Catatan Statistik -
            <div class="dropdown d-inline">
              <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">August</a>
              <ul class="dropdown-menu dropdown-menu-sm">
                <li class="dropdown-title">Pilih Bulan</li>
                <li><a href="#" class="dropdown-item">Januari</a></li>
                <li><a href="#" class="dropdown-item">Februari</a></li>
                <li><a href="#" class="dropdown-item">Maret</a></li>
                <li><a href="#" class="dropdown-item">April</a></li>
                <li><a href="#" class="dropdown-item">Mei</a></li>
                <li><a href="#" class="dropdown-item">Juni</a></li>
                <li><a href="#" class="dropdown-item">Juli</a></li>
                <li><a href="#" class="dropdown-item">Agustus</a></li>
                <li><a href="#" class="dropdown-item active">September</a></li>
                <li><a href="#" class="dropdown-item">Oktober</a></li>
                <li><a href="#" class="dropdown-item">November</a></li>
                <li><a href="#" class="dropdown-item">Desember</a></li>
              </ul>
            </div>
          </div>
          <div class="card-stats-items">
            <div class="card-stats-item">
              <div class="card-stats-item-count">7</div>
              <div class="card-stats-item-label">Rekrutmen</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">3</div>
              <div class="card-stats-item-label">Info</div>
            </div>
            <div class="card-stats-item">
              <div class="card-stats-item-count">14</div>
              <div class="card-stats-item-label">Kegiatan</div>
            </div>
          </div>
        </div>
        <div class="card-icon shadow-primary bg-primary">
          <i class="fas fa-archive"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Total Survei</h4>
          </div>
          <div class="card-body">
            62
          </div>
        </div>
      </div>
    </div>


  </div>
  <div class="row">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header">
          <h4>Mitra vs Survei</h4>
        </div>
        <div class="card-body">
          <canvas id="myChart" height="158"></canvas>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card gradient-bottom">
        <div class="card-header">
          <h4>Ringkasan Data</h4>
          <div class="card-header-action dropdown">
            <a href="#" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Bulan</a>
            <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
              <li class="dropdown-title">Pilih periode</li>
              <li><a href="#" class="dropdown-item">Hari ini</a></li>
              <li><a href="#" class="dropdown-item">Minggu</a></li>
              <li><a href="#" class="dropdown-item active">Bulan</a></li>
              <li><a href="#" class="dropdown-item">Tahun ini</a></li>
            </ul>
          </div>
        </div>
        <div class="card-body" id="top-5-scroll">
          <ul class="list-unstyled list-unstyled-border">
            <li class="media">
              <img class="mr-3 rounded" width="55" src="{{ asset('admin/stisla/assets/img/products/product-3-50.png') }}" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">59 Orang</div></div>
                <div class="media-title">Mitra</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="70%"></div>
                    <div class="budget-price-label">40</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="30%"></div>
                    <div class="budget-price-label">19</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="{{ asset('admin/stisla/assets/img/products/product-4-50.png') }}" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">7 Orang</div></div>
                <div class="media-title">Pencacah</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="60%"></div>
                    <div class="budget-price-label">4</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="40%"></div>
                    <div class="budget-price-label">3</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="{{ asset('admin/stisla/assets/img/products/product-1-50.png') }}" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">3 Orang</div></div>
                <div class="media-title">Pengawas</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="33%"></div>
                    <div class="budget-price-label">1</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="66%"></div>
                    <div class="budget-price-label">2</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="{{ asset('admin/stisla/assets/img/products/product-3-50.png') }}" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">14 Orang</div></div>
                <div class="media-title">Koordinator Wilayah</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="30%"></div>
                    <div class="budget-price-label">4</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="70%"></div>
                    <div class="budget-price-label">10</div>
                  </div>
                </div>
              </div>
            </li>
            <li class="media">
              <img class="mr-3 rounded" width="55" src="{{ asset('admin/stisla/assets/img/products/product-5-50.png') }}" alt="product">
              <div class="media-body">
                <div class="float-right"><div class="font-weight-600 text-muted text-small">75 Orang</div></div>
                <div class="media-title">Subjec Matter</div>
                <div class="mt-1">
                  <div class="budget-price">
                    <div class="budget-price-square bg-primary" data-width="75%"></div>
                    <div class="budget-price-label">50</div>
                  </div>
                  <div class="budget-price">
                    <div class="budget-price-square bg-danger" data-width="25%"></div>
                    <div class="budget-price-label">25</div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="card-footer pt-3 d-flex justify-content-center">
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-primary" data-width="20"></div>
            <div class="budget-price-label">Pria</div>
          </div>
          <div class="budget-price justify-content-center">
            <div class="budget-price-square bg-danger" data-width="20"></div>
            <div class="budget-price-label">Wanita</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Pembayaran</h4>
          <div class="card-header-action">
            <a href="#" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>Id Pembayaran</th>
                <th>Nama Mitra</th>
                <th>Status</th>
                <th>Jatuh Tempo</th>
                <th>Aksi</th>
              </tr>
              <tr>
                <td><a href="#">BPS-ST001</a></td>
                <td class="font-weight-600">Darman Saragih</td>
                <td><div class="badge badge-success">Sudah dibayar</div></td>
                <td>July 19, 2022</td>
                <td>
                  <a href="#" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td><a href="#">BPS-ST002</a></td>
                <td class="font-weight-600">Wildan Ahmad</td>
                <td><div class="badge badge-success">Sudah dibayar</div></td>
                <td>July 21, 2022</td>
                <td>
                  <a href="#" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td><a href="#">BPS-ST003</a></td>
                <td class="font-weight-600">Wahyu Fajar</td>
                <td><div class="badge badge-warning">Belum dibayar</div></td>
                <td>July 22, 2022</td>
                <td>
                  <a href="#" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td><a href="#">BPS-ST004</a></td>
                <td class="font-weight-600">Qorina Anindhita</td>
                <td><div class="badge badge-warning">Belum dibayar</div></td>
                <td>July 22, 2022</td>
                <td>
                  <a href="#" class="btn btn-primary">Detail</a>
                </td>
              </tr>
              <tr>
                <td><a href="#">BPS-ST005</a></td>
                <td class="font-weight-600">Mutiara Rahmanda</td>
                <td><div class="badge badge-success">Sudah dibayar</div></td>
                <td>July 28, 2022</td>
                <td>
                  <a href="#" class="btn btn-primary">Detail</a>
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
          <h4>4</h4>
          <div class="card-description">User butuh bantuan</div>
        </div>
        <div class="card-body p-0">
          <div class="tickets-list">
            <a href="#" class="ticket-item">
              <div class="ticket-title">
                <h4>Mitra tidak dapat melihat postingan</h4>
              </div>
              <div class="ticket-info">
                <div>Dirgantara</div>
                <div class="bullet"></div>
                <div class="text-primary">1 menit lalu</div>
              </div>
            </a>
            <a href="#" class="ticket-item">
              <div class="ticket-title">
                <h4>Ketua tim tidak dapat membuat postingan</h4>
              </div>
              <div class="ticket-info">
                <div>Rizal Fakhri</div>
                <div class="bullet"></div>
                <div>2 jam lalu</div>
              </div>
            </a>
            <a href="#" class="ticket-item">
              <div class="ticket-title">
                <h4>Pengawas tidak dapat memberikan penilaian</h4>
              </div>
              <div class="ticket-info">
                <div>Syahdan Ubaidillah</div>
                <div class="bullet"></div>
                <div>6 jam lalu</div>
              </div>
            </a>
            <a href="features-tickets.html" class="ticket-item ticket-more">
              View All <i class="fas fa-chevron-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
