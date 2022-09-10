<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/favicon.png" rel="icon">
    <link href="<?= base_url(); ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom table -->
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">



</head>

<body id="page-top">

    <?= $this->include('layoutuser/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

        <?= $this->renderSection('content'); ?>
    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; AMIK Taruna Probolinggo</span>. All Rights Reserved
                Designed by <a href="#">Mohammat Faisol Akbar | SI | <?= date('Y'); ?></a>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Jika keluar anda akan menuju ke halaman utama</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url(); ?>/js/demo/chart-pie-demo.js"></script>




    <!-- Page table -->
    <script src="<?= base_url(); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>

    <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url(); ?>/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url(); ?>/asset/js/init-scripts/data-table/datatables-init.js"></script>



</body>

</html>