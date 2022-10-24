<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'nik';
    protected $returnType       = "object";
    protected $useTimesStamps   = true;
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nik', 'pin', 'nama'];

}
