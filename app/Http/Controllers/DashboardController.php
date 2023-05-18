<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function dashboard()
    {
        return view('Dashboard');
    }

    public function kelolalowongan()
    {
        return view('kelolalowongan');
    }
}
