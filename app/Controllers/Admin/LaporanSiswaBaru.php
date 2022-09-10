<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\nilaiModel;

use App\Models\statusModel;

use \Dompdf\Dompdf;

class LaporanSiswaBaru extends BaseController
{
    protected $nilaiModel;
    protected $statusModel;
    public function __construct()
    {
        $this->nilaiModel = new nilaiModel();
        $this->statusModel = new statusModel();
    }

    public function index()
    {
        $status = $this->statusModel->findAll();
        $nilai = $this->nilaiModel->findAll();
        $data = [
            'title' => 'ADMIN | LAPORAN SISWA BARU',
            'nilai' => $nilai,
            'status' => $status
        ];
        return view('admin/laporansiswabaru', $data);
    }
    public function printpdf()
    {

        $dompdf = new Dompdf();
        $status = $this->statusModel->findAll();
        $nilai = $this->nilaiModel->findAll();
        $data = [
            'title' => 'ADMIN | PRINT LAPORAN SISWA BARU',
            'nilai' => $nilai,
            'status' => $status
        ];
        $html = view('admin/downloadSiswa', $data);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        // $dompdf->stream(); //download file
        $dompdf->stream('data siswa baru.pdf', array(
            "Attachment" => false
        ));
    }
}
