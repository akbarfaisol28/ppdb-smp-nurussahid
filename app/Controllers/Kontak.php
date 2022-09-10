<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function save()
    {
        $this->kontakModel->save([

            'nama' => $this->request->getVar('nama'),
            'email' => $this->request->getVar('email'),
            'asal_sekolah' => $this->request->getVar('asal_sekolah'),
            'pertanyaan' => $this->request->getVar('pertanyaan'),
        ]);

        // return redirect()->to('/');
    }
}
