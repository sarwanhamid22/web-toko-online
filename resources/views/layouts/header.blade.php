<header id="rtsHeader">
    <div class="header-topbar header-topbar1">
        <div class="container">
            <div class="header-top-area">
                <div class="slider-div">
                    <div class="swiper rts-topSlide1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <h3 class="welcome-text">Sepatu Lokal, Gaya Maksimal <a href="#">Belanja Sekarang</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text">Dukung UMKM: Kualitas Global <a href="#">Lihat Koleksi</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text">Langkah Percaya Diri dengan Produk Lokal <a href="#">Jelajahi Yuk</a></h3>
                            </div>
                            <div class="swiper-slide">
                                <h3 class="welcome-text">Fashion Kaki Terbaik dari Indonesia <a href="#">Cek Sekarang</a></h3>
                            </div>
                        </div>
                        <div class="slider-navigation2">
                            <div class="swiper-button-prev slider-btn prev"><i class="rt rt-arrow-left-long"></i></div>
                            <div class="swiper-button-next slider-btn next"><i class="rt rt-arrow-right-long"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-topbar-menu-area">
        <div class="container">
            <div class="menu-area1">
                <div class="menu-item">
                    <nav class="nav navbar">
                        <div class="navbar-menu">
                            <ul>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Akun Saya</a></li>
                                <li><a href="#">Whishlist</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-area-right-side">
                    <div class="contact">
                        <i aria-hidden="true" class="fas fa-phone"></i>Butuh bantuan? <strong>Chat kami - WhatsApp:
                            <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></strong>
                    </div>                    
                </div>
            </div>            
        </div>
    </div>
    <div class="navbar-sticky">
        <div class="container">
            <div class="navbar-part navbar-part1">
                <div class="navbar-inner">
                    <div class="left-side">
                        <div class="hamburger-1">
                            <a href="#" class="nav-menu-link">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                                <span class="dot5"></span>
                                <span class="dot6"></span>
                                <span class="dot7"></span>
                                <span class="dot8"></span>
                                <span class="dot9"></span>
                            </a>
                        </div>
                        <a href="#" class="logo"><img src="{{ asset('assets/images/logo1.png') }}" alt="weiboo-logo"></a>
                    </div>
                    <div class="rts-menu">
                        <nav class="menus menu-toggle">
                            <ul class="nav__menu">
                                <!-- Pria -->
                                <li class="has-dropdown">
                                    <a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Pria') {
                                            echo 'active1';
                                        }
                                    ?>" href="#">Pria <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sneakers Pria</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sepatu Formal</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sepatu Kasual</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sandal & Slip On</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                    
                                <!-- Wanita -->
                                <li class="has-dropdown">
                                    <a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Wanita') {
                                            echo 'active1';
                                        }
                                    ?>" href="#">Wanita <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Flat Shoes</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Heels & Wedges</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sneakers Wanita</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sandal Wanita</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                    
                                <!-- Anak-anak -->
                                <li class="has-dropdown">
                                    <a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Anak-anak') {
                                            echo 'active1';
                                        }
                                    ?>" href="#">Anak-anak <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sepatu Anak Laki-laki</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sepatu Anak Perempuan</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Sandal Anak</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                    
                                <!-- Merek -->
                                <li class="has-dropdown">
                                    <a class="menu-item <?php
                                        if (isset($subTitle) && $subTitle === 'Merek') {
                                            echo 'active1';
                                        }
                                    ?>" href="#">Merek <i class="rt-plus"></i></a>
                                    <ul class="dropdown-ul mega-dropdown">
                                        <li class="mega-dropdown-li">
                                            <ul class="mega-dropdown-ul">
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Brodo</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Piero</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Compass</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Wakai</a></li>
                                                <li class="dropdown-li"><a class="dropdown-link2" href="#">Merek Lokal Lain</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a class="menu-item" href="#">Lacak Pesananmu</a></li>

                            </ul>
                        </nav>
                    </div>
                    
                    <div class="responsive-hamburger">
                        <div class="hamburger-1">
                            <a href="#" class="nav-menu-link">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                                <span class="dot4"></span>
                                <span class="dot5"></span>
                                <span class="dot6"></span>
                                <span class="dot7"></span>
                                <span class="dot8"></span>
                                <span class="dot9"></span>
                            </a>
                        </div>
                    </div>
                    <div class="header-action-items header-action-items1">
                        <div class="search-part">
                            <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                            <div class="search-input-area">
                                <div class="container">
                                    <div class="search-input-inner">
                                        <div class="input-div">
                                            <input id="searchInput1" class="search-input" type="text" placeholder="Cari produk...">
                                        </div>
                                        <div class="search-close-icon"><i class="rt-xmark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="account"><i class="rt-user-2"></i></a>
                        <div class="cart action-item">
                            <div class="cart-nav">
                                <div class="cart-icon icon"><a href="#0"><i aria-hidden="true" class="fas fa-shopping-basket"></i></a><span class="wishlist-dot icon-dot">3</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-bar">
        <div class="cart-header">
            <h3 class="cart-heading">KERANJANG SAYA (3 ITEM)</h3>
            <div class="close-cart"><i class="fal fa-times"></i></div>
        </div>
        <div class="product-area">
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image1.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Sepatu Sneakers Pria</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Putih /</span>
                                <span class="size">42</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">2 ×</span>
                            <span class="product-price">Rp480.000</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="2" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image2.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Sepatu Formal Kulit</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Hitam /</span>
                                <span class="size">43</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">Rp650.000</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="1" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-item last-child">
                <div class="product-detail">
                    <div class="product-thumb"><img src="{{ asset('assets/images/slider/image5.jpg') }}" alt="product-thumb"></div>
                    <div class="item-wrapper">
                        <span class="product-name">Sepatu Slip On Wanita</span>
                        <div class="item-wrapper">
                            <span class="product-variation"><span class="color">Cream /</span>
                                <span class="size">39</span></span>
                        </div>
                        <div class="item-wrapper">
                            <span class="product-qnty">1 ×</span>
                            <span class="product-price">Rp320.000</span>
                        </div>
                    </div>
                </div>
                <div class="cart-edit">
                    <div class="quantity-edit">
                        <button class="button"><i class="fal fa-minus minus"></i></button>
                        <input type="text" class="input" value="1" />
                        <button class="button plus">+<i class="fal fa-plus plus"></i></button>
                    </div>
                    <div class="item-wrapper d-flex mr--5 align-items-center">
                        <a href="#" class="product-edit"><i class="fal fa-edit"></i></a>
                        <a href="#" class="delete-cart"><i class="fal fa-times"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cart-bottom-area">
            <span class="spend-shipping"><i class="fal fa-truck"></i> BELANJA <span class="amount">Rp200.000</span> LAGI UNTUK GRATIS ONGKIR</span>
            <span class="total-price">TOTAL: <span class="price">Rp1.450.000</span></span>
            <a href="#" class="checkout-btn cart-btn">LANJUT KE PEMBAYARAN</a>
            <a href="#" class="view-btn cart-btn">LIHAT KERANJANG</a>
        </div>
    </div>
    
    <aside class="slide-bar">
        <div class="offset-sidebar">
            <a class="hamburger-1 mobile-hamburger-1 ml--30" href="#"><span><i class="rt-xmark"></i></span></a>
        </div>
        <div class="offset-sidebar-main">
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <img src="{{ asset('assets/images/logo1.png') }}" alt="">
                    <p class="mb-30">
                        Pwt Site adalah platform terbaik untuk menemukan sepatu lokal berkualitas tinggi dengan desain kekinian dan harga bersahabat. Dukung produk UMKM Indonesia bersama kami!
                    </p>
                </div>
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Hubungi Kami</h4>
                    <ul>
                        <li class="info phone"><a href="#">+62 812 3456 7890</a></li>
                        <li class="info email"><a href="#">cs@pwtsite.com</a></li>
                        <li class="info web"><a href="#">www.pwtsite.com</a></li>
                        <li class="info location">Jl. Sisingamangaraja No.15, Purwokerto</li>
                    </ul>
                    <div class="offset-social-link">
                        <h4 class="offset-title mb-20">Ikuti Kami</h4>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="side-mobile-menu side-mobile-menu1">
            <ul id="mobile-menu-active">
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Pria <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sneakers Pria</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sepatu Formal</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sepatu Kasual</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sandal & Slip On</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Wanita <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Flat Shoes</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Heels & Wedges</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sneakers Wanita</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sandal Wanita</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Anak-anak <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sepatu Anak Laki-laki</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sepatu Anak Perempuan</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Sandal Anak</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-dropdown firstlvl">
                    <a class="mm-link" href="#">Merek <i class="rt-angle-down"></i></a>
                    <ul class="sub-menu mega-dropdown-mobile">
                        <li class="mega-dropdown-li">
                            <ul class="mega-dropdown-ul mm-show">
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Brodo</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Piero</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Compass</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Wakai</a></li>
                                <li class="dropdown-li"><a class="dropdown-link" href="#">Merek Lokal Lain</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a class="mm-link" href="#">Lacak Pesananmu</a></li>
            </ul>
        </nav>
        
        <div class="header-action-items header-action-items1 header-action-items-side">
            <div class="search-part">
                <div class="search-icon action-item icon"><i class="rt-search"></i></div>
                <div class="search-input-area">
                    <div class="container">
                        <div class="search-input-inner">
                            <select id="custom-select">
                                <option value="hide">Semua Kategori</option>
                                <option value="all">Semua Produk</option>
                                <option value="men">Sepatu Pria</option>
                                <option value="women">Sepatu Wanita</option>
                                <option value="kids">Sepatu Anak</option>
                                <option value="sneakers">Sneakers</option>
                                <option value="formal">Sepatu Formal</option>
                                <option value="sandal">Sandal</option>
                            </select>
                            <div class="input-div">
                                <div class="search-input-icon"><i class="rt-search mr--10"></i></div>
                                <input class="search-input" type="text" placeholder="Cari produk...">
                            </div>
                            <div class="search-close-icon"><i class="rt-xmark"></i></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="cart action-item">
                <div class="cart-nav">
                    <div class="cart-icon icon"><i class="rt-cart"></i><span class="wishlist-dot icon-dot">3</span>
                    </div>
                </div>
            </div>
            <div class="wishlist action-item">
                <div class="favourite-icon icon"><i class="rt-heart"></i><span class="cart-dot icon-dot">0</span>
                </div>
            </div>
            <a href="#" class="account"><i class="rt-user-2"></i></a>
        </div>
    </aside>

    @isset($title)
    <div class="page-path">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="path-title">{{ $title }}</h1>
                <ul>
                    <li>
                        <a class="home-page-link" href="#">
                            {{ $subTitle }}
                            <i class="fal fa-angle-right"></i>
                        </a>
                    </li>
                    <li>
                        <a class="current-page" href="#">{{ $subTitle2 }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endisset
</header>