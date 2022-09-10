<?php

namespace App\Models;

use CodeIgniter\Model;

class nilaiModel extends Model
{
    protected $table = "nilaibaru";

    protected $useTimestamps = "true";
    protected $allowedFields = ['noakun', 'nilai_ipa', 'nilai_bhs_indo', 'nilai_mtk', 'nilai_total', 'status'];
    public function getnilai($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
