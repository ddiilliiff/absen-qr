<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param array|null $arguments
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        //
        // Ambil rute yang sedang diakses
        $route = $request->uri->getPath();

        // Ambil peran pengguna dari sesi
        $role = session('role');

        // Cek akses pengguna berdasarkan peran dan rute yang diakses
        switch ($role) {
            case 1: // Admin
                if (strpos($route, 'admin') === false) {
                    // Jika pengguna dengan peran admin mencoba mengakses rute yang tidak sesuai
                    return redirect()->to('admin');
                }
                break;
            case 2: // Dosen
                if (strpos($route, '') === false) {
                    // Jika pengguna dengan peran dosen mencoba mengakses rute yang tidak sesuai
                    return redirect()->to('');
                }
                break;
            case 3: // Mahasiswa
                if (strpos($route, 'mahasiswa') === false) {
                    // Jika pengguna dengan peran mahasiswa mencoba mengakses rute yang tidak sesuai
                    return redirect()->to('mahasiswa');
                }
                break;
            default:
                // Jika peran tidak ditemukan, arahkan ke halaman login atau tampilkan pesan akses ditolak
                return redirect()->to('/');
                break;
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param array|null $arguments
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
