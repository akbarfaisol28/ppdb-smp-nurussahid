<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Page Heading -->

<?php if (in_groups('admin')) : ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Akun Calon Siswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "ppdb");
                                $query = "SELECT noakun FROM users ORDER BY noakun";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);

                                echo $row;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-database fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Formulir Pendaftaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "ppdb");
                                $query = "SELECT noakun FROM formulir_pendaftaran ORDER BY noakun";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);

                                echo $row;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Ujian
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "ppdb");
                                $query = "SELECT noakun FROM nilai ORDER BY noakun";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);

                                echo $row;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Daftar Ulang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                $connection = mysqli_connect("localhost", "root", "", "ppdb");
                                $query = "SELECT noakun FROM siswa_baru ORDER BY noakun";
                                $query_run = mysqli_query($connection, $query);
                                $row = mysqli_num_rows($query_run);

                                echo $row;
                                ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-invoice-dollar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <br>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Pertanyaan</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Asal_Sekolah</th>
                                            <th>Pertanyaan</th>
                                            <th>Jawaban</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($kontak as $p) : ?>
                                            <tr>
                                                <td scope="row"><?= $i++; ?></td>
                                                <td><?= $p['nama']; ?></td>
                                                <td><?= $p['email']; ?></td>
                                                <td><?= $p['asal_sekolah']; ?></td>
                                                <td><?= $p['pertanyaan']; ?></td>
                                                <td><?= $p['jawaban']; ?></td>

                                                <td>
                                                    <a href="<?= base_url('/dashboard/edit/' . $p['id']); ?>" class="btn  btn-warning">Edit</a>
                                                    <a href="<?= base_url('/dashboard/delete/' . $p['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus formulir?');">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>
    </div>
    <form action="/admin/dashboard/save" method="post" enctype="multipart/form-data" class="form-horizontal">
        <?= csrf_field(); ?>
        <div class="row form-group">
            <div class="col col-md-3"><label for="brosur1" class=" form-control-label">Foto Kartu Keluarga</label></div>
            <div class="col-12 col-md-9"><input type="file" id="brosur1" name="brosur1" multiple="" class="form-control-file" value="<?= old('brosur1'); ?>"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="brosur2" class=" form-control-label">brosur2 Pribadi</label></div>
            <div class="col-12 col-md-9"><input type="file" id="brosur2" name="brosur2" multiple="" class="form-control-file" value="<?= old('brosur2'); ?>"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="alur1" class=" form-control-label">Foto alur1</label></div>
            <div class="col-12 col-md-9"><input type="file" id="alur1" name="alur1" multiple="" class="form-control-file" value="<?= old('alur1'); ?>"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="alur2" class=" form-control-label">Foto Akta Kelahiran</label></div>
            <div class="col-12 col-md-9"><input type="file" id="alur2" name="alur2" multiple="" class="form-control-file" value="<?= old('alur2'); ?>"></div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class=""></i> Kirim
            </button>
            <button type="reset" class="btn btn-danger btn-lg">
                <i class=""></i> Batal
            </button>
        </div>
    </form>

    <!-- Content Row -->
<?php endif; ?>
<?php if (in_groups('user')) : ?>

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>Selamat Datang Di Website PPDB</h1>
                <h2>SMP Nurus Sahid </h2>
            </div>
        </div>
    </div>
<?php endif; ?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= $this->endSection(); ?>