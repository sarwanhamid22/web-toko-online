@extends('layout.layout')


@php
    $title='Detail Produk';
    $subTitle = 'Home';
    $subTitle2 = 'Detail Produk';
@endphp

@section('content')

    <!-- ..::Product-details Section Start Here::.. -->
    <div class="rts-product-details-section rts-product-details-section2 section-gap">
        <div class="container">
            <div class="row product-row">
                <div class="col-xl-12">
                    <div class="product-area details-product-area mb--70 justify-content-center">
                        <div class="product-thumb-area">
                            <div class="cursor"></div>
                            <div class="thumb-wrapper one filterd-items figure">
                                <div class="product-thumb zoom" onmousemove="zoom(event)"
                                    style="background-image: url('{{ asset('assets/images/products/product-details.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-details.jpg') }}" alt="product-thumb">
                                </div>
                            </div>
                            <div class="thumb-wrapper two filterd-items hide">
                                <div class="product-thumb zoom" onmousemove="zoom(event)"
                                    style="background-image: url('{{ asset('assets/images/products/product-filt2.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb">
                                </div>
                            </div>
                            <div class="thumb-wrapper three filterd-items hide">
                                <div class="product-thumb zoom" onmousemove="zoom(event)"
                                    style="background-image: url('{{ asset('assets/images/products/product-filt3.jpg') }}')"><img
                                        src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb">
                                </div>
                            </div>
                            <div class="product-thumb-filter-group">
                                <div class="thumb-filter filter-btn active" data-show=".one"><img
                                        src="{{ asset('assets/images/products/product-filt1.jpg') }}" alt="product-thumb-filter"></div>
                                <div class="thumb-filter filter-btn" data-show=".two"><img
                                        src="{{ asset('assets/images/products/product-filt2.jpg') }}" alt="product-thumb-filter"></div>
                                <div class="thumb-filter filter-btn" data-show=".three"><img
                                        src="{{ asset('assets/images/products/product-filt3.jpg') }}" alt="product-thumb-filter"></div>
                            </div>
                        </div>
                        <div class="contents">
                            <div class="product-status">
                                <span class="product-catagory">Sepatu Sneakers</span>
                                <div class="rating-stars-group">
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star"></i></div>
                                    <div class="rating-star"><i class="fas fa-star-half-alt"></i></div>
                                    <span>25 Ulasan</span>
                                </div>
                            </div>
                            <h2 class="product-title">Sepatu Sport Apex Runner <span class="stock">Ready Stock</span></h2>
                            <span class="product-price"><span class="old-price">Rp 750.000</span> Rp 599.000</span>
                            <p>
                                Sepatu Apex Runner hadir dengan desain ringan dan outsole anti-slip yang cocok untuk segala aktivitas. 
                                Dibuat dari material premium yang nyaman dan awet, sempurna untuk gaya santai maupun olahraga harian.
                            </p>
                            <div class="action-item3">
                                <div class="action-top">
                                    <span class="action-title">Ukuran : <strong> 42</strong></span>
                                </div>
                                <div class="color-item2">
                                    <div class="size" data-bs-toggle="tooltip" data-bs-placement="top" title="45">45</div>
                                </div>
                                <div class="color-item2">
                                    <div class="size" data-bs-toggle="tooltip" data-bs-placement="top" title="44">44</div>
                                </div>
                                <div class="color-item2">
                                    <div class="size" data-bs-toggle="tooltip" data-bs-placement="top" title="43">43</div>
                                </div>
                                <div class="color-item2">
                                    <div class="size" data-bs-toggle="tooltip" data-bs-placement="top" title="42">42</div>
                                </div>
                                <div class="color-item2">
                                    <div class="size" data-bs-toggle="tooltip" data-bs-placement="top" title="41">41</div>
                                </div>
                                <div class="color-item2">
                                    <div class="size" data-bs-toggle="tooltip" data-bs-placement="top" title="40">40</div>
                                </div>
                            </div>
                            <div class="product-bottom-action">
                                <div class="cart-edit">
                                    <div class="quantity-edit action-item">
                                        <button class="button"><i class="fal fa-minus minus"></i></button>
                                        <input type="text" class="input" value="1" />
                                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                                    </div>
                                </div>
                                <a href="#" class="addto-cart-btn action-item"><i
                                        class="rt-basket-shopping"></i> Keranjang</a>
                                <a href="#" class="wishlist-btn action-item"><i class="rt-heart"></i></a>
                            </div>
                            <div class="product-uniques">
                                <span class="sku product-unipue"><span>Kode SKU: </span> SPX-APXRUN42</span>
                                <span class="catagorys product-unipue"><span>Kategori: </span> Sepatu Pria, Sneakers</span>
                                <span class="tags product-unipue"><span>Tag: </span> sport, running, casual, lokal</span>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="product-full-details-area">
                    <div class="details-filter-bar2">
                        <button class="details-filter filter-btn active" data-show=".dls-one">Deskripsi</button>
                        <button class="details-filter filter-btn" data-show=".dls-three">Ulasan (0)</button>
                    </div>
                    <div class="full-details dls-one filterd-items">
                        <div class="full-details-inner">
                            <p class="mb--30">
                                Sepatu Apex Runner adalah pilihan terbaik untuk kamu yang aktif! Dibuat dari bahan berkualitas tinggi 
                                dengan desain ergonomis, memberikan kenyamanan maksimal saat digunakan seharian. Sol anti-slip dan 
                                daya tahan yang kuat menjadikan sepatu ini cocok untuk olahraga maupun casual harian.
                            </p>
                            <p>
                                Tersedia dalam berbagai ukuran mulai dari 40 hingga 45. Kombinasi desain stylish dan fungsional 
                                membuat Apex Runner menjadi favorit pelanggan kami. Segera dapatkan dengan harga spesial hanya di toko kami!
                            </p>
                        </div>
                    </div>
                    <div class="full-details dls-three filterd-items hide">
                        <div class="full-details-inner">
                            <p>Belum ada ulasan untuk produk ini.</p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 mr-10">
                                    <div class="reveiw-form">
                                        <h2 class="section-title">
                                            Jadilah yang pertama memberikan ulasan untuk <strong><a href="#">"Sepatu Apex Runner"</a></strong>
                                        </h2>
                                        <h4 class="sect-title">Alamat email Anda tidak akan dipublikasikan. Kolom wajib ditandai *</h4>
                                        <div class="reveiw-form-main mb-10">
                                            <div class="contact-form">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div class="input-box text-input mb-20">
                                                            <textarea name="Message" id="validationDefault01" cols="30" rows="10"
                                                                placeholder="Tulis ulasan Anda*" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-sm-12">
                                                        <div class="col-lg-12">
                                                            <div class="input-box mb-20">
                                                                <input type="text" id="validationDefault02" placeholder="Nama*" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-box mail-input mb-20">
                                                                <input type="email" id="validationDefault03" placeholder="Email*" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="rating">
                                                                <p>Rating Anda :</p>
                                                                <div class="rating-icon">
                                                                    <span class="one"><a href="#"><i class="fal fa-star"></i></a></span>
                                                                    <span class="two"><a href="#"><i class="fal fa-star"></i></a></span>
                                                                    <span class="three"><a href="#"><i class="fal fa-star"></i></a></span>
                                                                    <span class="four"><a href="#"><i class="fal fa-star"></i></a></span>
                                                                    <span class="five"><a href="#"><i class="fal fa-star"></i></a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 mb-15">
                                                            <button class="form-btn form-btn4">
                                                                Kirim <i class="fal fa-long-arrow-right"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- /review-form-main -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- ..::Product-details Section End Here::.. -->


        <!-- ..::Related Product Section Start Here::.. -->
        <div class="rts-featured-product-section1 related-product related-product1">
            <div class="container">
                <div class="rts-featured-product-section-inner">
                    <div class="section-header section-header3 section-header6">
                        <div class="wrapper">
                            <h2 class="title">Produk Lainnya</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                            <div class="product-item element-item1">
                                <a href="#" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                    <div class="image-vari2 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <a href="#" class="product-name">Sepatu Sneaker Pria Apex</a>
                                    <div class="action-wrap">
                                        <span class="price">Rp 550.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                            <div class="product-item element-item1">
                                <a href="#" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                    <div class="image-vari2 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <a href="#" class="product-name">Sepatu Sneaker Pria Apex</a>
                                    <div class="action-wrap">
                                        <span class="price">Rp 550.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                            <div class="product-item element-item1">
                                <a href="#" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                    <div class="image-vari2 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <a href="#" class="product-name">Sepatu Sneaker Pria Apex</a>
                                    <div class="action-wrap">
                                        <span class="price">Rp 550.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6 col-12">
                            <div class="product-item element-item1">
                                <a href="#" class="product-image image-hover-variations">
                                    <div class="image-vari1 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                    <div class="image-vari2 image-vari">
                                        <img src="{{ asset('assets/images/products/home7/footwear-1-410x410.webp') }}" alt="Sepatu Sneaker">
                                    </div>
                                </a>
                                <div class="bottom-content">
                                    <div class="star-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <a href="#" class="product-name">Sepatu Sneaker Pria Apex</a>
                                    <div class="action-wrap">
                                        <span class="price">Rp 550.000</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- ..::Related Product Section End Here::.. -->
    
        <div class="rts-account-section"></div>


        

@endsection