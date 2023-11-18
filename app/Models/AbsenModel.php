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
}
