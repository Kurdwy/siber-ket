<?php

namespace App\Controllers;

use App\Models\Karyawan;

class LoginKaryawan extends BaseController
{
    public function index()
    {
        echo view('formloginkaryawan');
    }

    public function proses(){
        $karyawan = new Karyawan();
        $nik = $this->request->getVar('nik');
        $pin = $this->request->getVar('pin');
        $dataKaryawan = $karyawan->where([
            'nik' => $nik,
        ])->first();
        if ($dataKaryawan) {
            if (password_verify($pin, $dataKaryawan->pin)) {
                session()->set([
                    'nik' => $dataKaryawan->nik,
                    'nama' => $dataKaryawan->nama,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'NIK & PIN Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'NIK & PIN Salah');
            return redirect()->back();
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/formloginkaryawan');
    }
}