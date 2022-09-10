<?= $this->extend('layoutuser/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Nilai Ujian</h1>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Nilai</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>

                                    <th>Nilai Ipa</th>
                                    <th>Nilai Bahasa Indonesia</th>
                                    <th>Nilai Matematika</th>
                                    <th>Nilai Total</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($nilai as $dn) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $dn['noakun']; ?></td>

                                        <td><?= $dn['nilai_ipa']; ?></td>
                                        <td><?= $dn['nilai_bhs_indo']; ?></td>
                                        <td><?= $dn['nilai_mtk']; ?></td>
                                        <td><?= $dn['nilai_total']; ?></td>
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