<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_dt_jadwal';
    protected $primaryKey = 'id_jadwal';
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['id_jadwal', 'kode_mk', 'jam', 'ruangan', 'kelas'];

    public function allData()
    {
        return $this->db->query('SELECT * FROM tbl_dt_jadwal, tbl_dt_matkul, tbl_dt_dosen WHERE tbl_dt_jadwal.kode_mk = tbl_dt_matkul.kode_mk AND tbl_dt_matkul.nidn = tbl_dt_dosen.nidn')->getResultArray();
    }

    public function getMataKuliahInfo($id_jadwal)
    {
        return $this->select('tbl_dt_matkul.kode_mk AS kode_mk, tbl_dt_matkul.mata_kuliah AS nama_mk, tbl_dt_dosen.nama_dosen AS nama_dosen, tbl_dt_jadwal.ruangan AS nama_ruangan, tbl_dt_jadwal.hari, tbl_dt_jadwal.jam, tbl_dt_kelas.kelas AS nama_kelas')
            ->join('tbl_dt_matkul', 'tbl_dt_jadwal.kode_mk= tbl_dt_matkul.kode_mk')
            ->join('tbl_dt_dosen', 'tbl_dt_jadwal.nidn = tbl_dt_dosen.nidn')
            ->where('tbl_dt_jadwal.id', $id_jadwal)
            ->first();
    }
}
