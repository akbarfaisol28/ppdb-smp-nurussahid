<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Seleksi Hasil Ujian</h1>
</div>
<div class="card">
    <div class="card-header">
        <strong>Hasil</strong> Ujian
    </div>
    <div class="card-body card-block">
        <form action="user/pengumumanuser" method="post" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3"><label for="hf-noakun" class=" form-control-label">Nomor Akun</label></div>
                <div class="col-12 col-md-9"><input type="noakun" id="hf-noakun" name="hf-noakun" placeholder="Masukkan Nomor Akun" class="form-control" autofocus></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Status LOLOS / TIDAK LOLOS</label></div>
                <div class="col col-md-9">
                    <div class="form-check">
                        <div class="radio">
                            <label for="radio" class="form-check-label ">
                                <input type="radio" id="lolos" name="radios" value="lolos" class="form-check-input">LOLOS
                            </label>
                        </div>
                        <div class="radio">
                            <label for="radio" class="form-check-label ">
                                <input type="radio" id="tidak_lolos" name="radios" value="tidak_lolos" class="form-check-input">TIDAK LOLOS
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-lg-10">
            <i class="fa "></i> Kirim
        </button>
        <button type="reset" class="btn btn-danger btn-lg-10">
            <i class="fa "></i> Batal
        </button>
    </div>
</div>
<?= $this->endSection(); ?>