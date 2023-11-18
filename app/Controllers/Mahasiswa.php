<?php

namespace App\Controllers;

use App\Models\AbsenModel;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->mhs = new MahasiswaModel();
        $this->absen = new AbsenModel();
    }

    public function index()
    {
        return view('v_template_mhs');
    }

    public function absen()
    {
        $id_jadwal = $this->request->getPost('id_jadwal');
        $npm = $this->request->getPost('npm');

        if ($id_jadwal == '' && $npm == '') {
            echo 'Belum melakukan scan';
            exit;
        }
        $this->request->getPost();

        $data = [
            'npm' => $this->request->getPost('npm'),
            'id_jadwal' => $this->request->getPost('id_jadwal'),
            'status' => 1,
        ];

        $this->absen->insert($data);

        echo 'Berhasil disimpan';
    }
}
