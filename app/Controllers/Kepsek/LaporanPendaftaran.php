<?php

namespace App\Controllers\Kepsek;

use App\Controllers\BaseController;

class LaporanPendaftaran extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'KEPALA SEKOLAH | LAPORAN PENDAFTARAN'
        ];
        return view('kepsek/laporanpendaftaran', $data);
    }
}
