<?php

use App\Controllers\Admin\FormulirPendaftaran;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="row">
    <div class="col-lg-12">
        <div class="card mb-3 md-12">
            <div class="row g-0">
                <div class="col-md-4 pl-4 mt-4">
                    <img src="<?= base_url('/img/' . $formulir->foto); ?>" class="img-fluid rounded-start" alt="<?= $formulir->foto; ?>">
                    <img src="<?= base_url('/img/' . $formulir->akte); ?>" class="img-fluid rounded-start" alt="<?= $formulir->akte; ?>">
                    <img src="<?= base_url('/img/' . $formulir->kk); ?>" class="img-fluid rounded-start" alt="<?= $formulir->kk; ?>">
                    <img src="<?= base_url('/img/' . $formulir->ijazah); ?>" class="img-fluid rounded-start" alt="<?= $formulir->ijazah; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <h4><?= $formulir->nama; ?></h4>
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-<?= ($formulir->nama == 'admin') ? 'success' : 'info'; ?>"><?= $formulir->noakun; ?></span>
                            </li>
                            <li class="list-group-item">NISN : <?= $formulir->nisn; ?></li>
                            <li class="list-group-item">Alamat : <?= $formulir->alamat; ?></li>
                            <li class="list-group-item">Agama : <?= $formulir->agama; ?></li>
                            <li class="list-group-item">Jenis Kelamin : <?= $formulir->jns_klmn; ?></li>
                            <li class="list-group-item">Telepon : <?= $formulir->telepon; ?></li>
                            <li class="list-group-item">Asal Sekolah : <?= $formulir->asal_sklh; ?></li>
                            <li class="list-group-item">Alamat Sekolah : <?= $formulir->alamat_sklh; ?></li>
                            <li class="list-group-item">Tahun Lulus : <?= $formulir->thn_lulus; ?></li>
                            <li class="list-group-item">Nama Ayah : <?= $formulir->nama_ayah; ?></li>
                            <li class="list-group-item">Pekerjaan Ayah : <?= $formulir->pkrjn_ayah; ?></li>
                            <li class="list-group-item">Gaji Ayah : <?= $formulir->gaji_ayah; ?></li>
                            <li class="list-group-item">Nama Ibu : <?= $formulir->nama_ibu; ?></li>
                            <li class="list-group-item">Pekerjaan Ibu : <?= $formulir->pkrjn_ibu; ?></li>
                            <li class="list-group-item">Gaji Ibu : <?= $formulir->gaji_ibu; ?></li>
                            <li class="list-group-item">Kartu Keluarga : <?= $formulir->kk; ?></li>
                            <li class="list-group-item">Foto : <?= $formulir->foto; ?></li>
                            <li class="list-group-item">Ijazah : <?= $formulir->ijazah; ?></li>
                            <li class="list-group-item">Akta Kelahiran : <?= $formulir->akte; ?></li>
                            <li class="list-group-item"></li>
                        </ul>

                        <a href="<?= base_url('Admin/formulirpendaftaran/edit/' . $formulir->fpnoakun); ?>" class="btn  btn-warning">Edit</a>
                        <a href="<?= base_url('Admin/formulirpendaftaran/delete/' . $formulir->fpnoakun); ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus formulir?');">Delete</a>
                        <br>
                        <br>
                        <a href="<?= base_url('/formulirpendaftaran') ?>"> &laquo; Kembali ke daftar formulir pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection(); ?>