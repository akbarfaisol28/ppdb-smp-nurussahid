<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Formulir Pendaftaran</h1>
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
                        <strong>Formulir </strong>Pendaftaran
                    </div>
                    <div class="card-body card-block">
                        <form action="/admin/formulirpendaftaran/update/<?= $formulir['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <?= csrf_field(); ?>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="noakun" class=" form-control-label">Nomor Akun</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="noakun" name="noakun" placeholder="Masukkan Nomor Akun" class="form-control<?= ($validation->hasError('noakun')) ? 'is-invalid' : ''; ?>" value="<?= (old('nisn')) ? old('noakun') : $formulir['noakun']; ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('noakun'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class=" row form-group">
                                <div class="col col-md-3"><label for="nisn" class=" form-control-label">NISN</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN" class="form-control" value="<?= (old('nisn')) ? old('nisn') : $formulir['nisn']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" value="<?= (old('nama')) ? old('nama') : $formulir['nama']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="alamat" class=" form-control-label">Alamat</label></div>
                                <div class="col-12 col-md-9"><textarea name="alamat" id="alamat" rows="5" placeholder="Masukkan Alamat" class="form-control" value="<?= (old('alamat')) ? old('alamat') : $formulir['alamat']; ?>"></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="agama" id="agama" class="form-control" value="<?= (old('agama')) ? old('agama') : $formulir['agama']; ?>">
                                        <option value="Tidak Memilih">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Khatolik">Khatolik</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="jns_klmn" class=" form-control-label">Jenis Kelamin</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="jns_klmn" id="jns_klmn" class="form-control" value="<?= (old('jns_klmn')) ? old('jns_klmn') : $formulir['jns_klmn']; ?>">
                                        <option value="Tidak Memilih">Pilih Jenis Kelamin</option>
                                        <option value="Laki - Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="telepon" class=" form-control-label">Telepon</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon" class="form-control" value="<?= (old('telepon')) ? old('telepon') : $formulir['telepon']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="asal_sklh" class=" form-control-label">Asal Sekolah</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="asal_sklh" name="asal_sklh" placeholder="Masukkan Asal Sekolah" class="form-control" value="<?= (old('asal_sklh')) ? old('asal_sklh') : $formulir['asal_sklh']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="alamat_sklh" class=" form-control-label">Alamat Sekolah</label></div>
                                <div class="col-12 col-md-9"><textarea name="alamat_sklh" id="alamat_sklh" rows="5" placeholder="Masukkan Alamat Sekolah" class="form-control" value="<?= (old('alamat_sklh')) ? old('alamat_sklh') : $formulir['alamat_sklh']; ?>"></textarea></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="thn_lulus" class=" form-control-label">Tahun Lulus</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="thn_lulus" name="thn_lulus" placeholder="Masukkan Tahun Lulus" class="form-control" value="<?= (old('thn_lulus')) ? old('thn_lulus') : $formulir['thn_lulus']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nama_ayah" class=" form-control-label">Nama Ayah</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nama_ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah" class="form-control" value="<?= (old('nama_ayah')) ? old('nama_ayah') : $formulir['nama_ayah']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="pkrjn_ayah" class=" form-control-label">Pekerjaan Ayah</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="pkrjn_ayah" name="pkrjn_ayah" placeholder="Masukkan Pekerjaan Ayah" class="form-control" value="<?= (old('pkrjn_ayah')) ? old('pkrjn_ayah') : $formulir['pkrjn_ayah']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="gaji_ayah" class=" form-control-label">Gaji Ayah</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="gaji_ayah" id="gaji_ayah" class="form-control" value="<?= (old('gaji_ayah')) ? old('gaji_ayah') : $formulir['gaji_ayah']; ?>">
                                        <option value="Tidak Memilih">Pilih Gaji Ayah</option>
                                        <option value="0 - 100.000">0 - 100.000</option>
                                        <option value="100.000 - 500.000">100.000 - 500.000</option>
                                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                        <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                                        <option value="1.500.000 - 2.000.000">1.500.000 - 2.000.000</option>
                                        <option value="2.000.000 - 2.500.000">2.000.000 - 2.500.000</option>
                                        <option value="2.500.000 - 3.000.000">2.500.000 - 3.000.000</option>
                                        <option value="3.000.000 - Ke atas">3.000.000 - Ke atas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="nama_ibu" class=" form-control-label">Nama Ibu</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="nama_ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu" class="form-control" value="<?= (old('nama_ibu')) ? old('nama_ibu') : $formulir['nama_ibu']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="pkrjn_ibu" class=" form-control-label">Pekerjaan Ibu</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="pkrjn_ibu" name="pkrjn_ibu" placeholder="Masukkan Pekerjaan Ibu" class="form-control" value="<?= (old('pkrjn_ibu')) ? old('pkrjn_ibu') : $formulir['pkrjn_ibu']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="gaji_ibu" class=" form-control-label">Gaji Ibu</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="gaji_ibu" id="gaji_ibu" class="form-control" value="<?= (old('gaji_ibu')) ? old('gaji_ibu') : $formulir['gaji_ibu']; ?>">
                                        <option value="Tidak Memilih">Pilih Gaji Ibu</option>
                                        <option value="0 - 100.000">0 - 100.000</option>
                                        <option value="100.000 - 500.000">100.000 - 500.000</option>
                                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                                        <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                                        <option value="1.500.000 - 2.000.000">1.500.000 - 2.000.000</option>
                                        <option value="2.000.000 - 2.500.000">2.000.000 - 2.500.000</option>
                                        <option value="2.500.000 - 3.000.000">2.500.000 - 3.000.000</option>
                                        <option value="3.000.000 - Ke atas">3.000.000 - Ke atas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="kk" class=" form-control-label">Foto Kartu Keluarga</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="kk" name="kk" multiple="" class="form-control-file" value="<?= (old('kk')) ? old('kk') : $formulir['kk']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="foto" class=" form-control-label">Foto Pribadi</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="foto" name="foto" multiple="" class="form-control-file" value="<?= (old('foto')) ? old('foto') : $formulir['foto']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="ijazah" class=" form-control-label">Foto Ijazah</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="ijazah" name="ijazah" multiple="" class="form-control-file" value="<?= (old('ijazah')) ? old('ijazah') : $formulir['ijazah']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="akte" class=" form-control-label">Foto Akta Kelahiran</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="akte" name="akte" multiple="" class="form-control-file" value="<?= (old('akte')) ? old('akte') : $formulir['akte']; ?>"></div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class=""></i> Ubah
                                </button>
                                <button type="reset" class="btn btn-danger btn-lg">
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