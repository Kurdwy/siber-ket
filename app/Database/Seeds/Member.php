<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Member extends Seeder
{
    public function run()
    {
        $data_member = [
            [
                'namaLengkap' => 'Muhammad Donda Fauzaan',
                'tempatLahir' => 'Pringsewu',
                'tanggalLahir' => '04/02/2002',
                'jenisKelamin'    => 'Pria',
                'nik'    => '1810010402020004',
                'password'    => '123456',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_member as $data) {
            $this->db->table('member')->insert($data);
        }
    }
}
