@extends('layout.layout')

@php
    $title = 'Pesanan Selesai';
    $subTitle = 'Home';
    $subTitle2 = 'Pesanan Selesai';
@endphp

@section('content')

<!-- Pesanan Selesai Start -->
<div class="thanks-area">
    <div class="container">
        <div class="section-inner">
            <div class="section-icon">
                <i class="fal fa-check"></i>
            </div>
            <div class="section-title">
                <h2 class="sub-title">Terima Kasih atas Pesanan Anda!</h2>
                <h3 class="sect-title">
                    Pesanan Anda sudah kami terima dan sedang diproses. <br>
                    Anda dapat kembali ke halaman utama atau melacak status pesanan Anda.
                </h3>
            </div>
            <div class="section-button">
                <a class="btn-1" href="{{ url('/') }}"><i class="fal fa-long-arrow-left"></i> Kembali ke Beranda</a>
                <h3>
                    Ingin cek status pesanan?
                    <a class="btn-2" href="#"> Lacak Pesanan</a>
                </h3>
            </div>
        </div>
    </div>
</div>
<!-- Pesanan Selesai End -->

@endsection
