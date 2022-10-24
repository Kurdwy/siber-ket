<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Karyawan extends Seeder
{
    public function run()
    {
        $data_karyawan = [
            [
                'nik' => '1810010402020004',
                'pin' => '123456',
                'nama'    => 'Muhammad Donda Fauzaan',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_karyawan as $data) {
            $this->db->table('karyawan')->insert($data);
        }
    }
}
