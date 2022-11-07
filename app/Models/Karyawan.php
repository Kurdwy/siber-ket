<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan extends Model
{
    protected $table            = 'karyawan';
    protected $primaryKey       = 'nik';
    protected $useTimesStamps   = true;
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nik', 'pin', 'nama'];

    public function search($keyword)
    {
        $builder = $this->table('karyawan');
        $builder->Like('nama', $keyword);
        $builder->orLike('nik', $keyword);
        return $builder;
    }

    public function saveKaryawan($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

}
