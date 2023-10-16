<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DosenModel;

class DataDosen extends BaseController
{

    public function __construct()
    {
        $this->DosenModel = new DosenModel();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Dosen',
            'menu' => 'data-dosen',
            'submenu' => '',
            'page' => 'admin/v_dosen',
            'dosen' => $this->DosenModel->AllData(),
        ];
        return view('v_template', $data);
    }

    public function InsertData()
    {
        $data = [
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];
        $this->DosenModel->insert($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');
        return redirect()->to(base_url('DataDosen'));
    }

    public function UpdateData()
    {
        $nidn = $this->request->getPost('nidn');
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];
        $this->DosenModel->update($nidn, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');
        return redirect()->to(base_url('DataDosen'));
    }

    public function DeleteData($nidn)
    {
        $data = [
            'nidn' => $nidn,
        ];
        $this->DosenModel->DeleteData($data);
        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');
        return redirect()->to(base_url('DataDosen'));
    }
}
