<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Link Ujian</h1>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Link Ujian</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Link Ilmu Pengetahuan Alam</th>
                                    <th>Link Bahasa Indonesia</th>
                                    <th>Link Matematika</th>
                                    <th>Aksi</th>

                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($link as $l) : ?>
                                    <tr>

                                        <td><?= $l['link_ipa']; ?>
                                        <td><?= $l['link_bhs_indo']; ?>
                                        <td><?= $l['link_mtk']; ?>
                                        <td>
                                            <a href="<?= base_url('Admin/linkujian/edit/' . $l['id']); ?>" class="btn  btn-warning">Edit</a>
                                            <a href="<?= base_url('Admin/linkujian/delete/' . $l['id']); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus formulir?');">Delete</a>
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
    <h1 class="h3 mb-0 text-gray-800">Form Link Ujian</h1>
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
                        <strong>Link</strong> Ujian
                    </div>

                    <div class="card-body card-block">
                        <form action="/Admin/linkUjian/save" method="post" class="">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <label for="link_ipa" class=" form-control-label">link Ilmu Pengetahuan Alam!</label>
                                <input type="text" id="link_ipa" name="link_ipa" placeholder="Klik disini..." class="form-control" autofocus>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="link_bhs_indo" class=" form-control-label">link Bahasa Indonesia!</label>
                                <input type="text" id="link_bhs_indo" name="link_bhs_indo" placeholder="Klik disini..." class="form-control">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label for="link_mtk" class=" form-control-label">link Matematika!</label>
                                <input type="text" id="link_mtk" name="link_mtk" placeholder="Klik disini..." class="form-control">
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