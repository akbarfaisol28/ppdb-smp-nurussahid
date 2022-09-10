<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Form Edit Pertanyaan</h1>
</div>
<div class="card">
    <div class="card-header">
        <strong>Edit</strong> Pertanyaan
    </div>
    <div class="card-body card-block">
        <form action="/Admin/dashboard/update/<?= $kontak['id']; ?>" method="post" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" placeholder="Masukkan Nama" class="form-control" value="<?= (old('nama')) ? old('nama') : $kontak['nama']; ?>" autofocus></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="email" class=" form-control-label">Email</label></div>
                <div class="col-12 col-md-9"><input type="text" id="email" name="email" placeholder="Masukkan Email" class="form-control" value="<?= (old('email')) ? old('email') : $kontak['email']; ?>"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="asal_sekolah" class=" form-control-label">Asal Sekolah</label></div>
                <div class="col-12 col-md-9"><input type="text" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" class="form-control" value="<?= (old('asal_sekolah')) ? old('asal_sekolah') : $kontak['asal_sekolah']; ?>"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="pertanyaan" class=" form-control-label">Pertanyaan</label></div>
                <div class="col-12 col-md-9"><input type="text" id="pertanyaan" name="pertanyaan" placeholder="MasukkanPertanyaan" class="form-control" value="<?= (old('pertanyaan')) ? old('pertanyaan') : $kontak['pertanyaan']; ?>"></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label for="jawaban" class=" form-control-label">Jawaban</label></div>
                <div class="col-12 col-md-9"><input type="text" id="jawaban" name="jawaban" placeholder="Masukkan Jawaban" class="form-control" value="<?= (old('jawaban')) ? old('jawaban') : $kontak['jawaban']; ?>"></div>
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