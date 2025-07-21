<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class RecruiterController extends Controller
{
    public function index_dashboard()
    {
        $data['title'] = 'Recruiter Dashboard';
        
        $user = session('user');

    if (!$user) {
        return redirect('/login'); // fallback kalau session kosong
    }

    // Ambil data dari md_auth berdasarkan ID dari session
    $data['recruiter'] = DB::selectOne('SELECT * FROM md_auth WHERE EMAIL_USER = ?', [$user['email']]);

        return 
        view('recruiter.header', $data).
        view('recruiter.dashboard', $data).
        view('recruiter.footer', $data);
    }

    public function add_job()
    {
        $data['title'] = 'Add Job';
        return 
        view('recruiter.header', $data).
        view('recruiter.add_job', $data).
        view('recruiter.footer', $data);
    }
}
