<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function RegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
// ✅ Validasi semua input form, termasuk role
        $request->validate([
            'email'      => 'required|email|unique:md_auth,EMAIL_USER',
            'first_name' => 'required|string|max:50',
            'last_name'  => 'required|string|max:50',
            'username'   => 'required|string|max:255|unique:md_auth,USERNAME',
            'password'   => 'required|string|min:6|confirmed',
            'role'       => 'required|in:APPLICANT,RECRUITER',
        ]);

        // ✅ Tentukan ID_ROLE sesuai pilihan radio button
        $roleId = $request->role == 'APPLICANT' ? 2 : 3; // 2 = APPLICANT, 3 = RECRUITER


        DB::table('md_auth')->insert([
            'EMAIL_USER' => $request->email,
            'FIRST_NAME' => $request->first_name,
            'LAST_NAME'  => $request->last_name,
            'USERNAME'   => $request->username,
            'PASSWORD'   => Hash::make($request->password),
            'ROLE'       => 2, // 2 = APPLICANT
            'ID'         => Str::uuid(),
        ]);


        // return redirect('/login')->with('success', 'Register berhasil! Silakan login.');
        // return redirect('login')->with(['succ_msg' => 'Berhasil daftar']);
        return redirect()->route('login')->with('success', 'Register berhasil! Silakan login.');
        // return redirect()->back()->with('error', 'Terjadi kesalahan, silakan coba lagi.');

    }

    public function LoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $user = DB::table('md_auth')->where('EMAIL_USER', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->PASSWORD)) {
            return back()->withErrors(['email' => 'Email atau Password salah!'])->withInput();
        }

        // Ambil nama role dari tabel md_role
        $role = DB::table('md_role')->where('ID_ROLE', $user->ROLE)->first();

        Session::put('user', [
            'email'     => $user->EMAIL_USER,
            'username'  => $user->USERNAME,
            'role'      => $user->ROLE, // ID Role
            'role_name' => $role ? $role->ROLE : null, // Nama Role: ADMIN/APPLICANT/RECRUITER
            'id'        => $user->ID,
        ]);

        return redirect('/user-dashboard')->with('success', 'Login berhasil!');
    }
}
