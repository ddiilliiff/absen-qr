<?php

namespace App\Models;

use CodeIgniter\Model;

class TAModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'tbl_dt_takad';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['id_takad', 'tahun_ajaran', 'smt'];
}
