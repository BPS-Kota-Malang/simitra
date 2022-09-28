<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#"
                    data-toggle="sidebar"
                    class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#"
                    data-toggle="search"
                    class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
        </ul>
        <div class="search-element">
            <input class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
                data-width="250">
            <button class="btn"
                type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            <div class="search-result">
                <div class="search-header">
                    Histories
                </div>
                <div class="search-item">
                    <a href="#">Cara mendaftarkan diri pada kegiatan survei.</a>
                    <a href="#"
                        class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="#">Melihat hasil seleksi mitra.</a>
                    <a href="#"
                        class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-item">
                    <a href="">Tata cara menggunakan aplikasi simitra.</a>
                    <a href="#"
                        class="search-close"><i class="fas fa-times"></i></a>
                </div>
                <div class="search-header">
                    Result
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded"
                            width="30"
                            src="{{ asset('img/products/product-3-50.png') }}"
                            alt="product">
                        Buat Akun Baru
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded"
                            width="30"
                            src="{{ asset('img/products/product-2-50.png') }}"
                            alt="product">
                        Lihat Web Resmi BPS
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <img class="mr-3 rounded"
                            width="30"
                            src="{{ asset('img/products/product-1-50.png') }}"
                            alt="product">
                        Informasi Survei
                    </a>
                </div>
                <div class="search-header">
                    Projects
                </div>
                <div class="search-item">
                    <a href="#">
                        <div class="search-icon bg-danger mr-3 text-white">
                            <i class="fas fa-code"></i>
                        </div>
                        Tata syarat dan ketentuan menjadi mitra
                    </a>
                </div>
                <div class="search-item">
                    <a href="#">
                        <div class="search-icon bg-primary mr-3 text-white">
                            <i class="fas fa-laptop"></i>
                        </div>
                        Tata cara melakukan survei di BPS - Kota Malang
                    </a>
                </div>
            </div>
        </div>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown dropdown-list-toggle"><a href="#"
                data-toggle="dropdown"
                class="nav-link nav-link-lg message-toggle beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Pesan
                    <div class="float-right">
                        <a href="#">Baca Semua Pesan</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-message">
                    <a href="#"
                        class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-1.png') }}"
                                class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Kusnaedi</b>
                            <p>Hallo, Bro!</p>
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-2.png') }}"
                                class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Dedik Sugiharto</b>
                            <p>Bagaimana cara mengikuti seleksi mitra di BPS - Malang?</p>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-avatar">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-3.png') }}"
                                class="rounded-circle">
                            <div class="is-online"></div>
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Agung Ardiansyah</b>
                            <p>Apa saja syarat yang harus dipenuhi untuk menjadi mitra BPS Malang?</p>
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-avatar">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-4.png') }}"
                                class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Ardian Rahardiansyah</b>
                            <p>Dimana kita dapat melihat hasil seleksi mitra BPS Malang?</p>
                            <div class="time">16 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-avatar">
                            <img alt="image"
                                src="{{ asset('img/avatar/avatar-5.png') }}"
                                class="rounded-circle">
                        </div>
                        <div class="dropdown-item-desc">
                            <b>Alfa Zulkarnain</b>
                            <p>Apa saja yang harus diperhatikan saat survei berlangsung?</p>
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">Lihat Semua Pesan<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown dropdown-list-toggle"><a href="#"
                data-toggle="dropdown"
                class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                <div class="dropdown-header">Notifikasi
                    <div class="float-right">
                        <a href="#">Baca Semua Pesan</a>
                    </div>
                </div>
                <div class="dropdown-list-content dropdown-list-icons">
                    <a href="#"
                        class="dropdown-item dropdown-item-unread">
                        <div class="dropdown-item-icon bg-primary text-white">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Tata syarat dan ketentuan menjadi mitra BPS
                            <div class="time text-primary">2 Min Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Lihat pendaftar calon mitra BPS Kota Malang
                            <div class="time">10 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-success text-white">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Lihat hasil seleksi calon mitra BPS Kota Malang
                            <div class="time">12 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Peraturan dan tata tertib yang harus dipatuhi mitra
                            <div class="time">17 Hours Ago</div>
                        </div>
                    </a>
                    <a href="#"
                        class="dropdown-item">
                        <div class="dropdown-item-icon bg-info text-white">
                            <i class="fas fa-bell"></i>
                        </div>
                        <div class="dropdown-item-desc">
                            Selamat Datang Di Aplikasi Mitra BPS Kota Malang
                            <div class="time">Yesterday</div>
                        </div>
                    </a>
                </div>
                <div class="dropdown-footer text-center">
                    <a href="#">Lihat Semua<i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </li>
        <li class="dropdown"><a href="#"
                data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image"
                    src="{{ asset('img/avatar/avatar-1.png') }}"
                    class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{ $user->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Logged in 5 min ago</div>
                <a href="{{ route('home') }}"
                    class="dropdown-item has-icon m-1">
                    <i class="fa fa-tachometer left-1"></i>Dashboard
                </a>
                <a href="{{ route('profile') }}"
                    class="dropdown-item has-icon">
                    <i class="far fa-user"></i>Profil
                </a>
                <a href="{{ route('activity') }}"
                    class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Aktifitas
                </a>
                <a href="{{ route('settings') }}"
                    class="dropdown-item has-icon">
                    <i class="fas fa-cog"></i> Pengaturan
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="dropdown-item has-icon text-danger"><i class="fas fa-sign-out-alt"></i>Logout
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"></i>
                    @csrf
                    </form>
                </a>
            </div>
        </li>
    </ul>
</nav>
