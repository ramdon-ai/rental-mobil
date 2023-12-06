<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    public function car()
    {
        return view('addcar');
    }

    public function addcar(Request $request)
{
    // Validasi input
    $request->validate([
        'brand' => 'required|string',
        'model' => 'required|string',
        'license_plate' => 'required|string',
        'harga' => 'required|numeric',
        // Tambahkan validasi untuk kolom-kolom lainnya
    ]);

    // Simpan mobil baru ke dalam database
    Car::create([
        'brand' => $request->input('brand'),
        'model' => $request->input('model'),
        'license_plate' => $request->input('license_plate'),
        'harga' => $request->input('harga'),
        // Tambahkan kolom-kolom lainnya sesuai kebutuhan
    ]);

    // Redirect atau lakukan aksi lainnya setelah mobil berhasil ditambahkan
    return redirect()->route('dashboard.cars.index')->with('success', 'Mobil berhasil ditambahkan.');
}
}
