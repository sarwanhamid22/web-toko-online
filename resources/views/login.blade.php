@extends('layout.layout')

@php
$title = 'Masuk';
$subTitle = 'Home';
$subTitle2 = 'Masuk';
@endphp

@section('content')

    <!--login-area start-->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <!-- Form Login -->
                <div class="col-lg-6 col-md-12 mr-10">
                    <div class="login-form">
                        <div class="section-title">
                            <h2>Masuk Akun</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form">
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Username atau alamat email*" required />
                                    </div>
                                    <div class="form">
                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Kata sandi*" required />
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <input type="checkbox" class="form-check-input" id="remember" />
                                        <label for="remember" class="form-label">Ingat saya</label>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Masuk <i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                    <a class="forgot-password" href="#">Lupa kata sandi?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Registrasi -->
                <div class="col-lg-6 col-md-12 ml-10">
                    <div class="register-form">
                        <div class="section-title">
                            <h2>Daftar Akun Baru</h2>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form">
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Nama pengguna*" required />
                                    </div>
                                    <div class="form">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Alamat email*" required />
                                    </div>
                                    <div class="form">
                                        <div class="password-input">
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Kata sandi*" required />
                                            <span class="show-password-input"></span>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <button type="submit" class="btn">Daftar <i class="fal fa-long-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--login-area end-->

@endsection
