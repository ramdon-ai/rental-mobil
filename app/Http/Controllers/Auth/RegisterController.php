<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registerform()
    {
        return view('register');
    }

    public function aksiregister(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'no_sim' => 'required|string',
            'role' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Buat user baru
        User::create([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'no_hp' => $request->input('no_hp'),
            'no_sim' => $request->input('no_sim'),
            'role' => $request->input('role'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Redirect atau lakukan aksi lainnya setelah registrasi berhasil
        return redirect('register')->with('success', 'Registrasi berhasil!');
    }
}

