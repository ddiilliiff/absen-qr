<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tabel_user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'username', 'password', 'role'];

    public function CekUser($username, $password)
    {
        return $this->db->table('tabel_user')
            ->where('username', $username)
            ->where('password', $password)
            ->get()->getRowArray();
    }
}
