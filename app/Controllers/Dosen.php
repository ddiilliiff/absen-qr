<?php

namespace App\Controllers;

use App\Models\AbsenModel;
use App\Models\DosenModel;
use App\Models\JadwalModel;
use App\Models\MahasiswaModel;
use App\Models\MatkulModel;

class Dosen extends BaseController
{
    public function __construct()
    {
        $this->absen = new AbsenModel();
        $this->dosen = new DosenModel();
        $this->jadwal = new JadwalModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->matkul = new MatkulModel();
    }

    public function index()
    {
        $dosenModel = new DosenModel();
        $dosen = $dosenModel->dosen();

        return view('dosen.index', compact('dosen'));
    }
}
