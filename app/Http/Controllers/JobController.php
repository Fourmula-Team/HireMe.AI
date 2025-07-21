<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ApplicantController extends Controller
{
    public function index_job()
    {
        $data['title'] = 'Applicant Dashboard';
        return 
        view('applicant.header').
        view('applicant.dashboard', $data).
        view('applicant.footer');
    }
}