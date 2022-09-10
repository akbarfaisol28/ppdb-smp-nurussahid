<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Pendaftaran</h1>
    <a href="admin/laporanpendaftaran/printpdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Laporan</a>

</div>
<?php if (session()->getFlashdata('pesan')) :  ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Laporan</strong>
                    </div>

                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Asal Sekolah</th>
                                    <th>Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($formulir_pendaftaran as $fp) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $fp->noakun; ?></td>
                                        <td><?= $fp->nisn; ?></td>
                                        <td><?= $fp->nama; ?></td>
                                        <td><?= $fp->alamat; ?></td>
                                        <td><?= $fp->asal_sklh; ?></td>
                                        <td><?= $fp->telepon; ?></td>
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
<?= $this->endSection(); ?>