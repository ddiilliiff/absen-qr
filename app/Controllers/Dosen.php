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
        $data['data'] = $this->dosen->getDataByNIDN(session()->get('username'));
        $data['matkul'] = $this->matkul->getMatkulByDosen(session()->get('username'));
        // dd($data);

        return view('dosen/index', $data);
    }

    public function absen()
    {
        return view('dosen/absen');
    }
}
