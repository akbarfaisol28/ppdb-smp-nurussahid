<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\akunpendaftarModel;

class profil extends BaseController
{
    protected $db, $builder;
    protected $akunpendaftarModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->akunpendaftarModel = new akunpendaftarModel();
    }
    public function index()
    {
        // $akunPendaftar = $this->akunPendaftarModel->findAll();
        $data = [
            'title' => 'PROFIL',
        ];
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();


        $this->builder->select('users.id as userid, username,noakun,email,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $this->builder->get();

        $data['users'] = $query->getResult();

        return view('admin/profil', $data);
    }
    public function detail($id = 0)
    {
        $data = [
            'title' => 'DETAIL AKUN',
        ];
        $this->builder->select('users.id as userid, username,noakun,email,name,user_image,fullname');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id', $id);
        $query = $this->builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/akunpendaftar');
        }


        return view('admin/detail', $data);
    }
    public function delete($id)
    {
        $this->akunpendaftarModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');
        return redirect()->to('/profil');
    }
    public function edit($id)
    {
        $data = [
            'title' => 'EDIT AKUN',
            'validation' => \Config\Services::validation(),
            'users' => $this->akunpendaftarModel->getakunpendaftar($id)
        ];
        return view('admin/editProfil', $data);
    }
    public function update($id)
    {
        $fileFoto = $this->request->getFile('user_image');
        $fileFoto->move('img');
        $namaFoto = $fileFoto->getName();

        $this->akunpendaftarModel->save([
            'id' => $id,
            'noakun' => $this->request->getVar('noakun'),
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'fullname' => $this->request->getVar('fullname'),

            'user_image' => $namaFoto
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/profil');
    }
}
