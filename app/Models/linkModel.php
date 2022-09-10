<?php

namespace App\Models;

use CodeIgniter\Model;

class linkModel extends Model
{
    protected $table = "link_ujian";

    protected $useTimestamps = "true";
    protected $allowedFields = ['link_ipa', 'link_bhs_indo', 'link_mtk'];
    public function getlink($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
