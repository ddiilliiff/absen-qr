<?php

namespace App\Controllers;

use App\Models\AbsenModel;
use App\Models\KrsModel;
use App\Models\MahasiswaModel;
use App\Models\MatkulModel;
use App\Models\TAModel;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        $this->mhs = new MahasiswaModel();
        $this->absen = new AbsenModel();
        $this->matkul = new MatkulModel();
        $this->krs = new KrsModel();
        $this->takad = new TAModel();
    }

    public function index()
    {
        return view('mahasiswa/index');
    }

    public function krs()
    {
        $data = [
            'krs' => $this->krs->getAllKRSByNPM(session()->get('username')),
        ];

        // dd($data);

        return view('mahasiswa/krs', $data);
    }

    public function add_krs()
    {
        // dd(session()->get('username'));
        $data = [
            'matkul' => $this->matkul->findAll(),
            'takad' => $this->takad->findAll(),
        ];

        return view('Mahasiswa/add_krs', $data);
    }

    public function getMataKuliahBySemester($smt)
    {
        // Panggil metode getMataKuliahBySemester dari model
        $mataKuliah = $this->matkul->getMataKuliahBySemester($smt);
        // dd($mataKuliah);

        // Kembalikan respons dalam format JSON
        return $this->response->setJSON($mataKuliah);
    }

    public function insert_krs()
    {
        $data = [
            'npm' => $this->request->getVar('npm'),
            'kode_mk' => $this->request->getVar('kode_mk'),
            'takad' => $this->request->getVar('takad'),
            'status' => $this->request->getVar('status'),
        ];
        // dd($data);
        $this->krs->insert($data);

        return redirect()->to(base_url('Mahasiswa/krs'));
    }

    public function absen()
    {
        $id_jadwal = $this->request->getPost('id_jadwal');
        $npm = $this->request->getPost('npm');

        if ($id_jadwal == '' && $npm == '') {
            return redirect()->to('Mahasiswa/error');
            exit;
        }
        $this->request->getPost();

        $data = [
        'npm' => $this->request->getPost('npm'),
        'id_jadwal' => $this->request->getPost('id_jadwal'),
        'status' => 1,
        'tanggal' => date('Y-m-d'),
        ];

        $this->absen->insert($data);

        echo 'Berhasil disimpan';
    }

    public function view_absen($kode_mk, $npm)
    {
        $data = [
            'absen' => $this->absen->getAbsenByNPM($kode_mk, $npm),
        ];

        // dd($data);

        return view('mahasiswa/absen', $data);
    }

    public function error()
    {
        echo 'Ini halaman error';
    }
}
