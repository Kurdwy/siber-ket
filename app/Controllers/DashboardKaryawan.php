<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Karyawan;

class DashboardKaryawan extends BaseController
{
    public function index()
    {
        $memberModel = new Member();

        $data = [
            'member' => $memberModel->findAll()
        ];
        
        return view('templates/h', $data)
            . view('pages/dashboardkaryawan', $data)
            . view('templates/f', $data);
    }
}