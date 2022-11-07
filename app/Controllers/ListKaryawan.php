<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Karyawan;

class ListKaryawan extends BaseController
{
    public function index()
    {
        $karyawanModel = new Karyawan();
        $karyawan = $karyawanModel->findAll();

        $data = [
            'karyawan' => $karyawan
        ];

        return view('templates/h', $data)
            . view('pages/listkaryawan', $data)
            . view('templates/f', $data);
    }
}
