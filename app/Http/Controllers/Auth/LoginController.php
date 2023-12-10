<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginform()
    {
        if (Auth::check()) {
            return redirect('dashboard');
        }else{
            return view('login');
        }
    }

    public function aksilogin(Request $request)
    {
        $data = [
            'no_sim' => $request->input('no_sim'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('dashboard');
        }else{
            Session::flash('error', 'No. SIM atau Password Salah');
            return redirect('login');
        }
    }

    public function aksilogout()
    {
        Auth::logout();
        return redirect('login');
    }
}
