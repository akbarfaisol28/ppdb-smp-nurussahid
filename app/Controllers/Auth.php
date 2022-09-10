<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UsersModel;

class Auth extends BaseController
{
    // public function register()
    // {
    //     $dataA = array(
    //         'nama' => $this->request->getPost('nama'),
    //         'email' => $this->request->getPost('email'),
    //         'telepon' => $this->request->getPost('telepon'),
    //         'password' => $this->request->getPost('password'),
    //         'konfirmasi_password' => $this->request->getPost('konfirmasi_password'),
    //     );
    //     $model = new UsersModel;
    //     $model->insert($dataA);
    //     return redirect()->to('/login');
    // }
    public function register()
    {
        $val = $this->validate(
            [
                'nama' => 'required',
                'email' => 'required',
                'telepon' => 'required',
                'password' => 'required',
                'konfirmasi_password' => 'required',
            ],
        );

        if (!$val) {
            $pesanvalidasi = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validate', $pesanvalidasi);
        }
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'telepon' => $this->request->getPost('telepon'),
            'password' => $this->request->getPost('password'),
            'konfirmasi_password' => $this->request->getPost('konfirmasi_password'),

        );
        $model = new UsersModel;
        $model->insert($data);
        session()->setFlashdata('pesan', 'Selamat Anda berhasil Registrasi, silakan login!');
        return redirect()->to('/login');
    }
}
