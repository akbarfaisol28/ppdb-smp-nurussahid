<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Nilai Ujian</h1>
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
                                    <th>IPA</th>
                                    <th>Bahasa Indonesia</th>
                                    <th>Matematika</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
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

                                        <td><?= $dn['status']; ?></td>
                                        <td>
                                            <a href="<?= base_url('Admin/nilai/edit/' . $dn['id']); ?>" class="btn  btn-warning">Edit</a>
                                            <a href="<?= base_url('Admin/nilai/delete/' . $dn['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus formulir?');">Delete</a>
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
<br><br>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Nilai Ujian</h1>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <?php if (session()->getFlashdata('pesan')) :  ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Nilai</strong> Ujian
                    </div>
                    <div class="card-body card-block">
                        <form action="/Admin/nilai/save" method="post" class="form-horizontal">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="noakun" class=" form-control-label">Nomor Akun</label>
                                <input type="text" id="noakun" name="noakun" placeholder="Klik disini..." class="form-control" autofocus>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="nilai_ipa" class=" form-control-label">Nilai IPA</label>
                                <input type="text" id="nilai_ipa" name="nilai_ipa" placeholder="Klik disini..." class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="nilai_bhs_indo" class=" form-control-label">Nilai Bahasa Indonesia</label>
                                <input type="text" id="nilai_bhs_indo" name="nilai_bhs_indo" placeholder="Klik disini..." class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="nilai_mtk" class=" form-control-label">Nilai Matematika</label>
                                <input type="text" id="nilai_mtk" name="nilai_mtk" placeholder="Klik disini..." class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="nilai_total" class=" form-control-label">Nilai Total</label>
                                <input type="text" id="nilai_total" name="nilai_total" placeholder="Klik disini..." class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg-10">
                                    <i class=""></i> Kirim
                                </button>
                                <button type="reset" class="btn btn-danger btn-lg-10">
                                    <i class=""></i> Batal
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>