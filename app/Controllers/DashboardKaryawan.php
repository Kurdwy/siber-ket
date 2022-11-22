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

    public function create()
    {
        $data = [
            'title' => 'Create Member'
        ];

        return view('templates/h', $data)
            . view('pages/formtambahmember', $data)
            . view('templates/f');
    }

    public function store()
    {
        if (!$this->validate([
            'namaLengkap' => 'required',
            'tanggalLahir' => 'required',
            'nik' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'alamat' => 'required',
        ])) {
            return redirect()->to('/dashboardkaryawan');
        }
        $memberModel = new Member();
        $data = [
            'namaLengkap' => $this->request->getPost('namaLengkap'),
            'tanggalLahir' => $this->request->getPost('tanggalLahir'),
            'nik' => $this->request->getPost('nik'),
            'jenisKelamin' => $this->request->getPost('jenisKelamin'),
            'tempatLahir' => $this->request->getPost('tempatLahir'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $memberModel->saveMember($data);
        return redirect()->to('/dashboardkaryawan');
    }

    public function delete($nik)
    {
        $memberModel = new Member();
        $memberModel->delete($nik);

        return redirect()->to('/dashboardkaryawan');
    }

    public function edit($nik)
    {
        $memberModel = new Member();
        $member = $memberModel->find($nik);

        $data = [
            'title' => 'Edit Member'
        ];

        return view('templates/h', $data)
            . view('pages/formeditmember', $member)
            . view('templates/f');
    }

    public function update($nik)
    {
        if (!$this->validate([
            'namaLengkap' => 'required',
            'tanggalLahir' => 'required',
            'nik' => 'required',
            'jenisKelamin' => 'required',
            'tempatLahir' => 'required',
            'alamat' => 'required',
        ])) {
            //return redirect()->to('/dashboardkaryawan');
        }
        $memberModel = new Member();
        $data = [
            'namaLengkap' => $this->request->getPost('namaLengkap'),
            'tanggalLahir' => $this->request->getPost('tanggalLahir'),
            'nik' => $this->request->getPost('nik'),
            'jenisKelamin' => $this->request->getPost('jenisKelamin'),
            'tempatLahir' => $this->request->getPost('tempatLahir'),
            'alamat' => $this->request->getPost('alamat')
        ];

        $memberModel->update($nik, $data);
        return redirect()->to('/dashboardkaryawan');
    }
}
