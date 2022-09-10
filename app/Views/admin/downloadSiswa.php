<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Siswa Baru</strong>
                    </div>
                    <div class="card-body">
                        <style>
                            table,
                            td,
                            th {
                                border: 1px solid #333;
                            }

                            table {
                                width: 100%;
                                border-collapse: collapse;
                            }

                            td,
                            th {
                                padding: 2px;
                            }

                            th {
                                background-color: #CCC;
                            }
                        </style>
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Akun</th>
                                    <th>Nilai Total</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($nilai as $dn) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $dn['noakun']; ?></td>
                                        <td><?= $dn['nilai_total']; ?></td>

                                        <td><?php foreach ($status as $s) : ?><?= $s['status']; ?><?php endforeach; ?></td>
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