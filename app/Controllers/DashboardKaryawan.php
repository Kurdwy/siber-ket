<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Karyawan;

class DashboardKaryawan extends BaseController
{
    public function index()
    {

        $curentPage = $this->request->getVar('page_member') ?  $this->request->getVar('page_member') : 1;
        $memberModel = new Member();
        $data['member'] = $memberModel->paginate(4, 'member');
        $data['pager'] = $memberModel->pager;
        $data['currentPage'] = $curentPage;

        // $data = [
        //     'member' => $memberModel->findAll()
        // ];

        return view('templates/h', $data)
            . view('pages/dashboardkaryawan', $data)
            . view('templates/f', $data);
    }
}
