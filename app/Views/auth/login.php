<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN | SMP NURUS SAHID</title>
    <!-- Favicons -->
    <link href="<?= base_url(); ?>/img/favicon.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" data-background="" style="background-image: url(img/banner/3.png);">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">


                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 pt-12 d-none d-lg-block bg-login-image">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b><?= lang('Auth.loginTitle') ?></b></h1>
                                    </div>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <form action="<?= route_to('login') ?>" method="post" class="user">
                                        <?= csrf_field() ?>
                                        <?php if ($config->validFields === ['email']) : ?>

                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user<?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>" autofocus>
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php else : ?>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-user<?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Nomor Akun" autofocus>
                                                <div class="invalid-feedback">
                                                    <?= session('errors.login') ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <!-- <div class="form-group">
                                            <input type="text" name="noakun" class="form-control form-control-user" placeholder="Nomor Akun">
                                            <div class="invalid-feedback">
                                                
                                            </div>
                                        </div> -->


                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user<?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        </div>
                                        <?php if ($config->allowRemembering) : ?>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" name="remember" class="custom-control-inputt" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                                    <?= lang('Auth.rememberMe') ?>

                                                </div>
                                            </div>
                                        <?php endif; ?>


                                        <button type="submit" class="btn btn-primary btn-user btn-block"><?= lang('Auth.loginAction') ?></button>
                                        <hr>

                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        <a class="small" href="lupanomor">Lupa Nomor Akun?</a>
                                    </div>


                                    <?php if ($config->activeResetter) : ?>
                                        <div class="text-center">
                                            <a class="small" href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
                                            <!-- <a class="small" href="gantipassword">Lupa Password?</a> -->
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($config->allowRegistration) : ?>
                                        <div class="text-center">
                                            <a class="small" href="<?= route_to('register') ?>">Belum Punya Akun? Daftar Sekarang!</a>
                                            <!-- <a class="small" href="daftar">Tidak Punya Akun, Buat Akun Baru!</a> -->
                                        </div>
                                    <?php endif; ?>
                                    <div class="text-center">
                                        <a class="small" href="/"> &laquo; Kembali Ke Halaman Utama</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

</body>

</html>