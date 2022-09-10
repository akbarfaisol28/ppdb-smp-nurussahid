<?php

namespace App\Models;

use CodeIgniter\Model;

class formulirpendaftaranUserModel extends Model
{
    protected $table = "formulir";

    protected $useTimestamps = "true";
    protected $allowedFields = ['noakun', 'nisn', 'nama', 'alamat', 'agama', 'jns_klmn', 'telepon', 'asal_sklh', 'alamat_sklh', 'thn_lulus', 'nama_ayah', 'pkrjn_ayah', 'gaji_ayah', 'nama_ibu', 'pkrjn_ibu', 'gaji_ibu', 'kk', 'foto', 'ijazah', 'akte'];
    public function getFormulirpendaftaranUser($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
