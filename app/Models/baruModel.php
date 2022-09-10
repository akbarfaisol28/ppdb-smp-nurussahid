<?php

namespace App\Models;

use CodeIgniter\Model;

class baruModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['username', 'email', 'telepon', 'password_hash'];
    public function getakunpendaftar($userid = false)
    {
        if ($userid == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $userid])->first();
    }
}
