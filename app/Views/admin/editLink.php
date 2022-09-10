<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Edit Seleksi Hasil Ujian</h1>
</div>
<div class="card">
    <div class="card-header">
        <strong>Edit</strong> Hasil Ujian
    </div>
    <div class="card-body card-block">
        <form action="/Admin/linkujian/update/<?= $link['id']; ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="link_ipa" class=" form-control-label">link Ilmu Pengetahuan Alam!</label>
                <input type="text" id="link_ipa" name="link_ipa" placeholder="Klik disini..." class="form-control" value="<?= (old('link_ipa')) ? old('link_ipa') : $link['link_ipa']; ?>" autofocus>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="link_bhs_indo" class=" form-control-label">link Bahasa Indonesia!</label>
                <input type="text" id="link_bhs_indo" name="link_bhs_indo" placeholder="Klik disini..." class="form-control" value="<?= (old('link_bhs_indo')) ? old('link_bhs_indo') : $link['link_bhs_indo']; ?>" autofocus>
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label for="link_mtk" class=" form-control-label">link Matematika!</label>
                <input type="text" id="link_mtk" name="link_mtk" placeholder="Klik disini..." class="form-control" value="<?= (old('link_mtk')) ? old('link_mtk') : $link['link_mtk']; ?>" autofocus>
                <span class="help-block"></span>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-lg-10">
                    <i class="fa "></i> Kirim
                </button>
                <button type="reset" class="btn btn-danger btn-lg-10">
                    <i class="fa "></i> Batal
                </button>
            </div>
        </form>
    </div>

</div>
<?= $this->endSection(); ?>