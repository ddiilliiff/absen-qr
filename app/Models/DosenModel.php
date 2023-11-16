<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_dt_dosen';
    protected $primaryKey = 'nidn';
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['nidn', 'nama_dosen', 'tempat_lahir', 'tgl_lahir', 'jk', 'email'];

    public function allData()
    {
        return $this->db->table('tbl_dt_dosen')
            ->orderBy('nidn', 'ASC')
            ->get()->getResultArray();
    }

    public function matkulByDosen()
    {
        return $this->db->query('SELECT * FROM tbl_dt_dosen, tbl_dt_matkul WHERE tbl_dt_dosen.nidn = tbl_dt_matkul.nidn')->getResultArray();
    }
}
