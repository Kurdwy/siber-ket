<?php

namespace App\Models;

use CodeIgniter\Model;

class Member extends Model
{
    protected $table            = 'member';
    protected $primaryKey       = 'nik';
    //protected $returnType       = "object";
    protected $useTimesStamps   = true;
    protected $allowedFields    = ['namaLengkap', 'tempatLahir', 'tanggalLahir', 'jenisKelamin', 'nik', 'password'];

    public function search($keyword)
    {
        $builder = $this->table('member');
        $builder->Like('namaLengkap', $keyword);
        $builder->orLike('tempatLahir', $keyword);
        $builder->orLike('tanggalLahir', $keyword);
        $builder->orLike('jenisKelamin', $keyword);
        $builder->orLike('nik', $keyword);
        return $builder;
    }
}
