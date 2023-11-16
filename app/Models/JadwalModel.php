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
}
