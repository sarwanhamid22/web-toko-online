@extends('layout.layout')

@php
    $title = 'Lacak Pesanan';
    $subTitle = 'Home';
    $subTitle2 = 'Lacak Pesanan';
@endphp

@section('content')



@section('head')
<style>
    .order-track-section {
        max-width: 500px;
        margin: 50px auto;
        padding: 30px;
        border: 1px solid #eee;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        background-color: #fff;
    }

    .order-track-title {
        text-align: center;
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .order-track-subtitle {
        text-align: center;
        font-size: 14px;
        color: #555;
        margin-bottom: 30px;
    }

    .order-track-form-group {
        margin-bottom: 20px;
    }

    .order-track-form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #333;
    }

    .order-track-input {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
        transition: border-color 0.3s ease;
    }

    .order-track-input:focus {
        border-color: #dc3545; /* merah */
        outline: none;
    }

    .order-track-btn {
        width: 100%;
        background-color: #dc3545; /* Merah */
        color: #fff;
        padding: 15px;
        border: none;
        border-radius: 5px;
        font-weight: 600;
        font-size: 16px;
        text-transform: uppercase;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .order-track-btn:hover {
        background-color: #000;
        color: #fff;
    }

    /* Mobile friendly */
    @media (max-width: 576px) {
        .order-track-section {
            margin: 20px;
            padding: 20px;
        }
    }
</style>
@endsection


<div class="order-track-section">
    <h2 class="order-track-title">Cek Pesanan</h2>
    <p class="order-track-subtitle">
        Anda bisa melihat status pesanan Anda walaupun bukan pengguna terdaftar.
        Cukup masukkan nomor pesanan dan email Anda.
    </p>
    <form>
        <div class="order-track-form-group">
            <label for="orderNumber" class="order-track-form-label">Nomor Pemesanan*</label>
            <input type="text" id="orderNumber" class="order-track-input" placeholder="Masukkan nomor pemesanan" required>
        </div>
        <div class="order-track-form-group">
            <label for="email" class="order-track-form-label">E-mail*</label>
            <input type="email" id="email" class="order-track-input" placeholder="Masukkan email Anda" required>
        </div>
        <button type="submit" class="order-track-btn">Cek Status</button>
    </form>
</div>

@endsection
