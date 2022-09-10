<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\statusModel;

class PengumumanUser extends BaseController
{
    protected $statusModel;
    public function __construct()
    {
        $this->statusModel = new statusModel();
    }
    public function index()
    {
        $status = $this->statusModel->findAll();
        $data = [
            'title' => 'CALON SISWA | PENGUMUMAN',
            'status' => $status
        ];
        return view('user/pengumumanuser', $data);
    }
}
