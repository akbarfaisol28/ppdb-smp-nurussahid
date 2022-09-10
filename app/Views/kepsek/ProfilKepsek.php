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
                            <li class="list-group-item">
                                <h4><?= user()->username; ?></h4>
                            </li>
                            <?php if (user()->fullname) : ?>
                                <li class="list-group-item"><?= user()->fullname; ?></li>
                            <?php endif; ?>
                            <li class="list-group-item"><?= user()->email; ?></li>
                            <li class="list-group-item">
                                <span class="badge badge-<?= (user()->name == 'admin') ? 'success' : 'info'; ?>"><?= user()->name; ?></span>
                            </li>
                            <li class="list-group-item"></li>
                        </ul>

                        <a href="" class="btn  btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





<?= $this->endSection(); ?>