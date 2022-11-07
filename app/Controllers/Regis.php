<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Member;
use App\Models\Karyawan;
use PhpParser\Node\Expr\Print_;

class Regis extends BaseController
{

    public function create()
    {
        $karyawanModel = new Karyawan();
        $karyawan = $karyawanModel->findAll();

        $data = [
            'title' => 'Create Karyawan',
            'karyawan' => $karyawan,
        ];

        return view('templates/h', $data)
            . view('pages/regis', $data)
            . view('templates/f');
    }

    public function store()
    {
        if (!$this->validate([
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'nik' => 'required',
            'pin' => 'required',
            //'confirmPin' => 'required',

        ])) {
            return redirect()->to('/listkaryawan');
        }
        $karyawanModel = new Karyawan();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tempatLahir' => $this->request->getPost('tempatLahir'),
            'tanggalLahir' => $this->request->getPost('tanggalLahir'),
            'jenisKelamin' => $this->request->getPost('jenisKelamin'),
            'nik' => $this->request->getPost('nik'),
            'pin' => $this->request->getPost('pin'),
        ];

        $karyawanModel->saveKaryawan($data);
        return redirect()->to('/listkaryawan');
    }
}
