<?php

namespace App\Models;

use CodeIgniter\Model;

class statusModel extends Model
{
    protected $table = "lolos_tidak";

    protected $useTimestamps = "false";
    protected $allowedFields = ['noakun', 'nama', 'status'];
}
