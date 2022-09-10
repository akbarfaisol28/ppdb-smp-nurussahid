<?php

namespace App\Controllers;

use App\Models\homeModel;

use App\Models\brosurModel;


class Home extends BaseController
{
    protected $homeModel;
    protected $brosurModel;
    public function __construct()
    {

        $this->homeModel = new homeModel();
        $this->brosurModel = new brosurModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('brosur');
    }
    public function index()
    {

        $home = $this->homeModel->findAll();
        $brosur = $this->brosurModel->findAll();
        $data = [
            'title' => 'PPDB | SMP NURUS SAHID',
            'kontak' => $home,
            'brosur' => $brosur
        ];
        $this->builder->select('brosur1', 'brosur2', 'alur1', 'alur2');
        $query = $this->builder->get();

        $data['brosur'] = $query->getRow();

        return view('index', $data);
    }

    public function save()
    {
        $this->homeModel->save([

            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ]);
        session()->setFlashdata('pesan', 'Pertanyaan berhasil dikirim!');
        return redirect()->to('/berhasil');
    }
    public function yes()
    {
        echo 'Pertanyaan berhasil dikirim, Terimakasih!';
    }
}
