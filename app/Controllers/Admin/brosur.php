<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;



use App\Models\brosurModel;


class Dashboard extends BaseController
{


    protected $brosurModel;
    public function __construct()
    {
        $this->brosurModel = new brosurModel();
    }
    public function save()
    {

        $fileKk = $this->request->getFile('brosur1');

        $namaKk = $fileKk->getName();
        $fileKk->move('img', $namaKk);

        $fileFoto = $this->request->getFile('brosur2');
        $fileFoto->move('img');
        $namaFoto = $fileFoto->getName();

        $fileIjazah = $this->request->getFile('alur1');
        $fileIjazah->move('img');
        $namaIjazah = $fileIjazah->getName();

        $fileAkte = $this->request->getFile('alur2');
        $fileAkte->move('img');
        $namaAkte = $fileAkte->getName();

        $this->brosurModel->save([
            'kk' => $namaKk,
            'foto' => $namaFoto,
            'ijazah' => $namaIjazah,
            'akte' => $namaAkte,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/dashboard');
    }
}
