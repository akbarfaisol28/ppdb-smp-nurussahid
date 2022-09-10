<?= $this->extend('layoutuser/template'); ?>

<?= $this->section('content'); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Link Ujian</h1>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Nilai</strong>
                    </div>
                    <div class="card-body">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Link Ipa</th>
                                    <th>Link Bahasa Indonesia</th>
                                    <th>Link Matematika</th>


                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($link as $l) : ?>
                                    <tr>

                                        <td><?= $l['link_ipa']; ?>
                                        <td><?= $l['link_bhs_indo']; ?>
                                        <td><?= $l['link_mtk']; ?>

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