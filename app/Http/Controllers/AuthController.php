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
        // $request->validate([
        //     'email'      => 'required|email|unique:md_auth,EMAIL_USER',
        //     'first_name' => 'required|string|max:50',
        //     'last_name'  => 'required|string|max:50',
        //     'username'   => 'required|string|max:255|unique:md_auth,USERNAME',
        //     'password'   => 'required|string|min:6|confirmed',
        //     'role'       => 'required|in:APPLICANT,RECRUITER',
        // ]);

        $roleId = $request->role == 'APPLICANT' ? 2 : 3;

        try {
            $inserted = DB::table('md_auth')->insert([
                'EMAIL_USER' => $request->email,
                'FIRST_NAME' => $request->first_name,
                'LAST_NAME'  => $request->last_name,
                'USERNAME'   => $request->username,
                'PASSWORD'   => Hash::make($request->password),
                'ROLE'       => $roleId,
                'CREATED_AT' => now(),
                'ID'         => (string) Str::uuid(),
            ]);

            if (!$inserted) {
                return back()->withErrors(['register' => 'Gagal membuat akun.'])->withInput();
            }

            return redirect()->route('login')->with('success', 'Register berhasil! Silakan login.');
        } catch (\Exception $e) {
            return back()->withErrors(['register' => 'Error: ' . $e->getMessage()])->withInput();
        }
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

        $role = DB::table('md_role')->where('ID_ROLE', $user->ROLE)->first();

        Session::put('user', [
            'email'     => $user->EMAIL_USER,
            'username'  => $user->USERNAME,
            'role'      => $user->ROLE,
            'role_name' => $role ? $role->ROLE : null,
            'id'        => $user->ID,
        ]);

        // Redirect sesuai role
        if ($role && $role->ROLE == 'APPLICANT') {
            return redirect('/applicant-dashboard')->with('success', 'Login berhasil sebagai Applicant');
        } elseif ($role && $role->ROLE == 'RECRUITER') {
            return redirect('/recruiter-dashboard')->with('success', 'Login berhasil sebagai Recruiter');
        } else {
            return redirect('/')->with('success', 'Login berhasil!');
        }
    }
}
