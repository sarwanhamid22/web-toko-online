@extends('layout.layout')

@php
    $title='Akun';
    $subTitle = 'Home';
    $subTitle2 = 'Akun';
@endphp


@section('head')
<style>
    .account-update-form {
        margin-top: 20px;
        border: 1px solid #eee;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .account-update-form .card-body {
        padding: 30px;
    }

    .account-update-form .account-form-group {
        margin-bottom: 20px;
    }

    .account-update-form .account-form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    .account-update-form .form-control {
        width: 100%;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .account-update-form .form-control:focus {
        border-color: #dc3545; /* merah Bootstrap */
        box-shadow: none;
    }

    .account-update-form .account-update-btn {
        width: 30%;
        background-color: #dc3545; /* Merah Bootstrap */
        color: #fff;
        padding: 18px;
        border: none;
        border-radius: 5px;
        font-weight: 600;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .account-update-form .account-update-btn:hover {
        background-color: #000;
        color: #fff;
    }

    /* Responsive untuk mobile */
    @media (max-width: 768px) {
        .account-update-form .card-body {
            padding: 20px;
        }

        .account-update-form .account-form-group {
            margin-bottom: 15px;
        }

        .account-update-form .account-update-btn {
            width: 100%;
            padding: 16px;
            font-size: 16px;
        }
    }
</style>
@endsection

@section('content')

    <div class="rts-account-section section-gap">
        <div class="container">
            <div class="account-inner">
                <div class="account-side-navigation">
                    <button class="filter-btn active" data-show=".dashboard">
                        <i class="fal fa-chart-bar"></i> Dasbor
                    </button>
                    <button class="filter-btn" data-show=".orders">
                        <i class="fal fa-shopping-cart"></i> Pesanan Saya
                    </button>
                    <button class="filter-btn" data-show=".address">
                        <i class="fal fa-map-marker-alt"></i> Alamat
                    </button>
                    <button class="filter-btn" data-show=".accountdtls">
                        <i class="fal fa-user"></i> Detail Akun
                    </button>
                    <a href="#" class="filter-btn" data-show=".wishlist">
                        <i class="fal fa-heart"></i> Wishlist
                    </a>
                    <a href="#" class="filter-btn">
                        <i class="fal fa-sign-out-alt"></i> Keluar
                    </a>
                </div>
                
                <div class="account-main-area">
                    <div class="account-main dashboard filterd-items">
                        <div class="account-profile-area">
                            <div class="profile-dp"><img src="{{ asset('assets/images/blog/img-13.jpg') }}" alt="Foto Profil"></div>
                            <div class="d-block">
                                <span class="profile-name"><span>Halo,</span> Rosalina D.</span>
                                <span class="profile-date d-block">23 Juni 2024</span>
                            </div>
                        </div>
                        <p>Dari dasbor akun kamu bisa melihat pesanan terbaru, mengelola alamat pengiriman dan penagihan, serta mengedit sandi dan detail akun.</p>
                    
                        <div class="activity-box">
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-box-check"></i></div>
                                <span class="title">Pesanan</span>
                                <span class="value">33</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                <span class="title">Alamat</span>
                                <span class="value">Jl. Contoh No.12, Jakarta</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-user"></i></div>
                                <span class="title">Detail Akun</span>
                                <span class="value">33</span>
                            </div>
                            <div class="activity-item">
                                <div class="icon"><i class="fas fa-heart"></i></div>
                                <span class="title">Wishlist</span>
                                <span class="value">33</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="account-main orders filterd-items hide">
                        <h2 class="mb--30">Pesanan Saya</h2>
                        <table class="table">
                            <thead>
                                <tr class="top-tr">
                                    <th>Pesanan</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1357</td>
                                    <td>15 Maret 2024</td>
                                    <td>Diproses</td>
                                    <td>Rp1.950.000 untuk 2 produk</td>
                                    <td><a href="#" class="btn-small d-block">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>#2468</td>
                                    <td>29 Juni 2024</td>
                                    <td>Selesai</td>
                                    <td>Rp3.640.000 untuk 5 produk</td>
                                    <td><a href="#" class="btn-small d-block">Lihat</a></td>
                                </tr>
                                <tr>
                                    <td>#2366</td>
                                    <td>2 Agustus 2024</td>
                                    <td>Selesai</td>
                                    <td>Rp2.800.000 untuk 3 produk</td>
                                    <td><a href="#" class="btn-small d-block">Lihat</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="account-main address filterd-items hide">
                        <div class="row">
                            <div class="col-xl-5 col-md-5">
                                <div class="billing-address">
                                    <h2 class="mb--30">Alamat Penagihan</h2>
                                    <address>
                                        Jl. Merdeka No. 123<br>
                                        Kelurahan Sukamaju,<br>
                                        Kecamatan Sejahtera,<br>
                                        Jakarta 10230
                                    </address>
                                    <p class="mb--10">DKI Jakarta</p>
                                    <a href="#" class="btn-small">Ubah</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="account-main accountdtls filterd-items hide">
                        <div class="account-details-form">
                            <div class="section-title">
                                <h2>Detail Akun</h2>
                            </div>
                            <div class="card account-update-form">
                                <div class="card-body">
                                    <form>
                                        <div class="account-form-group">
                                            <label for="fullName" class="account-form-label">Nama Lengkap*</label>
                                            <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap" required>
                                        </div>
                                        <div class="account-form-group">
                                            <label for="email" class="account-form-label">Alamat Email*</label>
                                            <input type="email" class="form-control" id="email" placeholder="Masukkan email aktif" required>
                                        </div>
                                        <div class="account-form-group">
                                            <label for="newPassword" class="account-form-label">Password Baru</label>
                                            <input type="password" class="form-control" id="newPassword" placeholder="Masukkan password baru">
                                        </div>
                                        <div class="account-form-group">
                                            <label for="confirmPassword" class="account-form-label">Konfirmasi Password Baru</label>
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Ulangi password baru">
                                        </div>
                                        <div class="account-form-group">
                                            <button type="submit" class="btn account-update-btn">Simpan Perubahan <i class="fal fa-long-arrow-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="offer-ad mt--40"><img src="{{ asset('assets/images/banner/45Offer.jpg') }}" alt="ad"></div>
                </div>
            </div>
        </div>
    </div>

@endsection