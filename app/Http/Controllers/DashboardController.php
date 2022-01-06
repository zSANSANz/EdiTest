<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('cek_login');
    }

    public function index()
    {
        return view('landing-page');

    }

}
