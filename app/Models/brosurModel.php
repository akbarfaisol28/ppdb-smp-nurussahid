<?php

namespace App\Models;

use CodeIgniter\Model;

class brosurModel extends Model
{
    protected $table = 'brosur';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['brosur1', 'brosur2', 'alur1', 'alur2'];
    public function getbrosur($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
