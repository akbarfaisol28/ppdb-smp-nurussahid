<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="row">
    <div class="col-lg-12">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4 pl-4 mt-4">
                    <img src="<?= base_url('/img/' . user()->user_image); ?>" class="img-fluid rounded-start" alt="<?= user()->username; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <?php if (user()->fullname) : ?>
                                <h4>
                                    <li class="list-group-item"><?= user()->fullname; ?></li>
                                </h4>
                            <?php endif; ?>
                            <li class="list-group-item">
                                <span class="badge badge-<?= (user()->nama == 'admin') ? 'success' : 'info'; ?>"><?= user()->noakun; ?></span>
                            </li>

                            <li class="list-group-item"><?= user()->email; ?></li>
                            <li class="list-group-item">
                                <?= user()->username; ?>
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-<?= (user()->name == 'admin') ? 'success' : 'info'; ?>"><?= user()->name; ?></span>
                            </li>
                            <li class="list-group-item"></li>
                        </ul>

                        <a href="<?= base_url('Admin/profil/edit/' . user()->id); ?>" class="btn  btn-warning">Edit</a>
                        <a href="<?= base_url('Admin/profil/delete/' . user()->id); ?>" class="btn btn-danger">Delete</a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection(); ?>