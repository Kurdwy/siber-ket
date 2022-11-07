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
        $data = [
            'karyawan' => $karyawanModel->findAll()
        ];

        return view('templates/h', $data)
            . view('pages/dashboardadmin', $data)
            . view('templates/f', $data);
    }
}
