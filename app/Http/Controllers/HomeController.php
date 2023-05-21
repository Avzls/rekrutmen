<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $level = Auth::user()->level;

        if ($level == 'admin') {
            return view('admin');
        }
        if ($level == 'kabag') {
            return view('kabag');
        } else {
            return view('dashboard');
        }
    }
    public function tambahuser(Request $request)
    {
        $data = new user;
        $data->name = $request->name;
        $data->level = $request->level;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();

        return redirect('kelolauser');
    }
}
