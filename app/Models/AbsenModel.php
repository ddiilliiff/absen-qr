<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsenModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_dt_absen';
    protected $primaryKey = 'id_absen';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id_absen', 'npm', 'id_jadwal', 'status'];

    // public function getAbsenByJadwal($id_jadwal)
    // {
    //     $query = 'SELECT * FROM tbl_dt_absen
    //           JOIN tbl_dt_jadwal ON tbl_dt_absen.id_jadwal = tbl_dt_jadwal.id_jadwal
    //           JOIN tbl_dt_mhs ON tbl_dt_absen.npm = tbl_dt_mhs.npm
    //           WHERE tbl_dt_absen.id_jadwal = ?';

    //     $result = $this->db->query($query, [$id_jadwal])->getResultArray();

    //     return $result;
    // }

    // public function getAbsensiMahasiswa($id_jadwal)
    // {
    //     return $this->select('npm, GROUP_CONCAT(pertemuan) as pertemuan, GROUP_CONCAT(status) as status')
    //                 ->join('tbl_dt_mhs', 'tbl_dt_mhs.npm = tbl_dt_absen.npm')
    //                 ->where('tbl_dt_absen.id_jadwal', $id_jadwal)
    //                 ->groupBy('tbl_dt_absen.npm')
    //                 ->findAll();
    // }
    public function getAbsenByJadwal($id_jadwal)
    {
        $query = 'SELECT tbl_dt_absen.*, tbl_dt_mhs.nama_mhs, tbl_dt_mhs.npm as npm_mhs
                  FROM tbl_dt_absen
                  JOIN tbl_dt_jadwal ON tbl_dt_absen.id_jadwal = tbl_dt_jadwal.id_jadwal
                  JOIN tbl_dt_mhs ON tbl_dt_absen.npm = tbl_dt_mhs.npm
                  WHERE tbl_dt_absen.id_jadwal = ?';

        $result = $this->db->query($query, [$id_jadwal])->getResultArray();

        return $result;
    }

    public function getAbsensiMahasiswa($id_jadwal)
    {
        return $this->select('tbl_dt_mhs.nama_mhs, tbl_dt_mhs.npm, GROUP_CONCAT(pertemuan) as pertemuan, GROUP_CONCAT(status) as status')
                    ->join('tbl_dt_mhs', 'tbl_dt_mhs.npm = tbl_dt_absen.npm')
                    ->where('tbl_dt_absen.id_jadwal', $id_jadwal)
                    ->groupBy('tbl_dt_mhs.npm')
                    ->findAll();
    }

    public function getAbsenByNPM($kode_mk, $npm)
    {
        return $this->db->query("SELECT * FROM tbl_dt_matkul, tbl_dt_jadwal, tbl_dt_absen WHERE tbl_dt_matkul.kode_mk = {$kode_mk} AND tbl_dt_matkul.kode_mk = tbl_dt_jadwal.kode_mk AND tbl_dt_jadwal.id_jadwal = tbl_dt_absen.id_jadwal AND tbl_dt_absen.npm = {$npm};")->getResultArray();
    }
}
