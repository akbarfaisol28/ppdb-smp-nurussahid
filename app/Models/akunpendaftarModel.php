<?php

namespace App\Models;

use CodeIgniter\Model;

class akunpendaftarModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['noakun', 'username', 'email', 'fullname', 'name', 'user_image'];
    public function getakunpendaftar($userid = false)
    {
        if ($userid == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $userid])->first();
    }
}
