<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Edit Seleksi Hasil Ujian</h1>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Edit</strong> Hasil Ujian
                    </div>
                    <div class="card-body card-block">
                        <form action="/Admin/nilai/update/<?= $nilai['id']; ?>" method="post" class="form-horizontal">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="noakun" class=" form-control-label">Nomor Akun</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="noakun" name="noakun" placeholder="Masukkan Nomor Akun" class="form-control" value="<?= (old('noakun')) ? old('noakun') : $nilai['noakun']; ?>" autofocus></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nilai_ipa" class=" form-control-label">Nilai IPA</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nilai_ipa" name="nilai_ipa" placeholder="Masukkan Nilai IPA" class="form-control" value="<?= (old('nilai_ipa')) ? old('nilai_ipa') : $nilai['nilai_ipa']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nilai_bhs_indo" class=" form-control-label">Nilai BAHASA INDONESIA</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nilai_bhs_indo" name="nilai_bhs_indo" placeholder="Masukkan Nilai BAHASA INDONESIA" class="form-control" value="<?= (old('nilai_bhs_indo')) ? old('nilai_bhs_indo') : $nilai['nilai_bhs_indo']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nilai_mtk" class=" form-control-label">Nilai MATEMATIKA</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nilai_mtk" name="nilai_mtk" placeholder="Masukkan Nilai MATEMATIKA" class="form-control" value="<?= (old('nilai_mtk')) ? old('nilai_mtk') : $nilai['nilai_mtk']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nilai_total" class=" form-control-label">Nilai TOTAL</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nilai_total" name="nilai_total" placeholder="Masukkan Nilai TOTAL" class="form-control" value="<?= (old('nilai_total')) ? old('nilai_total') : $nilai['nilai_total']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Status LOLOS / TIDAK LOLOS</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="radio" class="form-check-label ">
                                                <input type="radio" id="lolos" name="status" value="LOLOS" class="form-check-input">LOLOS
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="radio" class="form-check-label ">
                                                <input type="radio" id="tidak_lolos" name="status" value="TIDAKLOLOS" class="form-check-input">TIDAK LOLOS
                                            </label>
                                        </div>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>