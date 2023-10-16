<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'admin/v_dashboard',
        ];
        return view('v_template', $data);
    }
}
