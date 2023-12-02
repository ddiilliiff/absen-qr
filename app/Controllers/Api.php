<?php

// app/Controllers/Api.php

namespace App\Controllers;

use App\Models\JadwalModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class Api extends Controller
{
    use ResponseTrait;

    public function getMataKuliahInfo($id_jadwal)
    {
        $jadwalModel = new JadwalModel();
        $mataKuliahInfo = $jadwalModel->getMataKuliahInfo($id_jadwal);

        return $this->respond($mataKuliahInfo, 200);
    }
}
