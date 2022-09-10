<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\daftarulangModel;

class DaftarUlang extends BaseController
{
    protected $daftarulangModel;
    public function __construct()
    {
        $this->daftarulangModel = new daftarulangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'ADMIN | DAFTAR ULANG'
        ];
        return view('admin/daftarulang', $data);
    }
    public function save()
    {
        $this->daftarulangModel->save([
            'noakun' => $this->request->getVar('noakun'),
            'kk' => $this->request->getVar('kk'),
            'foto' => $this->request->getVar('foto'),
            'ijazah' => $this->request->getVar('ijazah'),
            'akte' => $this->request->getVar('akte'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/daftarulang');
    }
}
