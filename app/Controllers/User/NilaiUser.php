<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\nilaiModel;

class NilaiUser extends BaseController
{
    protected $nilaiModel;
    public function __construct()
    {
        $this->nilaiModel = new nilaiModel();
    }

    public function index()
    {
        $nilai = $this->nilaiModel->findAll();
        $data = [
            'title' => 'CALON SISWA | NILAI',
            'nilai' => $nilai
        ];

        // $nilai['nilai'] = $this->nilaiModel->getNilai();
        return view('user/nilaiuser', $data);
    }
}
