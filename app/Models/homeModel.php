<?php

namespace App\Models;

use CodeIgniter\Model;

class homeModel extends Model
{
    protected $table = 'kontakbaru';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama', 'email', 'asal_sekolah', 'pertanyaan', 'jawaban'];
    public function gethome($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
