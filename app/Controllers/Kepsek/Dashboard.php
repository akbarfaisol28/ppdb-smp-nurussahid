<?php

namespace App\Controllers\Kepsek;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'KEPALA SEKOLAH | DASHBOARD'
        ];
        return view('kepsek/dashboard', $data);
    }
}
