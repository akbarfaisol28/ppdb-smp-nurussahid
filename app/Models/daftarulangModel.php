<?php

namespace App\Models;

use CodeIgniter\Model;

class daftarulangModel extends Model
{
    protected $table = "siswa_baru";

    protected $useTimestamps = "true";
    protected $allowedFields = ['noakun', 'kk', 'ijazah', 'foto', 'akte'];
}
