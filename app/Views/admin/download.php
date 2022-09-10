<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Data Laporan Pendaftar</strong>
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
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Asal Sekolah</th>
                                    <th>Telepon</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($formulir_pendaftaran as $fp) : ?>
                                    <tr>
                                        <td scope="row"><?= $i++; ?></td>
                                        <td><?= $fp->noakun; ?></td>
                                        <td><?= $fp->nisn; ?></td>
                                        <td><?= $fp->nama; ?></td>
                                        <td><?= $fp->alamat; ?></td>
                                        <td><?= $fp->asal_sklh; ?></td>
                                        <td><?= $fp->telepon; ?></td>
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