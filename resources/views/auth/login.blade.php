<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Masuk Akun &mdash; MY MONEY</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-social/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
    </head>

<body style="background: #bdb5a2">
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="https://lh3.googleusercontent.com/pw/AJFCJaWoocq3ga7bTRbUF1oz7Pxcb0VKRDZC_CanL_tXEapeLQFKMtx36np1BL2SBUKE2GhU61YK5MVVSG3lvFPWm4nLrsYzFN6QLhpQmbQ8zjMU-K5T7M7dY96gdChsVogT9Fp39dHtjLO1ca7ZyG_Ni1rP=w500-h500-s-no" alt="logo" width="130" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4>MASUK AKUN</h4></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Nama Pengguna</label>
                                    <input id="username" type="text" class="form-control" name="Nama Pengguna" placeholder="Masukkan Nama Pengguna" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Masukkan Nama Pengguna
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Kata Sandi</label>
                                        <div class="float-right">
                                            <a href="" class="text-small">
                                                Lupa Kata Sandi?
                                            </a>
                                        </div>
                                    </div>
                                    <input id="password" type="password" class="form-control" name="Kata Sandi" placeholder="Masukkan Kata Sandi" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        Masukkan Kata Sandi
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                                        <label class="custom-control-label" for="remember-me">Ingat Saya</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        MASUK
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Belum punya akun? <a href="{{ route('register') }}">Ayo buat sekarang!</a>
                    </div>
                    <div class="simple-footer">
                        © <strong>MY MONEY</strong> 2023. Hak Cipta Dilindungi.
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script src="{{ asset('assets/modules/popper.js') }}"></script>
<script src="{{ asset('assets/modules/tooltip.js') }}"></script>
<script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/modules/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
