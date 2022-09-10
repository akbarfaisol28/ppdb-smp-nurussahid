<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\formulirpendaftaranUserModel;

use CodeIgniter\HTTP\Request;

class FormulirPendaftaran extends BaseController
{
    protected $db, $builder;
    protected $formulirpendaftaranUserModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('formulir');
        $this->formulirpendaftaranUserModel = new formulirpendaftaranUserModel();
    }
    public function index()
    {
        $data = [
            'title' => 'ADMIN | FORMULIR PENDAFTARAN'
        ];
        $this->builder->select('formulir.id as fpnoakun, noakun, nisn,nama,alamat,asal_sklh,alamat_sklh,thn_lulus');
        $query = $this->builder->get();

        $data['formulir'] = $query->getResult();
        return view('admin/formulirpendaftaran', $data);
    }
    public function detail($id = 0)
    {
        $data = [
            'title' => 'ADMIN | DETAIL AKUN',
        ];
        $this->builder->select('formulir.id as fpnoakun,noakun, nisn,nama,alamat,agama,jns_klmn,telepon,asal_sklh,alamat_sklh,thn_lulus,nama_ayah,pkrjn_ayah,gaji_ayah,nama_ibu,pkrjn_ibu,gaji_ibu,kk,foto,ijazah,akte');
        $this->builder->where('formulir.id', $id);
        $query = $this->builder->get();

        $data['formulir'] = $query->getRow();

        if (empty($data['formulir'])) {
            return redirect()->to('/formulirpendaftaran');
        }


        return view('admin/detailF', $data);
    }

    public function delete($id)
    {
        $this->formulirpendaftaranUserModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/formulirpendaftaran');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'ADMIN | EDIT',
            'validation' => \Config\Services::validation(),
            'formulir' => $this->formulirpendaftaranUserModel->getFormulirpendaftaranUser($id)
        ];
        return view('admin/editF', $data);
    }
    public function update($id)
    {

        $this->formulirpendaftaranUserModel->save([
            'id' => $id,
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
            'kk' => $this->request->getFile('kk'),
            'foto' => $this->request->getFile('foto'),
            'ijazah' => $this->request->getFile('ijazah'),
            'akte' => $this->request->getFile('akte'),
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/formulirpendaftaran');
    }
}
