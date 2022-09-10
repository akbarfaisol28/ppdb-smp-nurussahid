<?php

namespace App\Controllers\Kepsek;

use App\Controllers\BaseController;

class LaporanSiswaBaru extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'KEPALA SEKOLAH | LAPORAN SISWA BARU'
        ];
        return view('kepsek/laporansiswabaru', $data);
    }
}
