@extends('layout.layout')


@php
    $title='Semua Produk';
    $subTitle = 'Home';
    $subTitle2 = 'Semua Produk';
@endphp

@section('content')

    <!-- ..::Shop Section Start Here::.. -->
    <div class="rts-shop-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="side-sticky">
                        <div class="shop-side-action">
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Kategori Produk</span>
                                </div>
                                <div class="category-item">
                                    <div class="category-item-inner">
                                        <div class="category-title-area">
                                            <span class="point"></span>
                                            <span class="category-title">Pria (23)</span>
                                        </div>
                                        <div class="down-icon"><i class="far fa-angle-down"></i></div>
                                    </div>
                                    <div class="sub-categorys">
                                        <ul class="sub-categorys-inner">
                                            <li><span class="point"></span><a href="#">Sneakers</a></li>
                                            <li><span class="point"></span><a href="#">Sepatu Formal</a></li>
                                            <li><span class="point"></span><a href="#">Boots</a></li>
                                            <li><span class="point"></span><a href="#">Sandal Pria</a></li>
                                            <li><span class="point"></span><a href="#">Aksesoris</a></li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="category-item">
                                    <div class="category-item-inner">
                                        <div class="category-title-area">
                                            <span class="point"></span>
                                            <span class="category-title">Wanita (14)</span>
                                        </div>
                                        <div class="down-icon"><i class="far fa-angle-down"></i></div>
                                    </div>
                                    <div class="sub-categorys">
                                        <ul class="sub-categorys-inner">
                                            <li><span class="point"></span><a href="#">Heels & Pumps</a></li>
                                            <li><span class="point"></span><a href="#">Sneakers Wanita</a></li>
                                            <li><span class="point"></span><a href="#">Sandal Wanita</a></li>
                                            <li><span class="point"></span><a href="#">Sepatu Flat</a></li>
                                            <li><span class="point"></span><a href="#">Aksesoris</a></li>
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="category-item">
                                    <div class="category-item-inner">
                                        <div class="category-title-area">
                                            <span class="point"></span>
                                            <span class="category-title">Anak-anak (10)</span>
                                        </div>
                                        <div class="down-icon"><i class="far fa-angle-down"></i></div>
                                    </div>
                                    <div class="sub-categorys">
                                        <ul class="sub-categorys-inner">
                                            <li><span class="point"></span><a href="#">Sepatu Sekolah</a></li>
                                            <li><span class="point"></span><a href="#">Sneakers Anak</a></li>
                                            <li><span class="point"></span><a href="#">Sandal & Slip On</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Filter Harga</span>
                                </div>
                                <div class="nstSlider" data-range_min="50000" data-range_max="2000000" data-cur_min="100000"
                                    data-cur_max="1000000">
                            
                                    <div class="bar"></div>
                                    <div class="leftGrip price-range-grip"></div>
                                    <div class="rightGrip price-range-grip"></div>
                                </div>
                                <div class="range-label-area">
                                    <div class="min-price d-flex">
                                        <span class="range-lbl">Min:</span>
                                        <span class="currency-symbol">Rp</span>
                                        <div class="leftLabel price-range-label"></div>
                                    </div>
                                    <div class="min-price d-flex">
                                        <span class="range-lbl">Max:</span>
                                        <span class="currency-symbol">Rp</span>
                                        <div class="rightLabel price-range-label"></div>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="action-item">
                                <div class="action-top">
                                    <span class="action-title">Merek Lokal</span>
                                </div>
                                <div class="product-brands">
                                    <div class="brands-inner">
                                        <ul>
                                            <li><a class="product-brand" href="#">Brodo</a></li>
                                            <li><a class="product-brand" href="#">Piero</a></li>
                                            <li><a class="product-brand" href="#">League</a></li>
                                            <li><a class="product-brand" href="#">Compass</a></li>
                                            <li><a class="product-brand" href="#">Ardiles</a></li>
                                            <li><a class="product-brand" href="#">Carvil</a></li>
                                            <li><a class="product-brand" href="#">Wakai</a></li>
                                            <li><a class="product-brand" href="#">Tomkins</a></li>
                                            <li><a class="product-brand" href="#">Eagle</a></li>
                                            <li><a class="product-brand" href="#">Homyped</a></li>
                                            <li><a class="product-brand" href="#">Ventela</a></li>
                                            <li><a class="product-brand" href="#">Geoff Max</a></li>
                                            <li><a class="product-brand" href="#">NAH Project</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="shop-product-topbar">
                        <span class="items-onlist">Menampilkan 1–12 dari 70 produk</span>
                        <div class="filter-area">
                            <p class="select-area">
                                <select class="select">
                                    <option value="*">Rating Tertinggi</option>
                                    <option value=".popular">Paling Populer</option>
                                    <option value=".best-rate">Terbaru</option>
                                    <option value=".on-sale">Harga Rendah ➔ Tinggi</option>
                                    <option value=".featured">Harga Tinggi ➔ Rendah</option>
                                </select>
                            </p>
                            
                        </div>
                    </div>                    
                    <div class="products-area products-area3">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item3 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item2 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item3 popular sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item1 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item1 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item1 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item1 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item1 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-6">
                                <div class="product-item product-item2 element-item1 sidebar-left">
                                    <a href="#" class="product-image image-hover-variations">
                                        <div class="image-vari1 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="product-image">
                                        </div>
                                        <div class="image-vari2 image-vari"><img
                                                src="{{ asset('assets/images/products/home7/foot-2-410x410.webp') }}" alt="product-image">
                                        </div>
                                    </a>
                                    <div class="bottom-content">
                                        <a href="#" class="product-name">Men’s Canvas</a>
                                        <div class="action-wrap">
                                            <span class="product-price">$310.00</span>
                                            <a href="#" class="addto-cart"><i class="fal fa-shopping-cart"></i> Add To
                                                Cart</a>
                                        </div>
                                    </div>
                                    <div class="product-actions">
                                        <a href="#" class="product-action"><i class="fal fa-heart"></i></a>
                                        <button class="product-action product-details-popup-btn"><i
                                                class="fal fa-eye"></i></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-pagination-area mt--20">
                            <button class="prev"><i class="far fa-long-arrow-left"></i></button>
                            <button class="number active">01</button>
                            <button class="number">02</button>
                            <button class="skip-number">---</button>
                            <button class="number">07</button>
                            <button class="number">08</button>
                            <button class="next"><i class="far fa-long-arrow-right"></i></button>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
    <!-- ..::Shop Section Section End Here::.. -->



@endsection