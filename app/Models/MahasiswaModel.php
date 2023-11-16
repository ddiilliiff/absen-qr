<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_dt_mhs';
    protected $primaryKey       = 'npm';
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['npm', 'nama_mhs', 'tempat_lahir', 'tgl_lahir', 'jk', 'email'];

    public function allData()
    {
        return $this->db->table('tbl_dt_mhs')
            ->orderBy('npm', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_dt_mhs')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_dt_mhs')
            ->where('npm', $data['npm'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_dt_mhs')
            ->where('npm', $data['npm'])
            ->delete($data);
    }
}
