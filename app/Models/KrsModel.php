<?php

namespace App\Models;

use CodeIgniter\Model;

class KrsModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_dt_krs';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id', 'npm', 'kode_mk', 'takad'];

    public function getAllKRSByNPM($npm)
    {
        $result = $this->db->query("SELECT * FROM tbl_dt_krs, tbl_dt_matkul WHERE tbl_dt_krs.kode_mk = tbl_dt_matkul.kode_mk AND tbl_dt_krs.npm = {$npm}")->getResultArray();

        return $result;
    }

    public function getSumAbsen($npm)
    {
        $result = $this->db->query("SELECT * FROM tbl_dt_krs, tbl_dt_matkul, tbl_dt_absen WHERE tbl_dt_krs.kode_mk = tbl_dt_matkul.kode_mk AND tbl_dt_absen.npm = {$npm} AND tbl_dt_krs.npm = {$npm}")->getResultArray();

        return $result;
    }
}
