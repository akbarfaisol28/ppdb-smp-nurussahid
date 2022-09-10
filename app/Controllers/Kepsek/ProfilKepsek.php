<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class profil extends BaseController
{
    public function index()
    {
        $data['title'] = 'ADMIN | PROFIL';

        return view('profil', $data);
    }
}
