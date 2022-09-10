<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\homeModel;

use App\Models\brosurModel;


class Dashboard extends BaseController
{

    protected $homeModel;
    protected $brosurModel;
    public function __construct()
    {

        $this->homeModel = new homeModel();
        $this->brosurModel = new brosurModel();
    }
    public function index()
    {


        $home = $this->homeModel->findAll();

        $data = [
            'title' => 'ADMIN | DASHBOARD',
            'kontak' => $home,

        ];
        return view('admin/dashboard', $data);
    }
    public function delete($id)
    {
        $this->homeModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/dashboard');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'ADMIN | EDIT PERTANYAAN',
            'validation' => \Config\Services::validation(),
            'kontak' => $this->homeModel->gethome($id)
        ];

        return view('admin/editPertanyaan', $data);
    }
    public function update($id)
    {

        $this->homeModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'pertanyaan' => $this->request->getVar('pertanyaan'),
            'jawaban' => $this->request->getVar('jawaban'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/dashboard');
    }
    public function save()
    {

        $fileKk = $this->request->getFile('brosur1');
        $namaKk = $fileKk->getName();
        $fileKk->move('img', $namaKk);

        $fileFoto = $this->request->getFile('brosur2');
        $namaFoto = $fileFoto->getName();
        $fileFoto->move('img', $namaFoto);


        $fileIjazah = $this->request->getFile('alur1');
        $namaIjazah = $fileIjazah->getName();
        $fileIjazah->move('img', $namaIjazah);


        $fileAkte = $this->request->getFile('alur2');
        $namaAkte = $fileAkte->getName();
        $fileAkte->move('img', $namaAkte);


        $this->brosurModel->save([
            'brosur1' => $namaKk,
            'brosur2' => $namaFoto,
            'alur1' => $namaIjazah,
            'alur2' => $namaAkte,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/dashboard');
    }
}
