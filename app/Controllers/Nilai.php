<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\nilaiModel;

class Nilai extends BaseController
{
    public function __construct()
    {
        $this->nilai = new nilaiModel();
    }


    public function index()
    {
        $data = [
            'title' => 'ADMIN | NILAI'
        ];
        return view('admin/nilai', $data);
    }
    public function simpan()
    {
        $noakun = $this->request->getVar('noakun');
        $nilai_ipa = $this->request->getVar('nilai_ipa');
        $nilai_bhs_indo = $this->request->getVar('nilai_bhs_indo');
        $nilai_mtk = $this->request->getVar('nilai_mtk');
        $nilai_total = $this->request->getVar('nilai_total');

        $data = [
            'noakun' => $noakun,
            'nilai_ipa' => $nilai_ipa,
            'nilai_bhs_indo' => $nilai_bhs_indo,
            'nilai_mtk' => $nilai_mtk,
            'nilai_total' => $nilai_total
        ];
        $this->nilai->save($data);
        return redirect()->to('/nilai');
    }
}
