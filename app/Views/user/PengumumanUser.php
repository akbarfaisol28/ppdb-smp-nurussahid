<?= $this->extend('layoutuser/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Seleksi Hasil Ujian</h1>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Status</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>Nama</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($status as $s) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $s['noakun']; ?></td>
                                        <td><?= $s['nama']; ?></td>
                                        <td><?= $s['status']; ?></td>
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