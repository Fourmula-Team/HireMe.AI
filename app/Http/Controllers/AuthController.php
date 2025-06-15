<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class AuthController extends Controller
{
    public function register()
    {
        return 
        view('auth.register');
    }

    public function login()
    {
        return 
        view('auth.login');
    }
}
