<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Formulir Pendaftaran</h1>
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
                        <strong class="card-title">Data Table</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <!-- <th>Agama</th>
                                    <th>Jenis Kelamin</th> -->
                                    <!-- <th>Telepon</th> -->
                                    <th>Asal Sekolah</th>
                                    <th>Alamat Sekolah</th>
                                    <th>Tahun Lulus</th>
                                    <th>Aksi</th>
                                    <!-- <th>Nama Ayah</th>
                                    <th>Pekerjaan Ayah</th>
                                    <th>Gaji Ayah</th>
                                    <th>Kartu Keluarga</th>
                                    <th>Foto Pribadi</th>
                                    <th>Ijazah</th>
                                    <th>Akta Kelahiran</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($formulir as $fp) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>

                                        <td><?= $fp->noakun; ?></td>
                                        <td><?= $fp->nisn; ?></td>
                                        <td><?= $fp->nama; ?></td>
                                        <td><?= $fp->alamat; ?></td>
                                        <td><?= $fp->asal_sklh; ?></td>
                                        <td><?= $fp->alamat_sklh; ?></td>
                                        <td><?= $fp->thn_lulus; ?></td>
                                        <td><a href="<?= base_url('formulirpendaftaran/' . $fp->fpnoakun); ?>" class="btn btn-success">Detail</a></td>
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