<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class HasilUjian extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'ADMIN | HASIL UJIAN'
        ];
        return view('admin/hasilujian', $data);
    }
}
