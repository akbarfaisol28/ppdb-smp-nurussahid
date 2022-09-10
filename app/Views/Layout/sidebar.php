<?php if (in_groups('user')) : ?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
            <div class="sidebar-brand-icon rotate-n">
                <i class="fas fa-user"></i>
            </div>
            <div class="sidebar-brand-text mx-3">CALON SISWA <sup></sup>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            CALON SISWA
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pendaftaran</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Formulir :</h6>
                    <a class="collapse-item" href="formulirpendaftaranUser">Formulir Pendaftaran</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Ujian</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Pilih Menu Ujian :</h6>
                    <a class="collapse-item" href="linkujianUser">Link Ujian</a>
                    <a class="collapse-item" href="nilaiUser">Nilai</a>
                    <!--<a class="collapse-item" href="utilities-other.html">Other</a>-->
                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="pengumumanUser">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Pengumuman</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <div class="sidebar-brand-icon rotate-n">
                <i class="fas fa-school"></i>
            </div>
            <p class="text-center mb-2"><strong>Calon Siswa</strong>, jangan lupa makan!</p>
            <a class="btn btn-success btn-sm" href="#">Semangat!</a>
        </div>

    </ul>
<?php endif; ?>
<?php if (in_groups('admin')) : ?>
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
            <div class="sidebar-brand-icon rotate-n">
                <i class="fas fa-user-check"></i>
            </div>
            <div class=" sidebar-brand-text mx-3">ADMIN<sup></sup>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="dashboard">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            CALON SISWA
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Pendaftar</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Pendaftar :</h6>
                    <a class="collapse-item" href="akunpendaftar">Data Akun Pendaftar</a>
                    <a class="collapse-item" href="formulirpendaftaran">Data Formulir Pendaftaran</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Ujian</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Ujian :</h6>
                    <a class="collapse-item" href="linkujian">Link Ujian</a>
                    <a class="collapse-item" href="nilai">Nilai</a>

                    <!--<a class="collapse-item" href="utilities-other.html">Other</a>-->
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            LAPORAN
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Laporan PPDB</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Laporan:</h6>
                    <a class="collapse-item" href="laporanpendaftaran">Laporan Pendaftaran</a>
                    <a class="collapse-item" href="laporansiswabaru">Laporan Siswa Baru</a>
                    <!--<a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>-->
                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="daftarulang">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Daftar Ulang</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        <div class="sidebar-card d-none d-lg-flex">
            <div class="sidebar-brand-icon rotate-n">
                <i class="fas fa-school"></i>
            </div>

            <p class="text-center mb-2"><strong>Admin</strong>, jangan lupa makan!</p>
            <a class="btn btn-success btn-sm" href="#">Semangat!</a>
        </div>

    </ul>
<?php endif; ?>