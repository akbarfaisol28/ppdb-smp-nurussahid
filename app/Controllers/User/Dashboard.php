<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'CALON SISWA | DASHBOARD'
        ];
        return view('user/dashboard', $data);
    }
}
