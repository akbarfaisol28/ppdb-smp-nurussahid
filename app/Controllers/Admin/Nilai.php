<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\nilaiModel;

class Nilai extends BaseController
{


    protected $db, $builder;
    protected $nilaiModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('nilai');
        $this->nilaiModel = new nilaiModel();
    }

    public function index()
    {
        $nilai = $this->nilaiModel->findAll();
        $data = [
            'title' => 'ADMIN | NILAI',
            'nilai' => $nilai
        ];

        return view('admin/nilai', $data);
    }
    public function save()
    {
        $this->nilaiModel->save([
            'noakun' => $this->request->getVar('noakun'),
            'nilai_ipa' => $this->request->getVar('nilai_ipa'),
            'nilai_bhs_indo' => $this->request->getVar('nilai_bhs_indo'),
            'nilai_mtk' => $this->request->getVar('nilai_mtk'),
            'nilai_total' => $this->request->getVar('nilai_total'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/nilai');
    }
    public function delete($id)
    {
        $this->nilaiModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/nilai');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'ADMIN | EDIT',
            'validation' => \Config\Services::validation(),
            'nilai' => $this->nilaiModel->getnilai($id)
        ];

        return view('admin/editNilai', $data);
    }
    public function update($id)
    {

        $this->nilaiModel->save([
            'id' => $id,
            'noakun' => $this->request->getVar('noakun'),
            'nilai_ipa' => $this->request->getVar('nilai_ipa'),
            'nilai_bhs_indo' => $this->request->getVar('nilai_bhs_indo'),
            'nilai_mtk' => $this->request->getVar('nilai_mtk'),
            'nilai_total' => $this->request->getVar('nilai_total'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/nilai');
    }
}
