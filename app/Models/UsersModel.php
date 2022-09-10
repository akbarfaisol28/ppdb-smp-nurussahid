<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'akun_pendaftar';
    protected $primaryKey = 'noakun';
    protected $allowedFields = ['nama', 'email', 'telepon', 'password', 'konfirmasi_password'];
    protected $useTimestamps = 'true';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
