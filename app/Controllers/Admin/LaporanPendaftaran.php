<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\formulirpendaftaranUserModel;

use \Dompdf\Dompdf;

class LaporanPendaftaran extends BaseController
{
    protected $db, $builder;
    protected $formulirpendaftaranUserModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();

        $this->builder = $this->db->table('formulir_pendaftaran');
        $this->formulirpendaftaranUserModel = new formulirpendaftaranUserModel();
    }
    public function index()
    {
        $formulirpendaftaranUser = $this->formulirpendaftaranUserModel->findAll();
        $data = [
            'title' => 'ADMIN | LAPORAN PENDAFTARAN',
            'formulir_pendaftaran' => $formulirpendaftaranUser
        ];
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('noakun, nisn,nama,alamat,asal_sklh,telepon');
        $query = $this->builder->get();

        $data['formulir_pendaftaran'] = $query->getResult();


        return view('admin/laporanpendaftaran', $data);
    }
    public function printpdf()
    {

        $dompdf = new Dompdf();
        $formulirpendaftaranUser = $this->formulirpendaftaranUserModel->findAll();
        $data = [
            'title' => 'ADMIN | PRINT LAPORAN PENDAFTARAN',
            'formulir_pendaftaran' => $formulirpendaftaranUser
        ];
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users'] = $users->findAll();

        $this->builder->select('noakun, nisn,nama,alamat,asal_sklh,telepon');
        $query = $this->builder->get();

        $data['formulir_pendaftaran'] = $query->getResult();


        $html = view('admin/download', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        // $dompdf->stream(); //download file
        $dompdf->stream('data pendaftar.pdf', array(
            "Attachment" => false
        ));
    }
}
