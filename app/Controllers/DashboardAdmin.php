<?php

namespace App\Controllers;

use App\Models\Member;
use App\Models\Karyawan;

class DashboardAdmin extends BaseController
{
    public function index()
    {
        $memberModel = new Member();
        $karyawanModel = new Karyawan();

        $jumlah_Member =  $memberModel->countAllResults();
        $jumlah_Karyawan =  $karyawanModel->countAllResults();

        $created_at = $memberModel->select('COUNT(nik) AS jumlah')
            ->groupBy('created_at')
            ->get();

        return view('templates/he')
            . view('pages/dashboardadmin', [
                'jumlah_Member' => $jumlah_Member,
                'jumlah_Karyawan' => $jumlah_Karyawan,
                'created_at' => $created_at,
            ])
            . view('templates/f');
    }
}
