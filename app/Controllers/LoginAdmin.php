<?php

namespace App\Controllers;

use App\Models\Admin;

class LoginAdmin extends BaseController
{
    public function index()
    {
        echo view('formloginadmin');
    }

    public function process(){
        $admin = new admin();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataAdmin = $admin->where([
            'username' => $username,
        ])->first();
        if ($dataAdmin) {
            if (password_verify($password, password_hash($dataAdmin->password, PASSWORD_BCRYPT))) {
                session()->set([
                    'username' => $dataAdmin->username,
                    'password' => $dataAdmin->password,
                    'nama' => $dataAdmin->nama,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('dashboardadmin'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/formloginadmin');
    }
}