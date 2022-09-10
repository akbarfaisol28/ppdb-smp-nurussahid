<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Register',
            'config' => config('Auth'),
        ];
        return view('auth/login', $data);
    }

    public function cekUser()
    {
        $noakun = $this->request->getPost('noakun');
        $password   = $this->request->getPost('password');
        $validation =   \Config\Services::validation();
        $valid = $this->validate([
            'noakun' => [
                'label' => 'noakun',
                'rules' =>  'required',
                'errors'    =>  [
                    'required'  =>  '{field} tidak boleh kosong'
                ]
            ],
            'password' => [
                'label' => 'password',
                'rules' =>  'required',
                'errors'    =>  [
                    'required'  =>  '{field} tidak boleh kosong'
                ]
            ]
        ]);
        if (!$valid) {
            $sessError = [
                'errNoAkun' => $validation->getError('noakun'),
                'errPassword' => $validation->getError('password')
            ];
            session()->setFlashdata($sessError);
            return redirect()->to(site_url('auth/login'));
        }
    }
    public function loginProcess()
    {
        echo "lanjut login";
    }
}
