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
}
