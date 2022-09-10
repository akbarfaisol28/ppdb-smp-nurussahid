<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->setAutoRoute(true);
$routes->get('/', 'Home::index');
$routes->get('/sekolah', 'Sekolah::index');
$routes->get('/home', 'Home::save');
$routes->get('/berhasil', 'Home::yes');
$routes->get('/login', 'Login::index');
$routes->match(['get', 'post'], '/baru', 'Baru::index');
$routes->get('/lupanomor', 'LupaNomor::index');
$routes->get('/gantipassword', 'GantiPassword::index');

// $routes->get('/dashboard', 'Dashboard::index', ['filter' => 'role:admin']);
// $routes->get('/dashboard/index', 'Dashboard::index', ['filter' => 'role:admin']);
// $routes->get('/akunpendaftar', 'AkunPendaftar::index');
// // $routes->get('/akunpendaftar/detail', 'AkunPendaftar::detail');
// $routes->get('/daftarulang', 'DaftarUlang::index');
// $routes->get('/formulirpendaftaran', 'FormulirPendaftaran::index');
// $routes->get('/hasilujian', 'HasilUjian::index');
// $routes->get('/laporanpendaftaran', 'LaporanPendaftaran::index');
// $routes->get('/laporansiswabaru', 'LaporanSiswaBaru::index');
// $routes->get('/linkujian', 'LinkUjian::index');
// $routes->get('/nilai', 'Nilai::index');

// route admin
$routes->get('/dashboard', 'Admin\Dashboard::index');
$routes->get('/dashboard', 'Admin\brosur::save');
$routes->get('/akunpendaftar', 'Admin\AkunPendaftar::index', ['filter' => 'role:admin']);
// $routes->get('/akunpendaftar/detail', 'Admin\AkunPendaftar::detail');
$routes->get('/daftarulang', 'Admin\DaftarUlang::index', ['filter' => 'role:admin']);
$routes->get('/formulirpendaftaran', 'Admin\FormulirPendaftaran::index', ['filter' => 'role:admin']);
$routes->get('/hasilujian', 'Admin\HasilUjian::index', ['filter' => 'role:admin']);
$routes->get('/laporanpendaftaran', 'Admin\LaporanPendaftaran::index', ['filter' => 'role:admin']);
$routes->get('/laporansiswabaru', 'Admin\LaporanSiswaBaru::index', ['filter' => 'role:admin']);
$routes->get('/linkujian', 'Admin\LinkUjian::index', ['filter' => 'role:admin']);
$routes->get('/nilai', 'Admin\Nilai::index', ['filter' => 'role:admin']);
$routes->get('/profil', 'Admin\profil::index');

// route user
$routes->get('/dashboardUser', 'User\Dashboard::index', ['filter' => 'role:user']);
$routes->get('/formulirpendaftaranUser', 'User\formulirpendaftaranUser::index', ['filter' => 'role:user']);
// $routes->get('/formulirpendaftaranUser', 'User\formulirpendaftaranUser::save', ['filter' => 'role:user']);
$routes->get('/pengumumanUser', 'User\PengumumanUser::index', ['filter' => 'role:user']);
$routes->get('/linkujianUser', 'User\LinkUjianUser::index', ['filter' => 'role:user']);
$routes->get('/nilaiUser', 'User\NilaiUser::index', ['filter' => 'role:user']);
$routes->get('/profilUser', 'User\profilUser::index', ['filter' => 'role:user']);

// route kepala sekolah
$routes->get('/dashboardKepsek', 'Kepsek\Dashboard::index');
$routes->get('/laporanpendaftaranKepsek', 'Kepsek\LaporanPendaftaran::index');
$routes->get('/laporansiswabaruKepsek', 'Kepsek\LaporanSiswaBaru::index');

$routes->get('/akunpendaftar/(:segment)', 'Admin\AkunPendaftar::detail/$1', ['filter' => 'role:admin']);
$routes->get('/akunpendaftar/edit/(:segment)', 'Admin\AkunPendaftar::edit/$1', ['filter' => 'role:admin']);
$routes->get('/akunpendaftar/update/(:segment)', 'Admin\AkunPendaftar::update/$1', ['filter' => 'role:admin']);
$routes->get('/formulirpendaftaran/(:segment)', 'Admin\FormulirPendaftaran::detail/$1', ['filter' => 'role:admin']);
$routes->get('/formulirpendaftaran/edit/(:segment)', 'Admin\FormulirPendaftaran::edit/$1', ['filter' => 'role:admin']);
$routes->get('/formulirpendaftaran/update/(:segment)', 'Admin\FormulirPendaftaran::update/$1', ['filter' => 'role:admin']);
$routes->get('/nilai/edit/(:segment)', 'Admin\Nilai::edit/$1', ['filter' => 'role:admin']);
$routes->get('/nilai/update/(:segment)', 'Admin\Nilai::update/$1', ['filter' => 'role:admin']);
$routes->get('/dashboard/edit/(:segment)', 'Admin\Dashboard::edit/$1', ['filter' => 'role:admin']);
$routes->get('/dashboard/update/(:segment)', 'Admin\Dashboard::update/$1', ['filter' => 'role:admin']);
$routes->get('/linkujian/edit/(:segment)', 'Admin\LinkUjian::edit/$1', ['filter' => 'role:admin']);
$routes->get('/linkujian/update/(:segment)', 'Admin\LinkUjian::update/$1', ['filter' => 'role:admin']);


/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
