<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class RecruiterController extends Controller
{
    public function index_dashboard()
    {
        $data['title'] = 'Recruiter Dashboard';
        return 
        view('recruiter.header').
        view('recruiter.dashboard', $data).
        view('recruiter.footer');
    }
}
