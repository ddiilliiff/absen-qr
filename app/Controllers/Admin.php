<?php

namespace App\Controllers;

use App\Models\AbsenModel;
use App\Models\DosenModel;
use App\Models\JadwalModel;
use App\Models\KrsModel;
use App\Models\MahasiswaModel;
use App\Models\MatkulModel;
use App\Models\QRCModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->absen = new AbsenModel();
        $this->dosen = new DosenModel();
        $this->jadwal = new JadwalModel();
        $this->krs = new KrsModel();
        $this->mahasiswa = new MahasiswaModel();
        $this->matkul = new MatkulModel();
        $this->qrc = new QRCModel();
        $this->user = new UserModel();
    }

    // Dashboard
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'admin/v_dashboard',
        ];

        return view('v_template', $data);
    }

    // Data Dosen
    public function dataDosen()
    {
        $data = [
            'judul' => 'Data Dosen',
            'page' => 'admin/v_dosen',
            'dosen' => $this->dosen->findAll(),
        ];

        return view('v_template', $data);
    }

    public function insertDosen()
    {
        $data = [
            'nidn' => $this->request->getPost('nidn'),
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];

        $this->dosen->insert($data);

        $user = [
            'username' => $this->request->getPost('nidn'),
            'password' => password_hash($this->request->getPost('nidn'), PASSWORD_DEFAULT),
            'role' => 2,
        ];

        $this->user->insert($user);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan !!');

        return redirect()->back();
    }

    public function updateDosen()
    {
        $nidn = $this->request->getPost('nidn');
        $data = [
            'nama_dosen' => $this->request->getPost('nama_dosen'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];

        $this->dosem->update($nidn, $data);

        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');

        return redirect()->back();
    }

    public function deleteDosen($nidn)
    {
        $this->dosen->delete($nidn);

        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');

        return redirect()->back();
    }

    // Data Mahasiswa
    public function dataMahasiswa()
    {
        $data = [
            'judul' => 'Data Mahasiswa',
            'page' => 'admin/v_mahasiswa',
            'mhs' => $this->mahasiswa->AllData(),
        ];

        return view('v_template', $data);
    }

    public function insertMahasiswa()
    {
        $data = [
            'npm' => $this->request->getPost('npm'),
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];

        $this->mahasiswa->insert($data);

        $user = [
            'username' => $this->request->getPost('npm'),
            'password' => password_hash($this->request->getPost('npm'), PASSWORD_DEFAULT),
            'role' => 3,
        ];

        $this->user->insert($user);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');

        return redirect()->back();
    }

    public function updateMahasiswa()
    {
        $npm = $this->request->getPost('npm');
        $data = [
            'nama_mhs' => $this->request->getPost('nama_mhs'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'jk' => $this->request->getPost('jk'),
            'email' => $this->request->getPost('email'),
        ];
        $this->mahasiswa->update($npm, $data);

        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');

        return redirect()->back();
    }

    public function deleteMahasiswa($npm)
    {
        $this->mahasiswa->delete($npm);

        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');

        return redirect()->back();
    }

    // Data Matkul
    public function dataMatkul()
    {
        $data = [
            'judul' => 'Data Matkul',
            'page' => 'admin/v_matkul',
            'dsn' => $this->dosen->findAll(),
            'matkul' => $this->dosen->matkulByDosen(),
        ];

        return view('v_template', $data);
    }

    public function insertMatkul()
    {
        $data = [
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nidn' => $this->request->getPost('nidn'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'sks' => $this->request->getPost('sks'),
        ];

        $this->matkul->insert($data);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');

        return redirect()->back();
    }

    public function updateMatkul()
    {
        $kode_mk = $this->request->getPost('kode_mk');
        $data = [
            'kode_mk' => $this->request->getPost('kode_mk'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'sks' => $this->request->getPost('sks'),
        ];
        $this->matkul->update($kode_mk, $data);

        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');

        return redirect()->back();
    }

    public function deleteMatkul($kode_mk)
    {
        $this->matkul->delete($kode_mk);

        session()->setFlashdata('pesan', 'Data Berhasil Didelete !!');

        return redirect()->back();
    }

    // Data Jadwal
    public function dataJadwal()
    {
        $data = [
            'judul' => 'Data Jadwal',
            'page' => 'admin/v_jadwal',
            'mk' => $this->matkul->findAll(),
            'jadwal' => $this->jadwal->AllData(),
        ];
        // dd($data);

        return view('v_template', $data);
    }

    public function insertJadwal()
    {
        $data = [
            'kode_mk' => $this->request->getPost('kode_mk'),
            'nidn' => $this->request->getPost('nidn'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'sks' => $this->request->getPost('sks'),
        ];

        $this->matkul->insert($data);

        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!!');

        return redirect()->back();
    }

    public function updateJadwal()
    {
        $kode_mk = $this->request->getPost('kode_mk');
        $data = [
            'kode_mk' => $this->request->getPost('kode_mk'),
            'mata_kuliah' => $this->request->getPost('mata_kuliah'),
            'sks' => $this->request->getPost('sks'),
        ];
        $this->matkul->update($kode_mk, $data);

        session()->setFlashdata('pesan', 'Data Berhasil Diupdate !!');

        return redirect()->back();
    }

    // Data QR Code
    public function dataQRC()
    {
        $data = [
            'judul' => 'Data QRC',
            'page' => 'admin/v_qrc',
            'qrc' => $this->jadwal->allData(),
        ];
        // dd($data);

        return view('v_template', $data);
    }

    // Data Absen
    public function dataAbsensi()
    {
        $data = [
            'judul' => 'Data Absensi',
            'page' => 'admin/v_absensi',
            'absen' => $this->absen->findAll(),
        ];

        return view('v_template', $data);
    }

    // Data User
    public function dataUser()
    {
        $data = [
            'judul' => 'Data User',
            'page' => 'admin/v_user',
            'user' => $this->user->findAll(),
        ];
        // dd($data);

        return view('v_template', $data);
    }
}
