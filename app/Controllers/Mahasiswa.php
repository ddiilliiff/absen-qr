<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Mahasiswa',
            'menu' => 'data-mahasiswa',
            'submenu' => '',
            'page' => 'admin/v_mahasiswa',
            'mhs' => $this->MahasiswaModel->AllData(),
        ];

        return view('v_template', $data);
    }

    public function InsertData()
    {
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];
        $this->MahasiswaModel->insert($data);

        session()->setFlashdata('pesan', 'Data berhasil di simpan!!');

        return redirect()->to(base_url('Mahasiswa'));
    }

    public function UpdateData()
    {
        $npm = $this->request->getPost('npm');
        $data = [
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];
        $this->MahasiswaModel->update($npm, $data);
        session()->setFlashdata('pesan', 'Data berhasil di ubah!!');

        return redirect()->to(base_url('Mahasiswa'));
    }

    public function DeleteData($npm)
    {
        $data = [
            'npm' => $npm,
        ];
        $this->MahasiswaModel->delete($data);
        session()->setFlashdata('pesan', 'Data berhasil di hapus!!');

        return redirect()->to(base_url('Mahasiswa'));
    }
}
