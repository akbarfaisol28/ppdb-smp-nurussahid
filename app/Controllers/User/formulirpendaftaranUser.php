<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\formulirpendaftaranUserModel;

class formulirpendaftaranUser extends BaseController
{
    protected $formulirpendaftaranUserModel;
    public function __construct()
    {
        $this->formulirpendaftaranUserModel = new formulirpendaftaranUserModel();
    }
    public function index()
    {
        session();
        $data = [
            'title' => 'CALON SISWA | FORMULIR PENDAFTARAN',
            'validation' => \Config\Services::validation()
        ];
        return view('user/formulirpendaftaranuser', $data);
    }

    public function save()
    {
        if (!$this->validate([

            'kk' => [
                'rules' => 'uploaded[kk]|max_size[kk,2048]|is_image[kk,image/jpg,image/jpeg,image/png]'
            ]

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/formulirpendaftaranUser')->withInput()->with('validation', $validation);
        }
        $fileKk = $this->request->getFile('kk');
        $fileKk->move('img');
        $namaKk = $fileKk->getName();

        $fileFoto = $this->request->getFile('foto');
        $fileFoto->move('img');
        $namaFoto = $fileFoto->getName();

        $fileIjazah = $this->request->getFile('ijazah');
        $fileIjazah->move('img');
        $namaIjazah = $fileIjazah->getName();

        $fileAkte = $this->request->getFile('akte');
        $fileAkte->move('img');
        $namaAkte = $fileAkte->getName();

        $this->formulirpendaftaranUserModel->save([
            'noakun' => $this->request->getVar('noakun'),
            'nisn' => $this->request->getVar('nisn'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'jns_klmn' => $this->request->getVar('jns_klmn'),
            'telepon' => $this->request->getVar('telepon'),
            'asal_sklh' => $this->request->getVar('asal_sklh'),
            'alamat_sklh' => $this->request->getVar('alamat_sklh'),
            'thn_lulus' => $this->request->getVar('thn_lulus'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'pkrjn_ayah' => $this->request->getVar('pkrjn_ayah'),
            'gaji_ayah' => $this->request->getVar('gaji_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu'),
            'pkrjn_ibu' => $this->request->getVar('pkrjn_ibu'),
            'gaji_ibu' => $this->request->getVar('gaji_ibu'),
            'kk' => $namaKk,
            'foto' => $namaFoto,
            'ijazah' => $namaIjazah,
            'akte' => $namaAkte,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/formulirpendaftaranUser');
    }
}
