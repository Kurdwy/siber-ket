<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Karyawan;
use PhpParser\Node\Expr\Print_;

class DashboardKaryawan extends BaseController
{

    public function __construct()
    {
        $this->memberModel = new Member();
    }
    public function index()
    {

        $curentPage = $this->request->getVar('page_member')  ?  $this->request->getVar('page_member') : 1;
        $keyword = $this->request->getVar('keyword');

        if ($keyword) {
            $member = $this->memberModel->search($keyword);
        } else {
            $member = $this->memberModel;
        }

        $memberModel = new Member();
        $data['member'] = $member->paginate(4, 'member');
        $data['memberModel'] = $memberModel->paginate(4, 'memberModel');
        $data['pager'] = $memberModel->pager;
        $data['keyword'] = $keyword;
        $data['currentPage'] = $curentPage;

        // $data = [
        //     'member' => $memberModel->findAll()
        // ];

        return view('templates/h', $data)
            . view('pages/dashboardkaryawan', $data)
            . view('templates/f', $data);
    }
}
