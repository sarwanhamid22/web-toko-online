@extends('layout.layout')

@php
    $title = 'Checkout';
    $subTitle = 'Home';
    $subTitle2 = 'Checkout';
@endphp

@section('content')

<div class="rts-checkout-section">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-8">
                <div class="coupon-area">
                    <div class="coupon-ask">
                        <span>Punya kupon?</span>
                        <button class="coupon-click">Klik di sini</button>
                    </div>
                    <div class="coupon-input-area">
                        <input type="text" placeholder="Masukkan kode kupon...">
                        <button type="submit" class="apply-btn">Gunakan</button>
                    </div>
                </div>
                <form class="checkout-form">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Nama Depan*" required></div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Nama Belakang*" required></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <select>
                                <option value="">Pilih Negara/Wilayah</option>
                                <option value="id">Indonesia</option>
                                <option value="my">Malaysia</option>
                                <option value="sg">Singapura</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Provinsi*" required></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Kota/Kabupaten*" required></div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Kode Pos*" required></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Alamat Lengkap*" required></div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text"
                                    placeholder="Detail tambahan (opsional)"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="text" placeholder="Nomor Telepon*" required></div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="input-div"><input type="email" placeholder="Alamat Email*" required></div>
                        </div>
                    </div>
                    <div class="check-options">
                        <div class="form-group">
                            <input type="checkbox" id="buat-akun">
                            <label class="check-title" for="buat-akun">Buat akun baru?</label>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="alamat-berbeda">
                            <label class="check-title" for="alamat-berbeda">Kirim ke alamat berbeda?</label>
                        </div>
                    </div>
                    <textarea id="orderNotes" cols="80" rows="4" placeholder="Catatan untuk pesanan (opsional)"></textarea>
                </form>
            </div>
            <div class="col-xl-4">
                <div class="action-item">
                    <div class="action-top">
                        <span class="action-title">Produk</span>
                        <span class="subtotal">Subtotal</span>
                    </div>
                    <div class="category-item">
                        <div class="category-item-inner">
                            <div class="category-title-area">
                                <span class="category-title">Sepatu Sneakers Anak × 1</span>
                            </div>
                            <div class="price">Rp 499.000</div>
                        </div>
                    </div>
                    <div class="category-item">
                        <div class="category-item-inner">
                            <div class="category-title-area">
                                <span class="category-title">Sepatu Hiking Pria × 1</span>
                            </div>
                            <div class="price">Rp 1.200.000</div>
                        </div>
                    </div>
                    <div class="category-item">
                        <div class="category-item-inner">
                            <div class="category-title-area">
                                <span class="category-title">Kaos T-Shirt × 1</span>
                            </div>
                            <div class="price">Rp 199.000</div>
                        </div>
                    </div>
                    <div class="action-middle">
                        <span class="subtotal">Subtotal</span>
                        <span class="total-price">Rp 1.898.000</span>
                    </div>
                    <div class="shipping-options checkout-options">
                        <span class="shipping">Pengiriman</span>
                        <form>
                            <div class="form-group">
                                <input type="checkbox" id="reguler">
                                <label class="check-title" for="reguler">Reguler</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="gratis">
                                <label class="check-title" for="gratis">Gratis Ongkir</label>
                            </div>
                        </form>
                    </div>
                    <div class="action-bottom">
                        <span class="total">Total</span>
                        <span class="total-price">Rp 1.898.000</span>
                    </div>
                </div>
                <div class="action-item m-0">
                    <div class="payment-options checkout-options">
                        <form>
                            <div class="form-group">
                                <input type="checkbox" id="transfer">
                                <label class="check-title" for="transfer">Transfer Bank</label>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="cod">
                                <label class="check-title" for="cod">Bayar di Tempat (COD)</label>
                            </div>
                            <div class="form-group last-child">
                                <input type="checkbox" id="ewallet">
                                <label class="check-title" for="ewallet">E-Wallet (Gopay, OVO, dll)</label>
                            </div>
                        </form>
                    </div>
                </div>
                <a href="#" class="place-order-btn">Lakukan Pemesanan</a>
            </div>
        </div>
    </div>
</div>

@endsection
