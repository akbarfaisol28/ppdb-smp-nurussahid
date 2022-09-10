<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

use App\Models\linkModel;

class LinkUjianUser extends BaseController
{
    protected $linkModel;
    public function __construct()
    {
        $this->linkModel = new linkModel();
    }
    public function index()
    {
        $link = $this->linkModel->findAll();
        $data = [
            'title' => 'CALON SISWA | LINK UJIAN',
            'link' => $link
        ];
        return view('user/linkujianuser', $data);
    }
}
