<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

use App\Models\baruModel;

class Baru extends BaseController
{
    public function index()
    {
        return view('auth/baru');
    }
    public function save()
    {
        $newUser = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'password_hash' => password_hash($this->request->getPost('password_hash'), PASSWORD_DEFAULT),
            'pass_confirm' => $this->request->getPost('pass_confirm')
        ];
        $baruModel = new baruModel;
        $baruModel->insert($newUser);
        session()->set([
            'username' => $newUser['username']

        ]);
        session()->setFlashdata('pesan', 'Berhasil Membuat Akun, Tunggu Nomor Akun Dari Panitia!.');
        return redirect()->to('/baru');
    }
}
