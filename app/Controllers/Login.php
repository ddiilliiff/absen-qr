<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Login extends BaseController
{
    public function __construct()
    {
        $this->user = new ModelLogin();
    }

    public function index()
    {
        // session();
        $data = [
            'judul' => 'Login',
            'validation' => \Config\Services::validation(),
        ];

        return view('auth/v_login', $data);
    }

    public function CekLogin()
    {
        $post = $this->request->getPost();
        $user = $this->user->where('username', $post['username'])->first();
        // dd($user, $post);
        if ($user) {
            if ($post['username'] == $user['username']) {
                if (password_verify($post['password'], $user['password'])) {
                    $role = $user['role'];
                    // dd($role);
                    session()->set('role', $role);
                    switch ($role) {
                        case 1:
                            // dd($role);

                            return redirect()->to('Admin');
                            break;
                        case 2:
                            // dd($role);

                            return redirect()->to('');
                            break;
                        case 3:
                            // dd($role);

                            return redirect()->to('Mahasiswa');
                            break;
                    }
                } else {
                    return redirect()->back()->with('error', 'Password salah!');
                }
            } else {
                return redirect()->back()->with('error', 'Email salah!');
            }
        }
    }

    public function LogOut()
    {
        session()->remove('nama_user');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Anda Berhasil Logout !!!');

        return redirect()->to(base_url('Login'));
    }
}
