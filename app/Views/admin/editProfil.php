<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Profil</h1>
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
                        <strong>Akun </strong>Pendaftar
                    </div>
                    <div class="card-body card-block">
                        <form action="/admin/profil/update/<?= $users['id']; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <?= csrf_field(); ?>

                            <div class=" row form-group">
                                <div class="col col-md-3"><label for="noakun" class=" form-control-label">Nomor Akun</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="noakun" name="noakun" placeholder="Masukkan noakun" class="form-control" value="<?= (old('noakun')) ? old('noakun') : $users['noakun']; ?>"></div>
                            </div>
                            <div class=" row form-group">
                                <div class="col col-md-3"><label for="email" class=" form-control-label">Email</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="Masukkan Email" class="form-control" value="<?= (old('email')) ? old('email') : $users['email']; ?>"></div>
                            </div>

                            <div class="row form-group">
                                <div class="col col-md-3"><label for="fullname" class=" form-control-label">Nama Lengkap</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="fullname" name="fullname" placeholder="Masukkan Nama Lengkap" class="form-control" value="<?= (old('fullname')) ? old('fullname') : $users['fullname']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="username" class=" form-control-label">Nomor Telepon</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="username" name="username" placeholder="Masukkan Nomor username" class="form-control" value="<?= (old('username')) ? old('username') : $users['username']; ?>"></div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="user_image" class=" form-control-label">Foto Profil</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="user_image" name="user_image" multiple="" class="form-control-file" value="<?= (old('user_image')) ? old('user_image') : $users['user_image']; ?>"></div>
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