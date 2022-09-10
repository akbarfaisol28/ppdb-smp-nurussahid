<?php

namespace App\Models;

use CodeIgniter\Model;

class kontakModel extends Model
{
    protected $table = 'kontak';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama', 'email', 'asal_sekolah', 'pertanyaan'];
}
