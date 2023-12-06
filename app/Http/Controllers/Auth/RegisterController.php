<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'sim' => 'required|string',
            'password' => 'required|string|min:8',
        ]);

        // Buat user baru
        User::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'phone_number' => $request->input('phone_number'),
            'sim' => $request->input('sim'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Redirect atau lakukan aksi lainnya setelah registrasi berhasil
        return redirect()->route('register')->with('success', 'Registrasi berhasil!');
    }
}

