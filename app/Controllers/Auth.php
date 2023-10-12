<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('session');
        $this->user = new UserModel();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        // dd($this->request->getPost());
        $post = $this->request->getPost();
        $user = $this->user->where('username', $post['username'])->first();
        if ($user) {
            if ($post['username'] == $user['username']) {
                if (password_verify($post['password'], $user['password'])) {
                    $role = $user['role'];
                    session()->set('role', $role);
                    switch ($role) {
                        case 1:
                            // dd($role);

                            return redirect()->to('admin');
                            break;
                        case 2:
                            // dd($role);

                            return redirect()->to('dosen');
                            break;
                        case 3:
                            // dd($role);

                            return redirect()->to('mahasiswa');
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
}
