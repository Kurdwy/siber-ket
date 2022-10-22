<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Admin extends Seeder
{
    public function run()
    {
        $data_admin = [
            [
                'username' => 'admin',
                'password' => 'admin',
                'nama'    => 'Muhammad Donda Fauzaan',
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ]
        ];


        // Using Query Builder
        foreach ($data_admin as $data) {
            $this->db->table('admin')->insert($data);
        }
    }
}
