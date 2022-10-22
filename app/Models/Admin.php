<?php

namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model
{
    protected $table            = 'admin';
    protected $primaryKey       = 'username';
    protected $returnType       = "object";
    protected $useTimesStamps   = true;
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['username', 'password', 'nama'];

}
