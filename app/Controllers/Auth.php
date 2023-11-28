<?php

namespace App\Controllers;

use App\Models\ModelLogin;

class Auth extends BaseController
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

    public function auth()
    {
        $post = $this->request->getPost();
        $user = $this->user->where('username', $post['username'])->first();
        // dd($user, $post);
        if ($user) {
            if ($post['username'] == $user['username']) {
                if (password_verify($post['password'], $user['password'])) {
                    $role = $user['role'];
                    $username = $user['username'];
                    // dd($role);
                    session()->set('role', $role);
                    session()->set('username', $username);
                    switch ($role) {
                        case 1:
                            // dd($role);

                            return redirect()->to('Admin/index');
                            break;
                        case 2:
                            // dd($role, $username);

                            return redirect()->to('Dosen/index');
                            break;
                        case 3:
                            // dd($role, $username);

                            return redirect()->to('Mahasiswa/index');
                            break;
                    }
                } else {
                    return redirect()->back()->with('error', 'Password salah!');
                }
            } else {
                return redirect()->back()->with('error', 'Email salah!');
            }
        } else {
            return redirect()->back()->with('error', 'Pengguna tidak ditemukan');
        }
    }

    public function logout()
    {
        session()->remove('username');
        session()->remove('role');
        session()->setFlashdata('pesan', 'Anda Berhasil Logout !!!');

        return redirect()->to('Auth');
    }
}
