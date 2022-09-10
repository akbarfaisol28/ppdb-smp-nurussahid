<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Daftar Ulang</h1>
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
                        <strong>Daftar </strong>Ulang
                    </div>
                    <div class="card-body card-block">
                        <form action="/Admin/DaftarUlang/save" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <?= csrf_field(); ?>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="noakun" class=" form-control-label">Nomor Akun</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="noakun" name="noakun" placeholder="Masukkan Nomor Akun" class="form-control" autofocus value="<?= old('noakun'); ?>">

                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col col-md-3"><label for="kk" class=" form-control-label">Kartu Keluarga</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="kk" id="kk" class="form-control" value="<?= old('kk'); ?>">
                                        <option value="Tidak Memilih">Pilih Keterangan</option>
                                        <option value="sudah">Sudah</option>
                                        <option value="belum">Belum</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="foto" class=" form-control-label">Foto Probadi</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="foto" id="foto" class="form-control" value="<?= old('foto'); ?>">
                                        <option value="Tidak Memilih">Pilih Keterangan</option>
                                        <option value="sudah">Sudah</option>
                                        <option value="belum">Belum</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="ijazah" class=" form-control-label">Ijazah</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="ijazah" id="ijazah" class="form-control" value="<?= old('ijazah'); ?>">
                                        <option value="Tidak Memilih">Pilih Keterangan</option>
                                        <option value="sudah">Sudah</option>
                                        <option value="belum">Belum</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="akte" class=" form-control-label">Akte Kelahiran</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="akte" id="akte" class="form-control" value="<?= old('akte'); ?>">
                                        <option value="Tidak Memilih">Pilih Keterangan</option>
                                        <option value="sudah">Sudah</option>
                                        <option value="belum">Belum</option>

                                    </select>
                                </div>
                            </div>

                            <div class="card-footer">
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
    </div><!-- .animated -->
</div>

<?= $this->endSection(); ?>