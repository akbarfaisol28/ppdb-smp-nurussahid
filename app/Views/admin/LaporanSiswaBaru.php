<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan Siswa Baru</h1>
    <a href="admin/laporansiswabaru/printpdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Download Laporan</a>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>Nilai Total</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($nilai as $dn) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $dn['noakun']; ?></td>
                                        <td><?= $dn['nilai_total']; ?></td>

                                        <td><?php foreach ($status as $s) : ?><?= $s['status']; ?><?php endforeach; ?></td>
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