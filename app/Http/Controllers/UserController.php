<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataUser;

class UserController extends Controller
{
    public function index()
    {
        $data_user = DataUser::all();
        return view('kelolauser', compact('data_user'));
    }
}
