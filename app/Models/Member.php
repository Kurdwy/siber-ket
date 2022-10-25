<?php

namespace App\Models;

use CodeIgniter\Model;

class Member extends Model
{
    protected $table            = 'member';
    protected $primaryKey       = 'nik';
    //protected $returnType       = "object";
    protected $useTimesStamps   = true;
    protected $allowedFields    = ['namaLengkap', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'nik', 'tanggalLahir', 'password'];

}
