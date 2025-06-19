<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserSessionMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Cek apakah user sudah login
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Jika ada parameter role yang dikirim ke middleware
        if (!empty($roles)) {
            $userRole = Session::get('user')['role_name']; // Menggunakan role_name dari session
            
            // Cek apakah role user ada dalam daftar role yang diizinkan
            if (!in_array($userRole, $roles)) {
                return redirect()->route('login')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
            }
        }

        return $next($request);
    }
}