<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_dt_dosen';
    protected $primaryKey       = 'nidn';
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['nidn', 'nama_dosen', 'tempat_lahir', 'tgl_lahir', 'jk', 'email'];

    public function allData()
    {
        return $this->db->table('tbl_dt_dosen')
            ->orderBy('nidn', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_dt_dosen')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_dt_dosen')
            ->where('nidn', $data['nidn'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_dt_dosen')
            ->where('nidn', $data['nidn'])
            ->delete($data);
    }
}
