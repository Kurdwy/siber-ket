<?php

namespace App\Controllers;

use App\Models\Karyawan;
use App\Models\Member;

class TambahMember extends BaseController
{
    public function index()
    {
        $memberModel = new Member();
        $member = $memberModel->findAll();

        $data = [
            'title' => 'Member',
            'member' => $member
        ];

        return view('templates/h', $data)
            . view('pages/formtambahmember', $data)
            . view('templates/f');
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

    public function edit($id_surat_masuk)
    {
        $suratMasukModel = new SuratMasuk();
        $suratmasuk = $suratMasukModel->find($id_surat_masuk);

        $data = [
            'title' => 'Edit Surat Masuk'
        ];

        return view('templates/header', $data)
            . view('suratmasuk/edit', $suratmasuk)
            . view('templates/footer');
    }

    public function update($id_surat_masuk)
    {
        if (!$this->validate([
            'no_surat' => 'required',
            'isi_surat' => 'required',
            'tgl_terima_surat' => 'required',
            'tgl_surat' => 'required',
            'asal_surat' => 'required',
            'keterangan_surat' => 'required',
        ])) {
            return redirect()->to('/suratmasuk');
        }
        $suratMasukModel = new SuratMasuk();
        $data = [
            'no_surat' => $this->request->getVar('no_surat'),
            'isi_surat' => $this->request->getVar('isi_surat'),
            'tgl_terima_surat' => $this->request->getVar('tgl_terima_surat'),
            'tgl_surat' => $this->request->getVar('tgl_surat'),
            'asal_surat' => $this->request->getVar('asal_surat'),
            'keterangan_surat' => $this->request->getVar('keterangan_surat'),
        ];

        $suratMasukModel->update($id_surat_masuk, $data);
        return redirect()->to('/suratmasuk');
        }
}
