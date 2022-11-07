<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Karyawan;

class ListKaryawan extends BaseController
{
    public function __construct()
    {
        $this->karyawanModel = new Karyawan();
    }

    public function index()
    {
        $curentPage = $this->request->getVar('page_karyawan')  ?  $this->request->getVar('page_karyawan') : 1;
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $karyawan = $this->karyawanModel->search($keyword);
        } else {
            $karyawan = $this->karyawanModel;
        }

        $karyawanModel = new Karyawan();
        $data['karyawan'] = $karyawan->paginate(2, 'karyawan');
        $data['karyawanModel'] = $karyawanModel->paginate(2, 'karyawanModel');
        $data['pager'] = $karyawanModel->pager;
        $data['keyword'] = $keyword;
        $data['currentPage'] = $curentPage;
        // $karyawanModel = new Karyawan();
        // $karyawan = $karyawanModel->findAll();

        // $data = [
        //     'karyawan' => $karyawan
        // ];

        return view('templates/he', $data)
            . view('pages/listkaryawan', $data)
            . view('templates/f', $data);
    }
}
