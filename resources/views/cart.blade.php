@extends('layout.layout')


@php
    $title='Keranjang Belanja';
    $subTitle = 'Home';
    $subTitle2 = 'Keranjang';
@endphp

@section('content')

<!-- ..::Cart Section Start Here::.. -->
<div class="rts-cart-section">
    <div class="container">
        <h4 class="section-title">Daftar Produk di Keranjang</h4>
        <div class="row justify-content-between">
            <div class="col-xl-7">
                <div class="cart-table-area">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                        </thead>
                        <tbody>
                            <tr>
                                <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/1.jpg') }}" alt="product-thumb"></div></td>
                                <td>
                                    <div class="product-title-area">
                                        <span class="pretitle">Sepatu</span>
                                        <h4 class="product-title">Sneakers Putih Kasual</h4>
                                    </div>
                                </td>
                                <td><span class="product-price">Rp 450.000</span></td>
                                <td>
                                    <div class="cart-edit">
                                        <div class="quantity-edit">
                                            <button class="button"><i class="fal fa-minus minus"></i></button>
                                            <input type="text" class="input" value="2" />
                                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="last-td"><button class="remove-btn">Hapus</button></td>
                            </tr>
                            <tr>
                                <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/2.jpg') }}" alt="product-thumb"></div></td>
                                <td>
                                    <div class="product-title-area">
                                        <span class="pretitle">Sepatu</span>
                                        <h4 class="product-title">Slip On Santai</h4>
                                    </div>
                                </td>
                                <td><span class="product-price">Rp 320.000</span></td>
                                <td>
                                    <div class="cart-edit">
                                        <div class="quantity-edit">
                                            <button class="button"><i class="fal fa-minus minus"></i></button>
                                            <input type="text" class="input" value="1" />
                                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="last-td"><button class="remove-btn">Hapus</button></td>
                            </tr>
                            <tr>
                                <td><div class="product-thumb"><img src="{{ asset('assets/images/products/inner/cart/3.jpg') }}" alt="product-thumb"></div></td>
                                <td>
                                    <div class="product-title-area">
                                        <span class="pretitle">Sandal</span>
                                        <h4 class="product-title">Sandal Jepit Pria</h4>
                                    </div>
                                </td>
                                <td><span class="product-price">Rp 85.000</span></td>
                                <td>
                                    <div class="cart-edit">
                                        <div class="quantity-edit">
                                            <button class="button"><i class="fal fa-minus minus"></i></button>
                                            <input type="text" class="input" value="3" />
                                            <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                        </div>
                                    </div>
                                </td>
                                <td class="last-td"><button class="remove-btn">Hapus</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="coupon-apply">
                        <span class="coupon-text">Kode Kupon:</span>
                        <div class="apply-input">
                            <input type="text" placeholder="Masukkan kode kupon di sini">
                            <button type="submit" class="apply-btn">Terapkan</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="checkout-box">
                    <div class="checkout-box-inner">
                        <div class="subtotal-area">
                            <span class="title">Subtotal</span>
                            <span class="subtotal-price">Rp 855.000</span>
                        </div>
                        <div class="shipping-check">
                            <span class="title">Pengiriman</span>
                            <div class="check-options">
                                <form>
                                      <div class="form-group">
                                        <input type="checkbox" id="fltrt">
                                        <label class="check-title" for="fltrt">Tarif Flat</label>
                                      </div>
                                      <div class="form-group">
                                        <input type="checkbox" id="frsh">
                                        <label class="check-title" for="frsh">Gratis Ongkir</label>
                                      </div>
                                </form>
                            </div>
                        </div>
                        <div class="shipping-location">
                            <span class="shipping-to">Dikirim ke <span>Jakarta.</span></span>
                            <span class="change-address"><i class="fal fa-map-marker-alt mr--5"></i>Ubah alamat</span>
                        </div>
                        <div class="total-area">
                            <span class="title">Total</span>
                            <span class="total-price">Rp 855.000</span>
                        </div>
                    </div>
                    <a href="#" class="procced-btn">Lanjut ke Checkout</a>
                    <a href="#" class="continue-shopping"><i class="fal fa-long-arrow-left"></i> Lanjut Belanja</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ..::Cart Section End Here::.. -->

@endsection