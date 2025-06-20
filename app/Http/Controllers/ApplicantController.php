<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class ApplicantController extends Controller
{
    public function index_dashboard()
    {
        $data['title'] = 'Applicant Dashboard';
        return 
        view('applicant.header').
        view('applicant.dashboard', $data).
        view('applicant.footer');
    }

    public function index_interview()
    {
        $data['title'] = 'Applicant Interview';
        return 
        view('applicant.header').
        view('applicant.interviewai', $data).
        view('applicant.footer');
    }

    public function index_recruiter_dashboard()
    {
      $data['title'] = 'recruiter Dashboard';
        return 
        view('applicant.header').
        view('applicant.dashboard', $data).
        view('applicant.footer');  
    }
}

