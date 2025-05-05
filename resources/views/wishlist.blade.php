@extends('layout.layout')

@php
    $title = 'Wishlist';
    $subTitle = 'Home';
    $subTitle2 = 'Wishlist';
@endphp

@section('content')

    <!-- ..::Wishlist Section Start Here::.. -->
    <div class="rts-wishlist-section section-gap">
        <div class="container">
            <table class="table table-bordered table-hover">
                <tbody>
                    <tr class="heading">
                        <th></th>
                        <th>Nama Produk</th>
                        <th>Harga Satuan</th>
                        <th>Status Stok</th>
                        <th></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child">
                            <a href="#"><img src="{{ asset('assets/images/products/inner/cart/1.jpg') }}" alt=""></a>
                            <a href="#" class="pretitle">Sepatu Sneakers Pria</a>
                        </td>
                        <td><span class="product-price">Rp 1.500.000</span></td>
                        <td class="stock">Tersedia</td>
                        <td class="last-td"><button class="cart-btn"><i class="rt-basket-shopping"></i> Keranjang</button></td>
                    </tr>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child">
                            <a href="#"><img src="{{ asset('assets/images/products/inner/cart/2.jpg') }}" alt=""></a>
                            <a href="#" class="pretitle">Sepatu Sneakers Pria</a>
                        </td>
                        <td><span class="product-price">Rp 950.000</span></td>
                        <td class="stock">Tersedia</td>
                        <td class="last-td"><button class="cart-btn"><i class="rt-basket-shopping"></i> Keranjang</button></td>
                    </tr>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child">
                            <a href="#"><img src="{{ asset('assets/images/products/inner/cart/3.jpg') }}" alt=""></a>
                            <a href="#" class="pretitle">Sepatu Sneakers Pria</a>
                        </td>
                        <td><span class="product-price">Rp 750.000</span></td>
                        <td class="stock1">Habis</td>
                        <td class="last-td"><button class="cart-btn1" disabled><i class="rt-basket-shopping"></i> Keranjang</button></td>
                    </tr>
                    <tr>
                        <td class="first-td"><button class="remove-btn"><i class="fal fa-times"></i></button></td>
                        <td class="first-child">
                            <a href="#"><img src="{{ asset('assets/images/products/inner/cart/4.jpg') }}" alt=""></a>
                            <a href="#" class="pretitle">Sepatu Sneakers Pria</a>
                        </td>
                        <td><span class="product-price">Rp 520.000</span></td>
                        <td class="stock">Tersedia</td>
                        <td class="last-td"><button class="cart-btn"><i class="rt-basket-shopping"></i> Keranjang</button></td>
                    </tr>
                </tbody>
            </table>
            <div class="wishlist-social">
                <div class="text">
                    <a href="#">Bagikan Wishlist</a>
                </div>
                <div class="icon">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- ..::Wishlist Section End Here::.. -->

@endsection
