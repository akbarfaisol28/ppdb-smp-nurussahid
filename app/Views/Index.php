<?php

use App\Controllers\Kontak;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PPDB | SMP NURUS SAHID</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <img src="assets/img/logo.png" alt="SMP NURUS SAHID">
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>
            <div class="logo">
                <h1 class="text-light"><a href="index.html"><span>PPDB SMP NURUS SAHID</span></a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto" href="sekolah">Home</a></li>
                    <li><a class="nav-link scrollto active" href="#hero">Pendaftaran</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Brosur</a></li>
                    <li><a class="nav-link scrollto" href="#faq">Pertanyaan</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="getstarted scrollto" href="login" data-aos="zoom-in">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" data-background="" style="background-image: url(img/banner/6.png);">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>Penerimaan Peserta Didik Baru</h1>

                    <div>
                        <a href="daftar" class="btn-get-started scrollto" data-aos="zoom-in">Daftar Sekarang!</a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
                <div class="col-lg-6 col-md-8 order-1 order-lg-2 hero-img">
                    <img src="img/pamflet.png" class="img-fluid animated" alt="">
                </div>

            </div>
        </div>

    </section><!-- End Hero -->


    <main id="main">

        <!-- ======= About Section 
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="member">
                            <img src="img/sri.png" class="img-fluid" alt="">
                            <div class="member-info">
                                <div class="member-info-content">
                                    <h4>Sri Rejeki E. L., S.Pd.,</h4>
                                    <span>Kepala Sekolah SMP Nurus Sahid</span>
                                </div>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 pt-10 pt-lg-0">
                        <h3 data-aos="fade-up">Profil SMP Nurus Sahid</h3>
                        <p data-aos="fade-up" data-aos-delay="100">
                            SMP Nurus Sahid merupakan salah satu lembaga pendidikan di Probolinggo yang terletak di Dusun Kyai Hasan,
                            yang secara geografis terletak di Desa Kerpangan, Kecamatan Leces, Kabupaten Probolinggo, Provinsi Jawa
                            Timur. SMP Nurus Sahid memiliki potensi sumberdaya peserta didik, pendidik dan tenaga kependidikan,
                            dukungan sarana dan prasarana, serta partisipasi masyarakat yang baik. SMP Nurus Sahid sebagai salah
                            satu sekolah swasta dengan model Sekolah Standar Nasional SSN telah memperoleh akreditasi dengan nilai B.
                            Selain itu juga, sekolah tersebut merupakan sekolah model berwawasan keagamaan. Dengan tetap mengedepankan
                            pendidikan berbasis keunggulan lokal dan global yang memanfaatkan keunggulan lokal dan kebutuhan daya saing
                            global dalam aspek ekonomi, budaya, bahasa, teknologi informasi dan komunikasi, dan lain-lain.</p>
                    </div>
                </div>
            </div>

            </div>
       End About Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio" data-background="" style="background-image: url(img/banner/10.png);">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Brosur</h2>
                    <p>Informasi Penerimaan Peserta Didik Baru</p>
                </div>


                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12">
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 col-md-8 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/depan.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/depan.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Depan"><i class="bi bi-plus"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Tampilan Depan</h4>
                                <p>Klik Tanda Plus Untuk Memperbesar Gambar!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-8 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/belakang.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="assets/img/belakang.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Belakang"><i class="bi bi-plus"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Tampilan Belakang</h4>
                                <p>Klik Tanda Plus Untuk Memperbesar Gambar!</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="section-title">

                    <p>Alur Pendaftaran Online</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-6 col-md-8 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="img/alur.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/alur.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Depan"><i class="bi bi-plus"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Tampilan Depan</h4>
                                <p>Klik Tanda Plus Untuk Memperbesar Gambar!</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-8 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="img/alur1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="img/alur1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Tampilan Belakang"><i class="bi bi-plus"></i></a>
                            </div>
                            <div class="portfolio-info">
                                <h4>Tampilan Belakang</h4>
                                <p>Klik Tanda Plus Untuk Memperbesar Gambar!</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pertanyaan</h2>
                    <p>Pertanyaan Yang Sering Di Ajukan : </p>
                </div>

                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Apakah pendaftaran di SMP Nurus Sahid hanya berbasis online? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Tidak, Bagi calon peserta didik baru bisa daftar langsung ke sekretariat PPDB kantor SMP Nurus Sahid karena juga di fasilitasi PPDB secara offlline.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Bagaimana jika terdapat kendala dalam melakukan pendaftaran? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Silahkan menghubungi contact person yang tertera pada website atau brosur PPDB.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Apakah tes ujian pendaftaran ini dilaksanakan secara online? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Benar, Untuk tes ujian pendaftaran calon peserta didik baru diwajibkan untuk login terlebih dahulu agar bisa mengakses link ujian pada menu ujian. Link ujian akan muncul sesuai dengan jadwal ujian. Matapelajaran tes ujian meliputi: Bahasa Indonesia, Ilmu Pengetahuan Alam dan Matematika.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Bagaimana cara melakukan daftar ulang di SMP Nurus Sahid? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Setelah calon peserta didik baru dinyatakan lolos seleksi maka calon peserta didik baru harus melakukan daftar ulang dengan datang langsung ke sekolah dengan membawa berkas sesuai dengan notifikasi.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Apakah pendafataran di SMP Nurus Sahid dikenakan biaya pendaftaran? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Selama proses pendaftaran tidak ada biaya apapun, jika panitia memiinta biaya pendaftaran maka calon peserta didik baru berhak komplain. Kecuali biaya setelah proses pendaftaran berakhir.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Bagaimana jika calon peserta didik baru terlambat melakukan pendaftaran? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Silahkan menghubungi contact person yang tertera pada website atau brosur PPDB.
                            </p>
                        </div>
                    </li>
                    <?php foreach ($kontak as $p) : ?>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question"><?= $p['pertanyaan']; ?><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    <?= $p['jawaban']; ?>
                                </p>
                            </div>
                        </li>
                    <?php endforeach; ?>

                </ul>

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact" data-background="" style="background-image: url(img/banner/5.png);">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Silahkan Isi Form Jika Ada Pertanyaan Lain!</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Dusun Kyai Hasan, Desa Kerpangan, Kecamatan Leces, Kabupaten Probolinggo, Provinsi Jawa
                                    Timur.</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>smpnurussahid@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>No Telp:</h4>
                                <p>+62 8533-7555-505</p>
                            </div>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                            <br>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.3102663297007!2d113.21800195790026!3d-7.829925341385211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6525bffb421d3%3A0xb6d1d766d8eb15ef!2sMTs%20Al-Khoiriyah!5e0!3m2!1sid!2sid!4v1656391873697!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>

                        </div>


                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <form action="/Home/save" method="post" class="php-email-form">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <?php if (session()->getFlashdata('pesan')) :  ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('pesan'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Lengkap" required>
                                </div>
                                <div class="form-group col-md-6 mt-3 mt-md-0">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="pertanyaan">Pertanyaan</label>
                                <textarea class="form-control" name="pertanyaan" rows="10" id="pertanyaan" placeholder="Silahkan Isi Pertanyaan Disini" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Pertanyaan ada sudah dikirim, Terimakasih!</div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mb-3">Kirim Pertanyaan</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>AMIK Taruna Probolinggo</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
                Designed by <a href="#">Mohammat Faisol Akbar | SI | <?= date('Y'); ?></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>/assets/js/main.js"></script>

</body>

</html>