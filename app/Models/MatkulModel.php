<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_dt_matkul';
    protected $primaryKey = 'kode_mk';
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['kode_mk', 'nidn', 'mata_kuliah', 'sks'];

    public function allData()
    {
        return $this->db->table('tbl_dt_matkul')
            ->orderBy('kode_mk', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_dt_matkul')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_dt_matkul')
            ->where('kode_mk', $data['kode_mk'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_dt_matkul')
            ->where('kode_mk', $data['kode_mk'])
            ->delete($data);
    }

    public function getMatkulByDosen($nidn)
    {
        // Sesuaikan nama kolom dan tabel sesuai dengan struktur Anda
        $result = $this->db->table('tbl_dt_matkul')
                          ->join('tbl_dt_jadwal', 'tbl_dt_matkul.kode_mk = tbl_dt_jadwal.kode_mk')
                          ->where('tbl_dt_matkul.nidn', $nidn)
                          ->get()
                          ->getResultArray();

        return $result;
    }

    public function getMatkulByJadwal($id_jadwal)
    {
        $query = 'SELECT * FROM tbl_dt_matkul
                  JOIN tbl_dt_jadwal ON tbl_dt_matkul.kode_mk = tbl_dt_jadwal.kode_mk
                  JOIN tbl_dt_dosen ON tbl_dt_dosen.nidn = tbl_dt_matkul.nidn
                  WHERE tbl_dt_jadwal.id_jadwal = ?';

        $result = $this->db->query($query, [$id_jadwal])->getResultArray();

        return $result;
    }

    public function getMataKuliahBySemester($smt)
    {
        try {
            // Sesuaikan query berdasarkan struktur tabel dan relasi Anda
            return $this->where('smt', $smt)->findAll();
        } catch (\Exception $e) {
            // Tangani kesalahan, misalnya catat pesan kesalahan
            log_message('error', 'Error in getMataKuliahBySemester: '.$e->getMessage());

            return [];
        }
    }
}
