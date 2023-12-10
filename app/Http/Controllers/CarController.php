<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function tampilcar()
    {
        $cars = Car::all();
        return view('admin/car', ['cars' => $cars]);
    }

    public function tambahcar()
    {
        return view('admin/addcar');
    }

    public function aksicar(Request $request)
    {
        $request->validate([
            'merek' => 'required|string',
            'model' => 'required|string',
            'no_plat' => 'required|string',
            'sewa' => 'required|numeric',
            // Tambahkan validasi untuk kolom-kolom lainnya
        ]);
    
        // Simpan mobil baru ke dalam database
        Car::create([
            'merek' => $request->input('merek'),
            'model' => $request->input('model'),
            'no_plat' => $request->input('no_plat'),
            'sewa' => $request->input('sewa'),
            // Tambahkan kolom-kolom lainnya sesuai kebutuhan
        ]);
    
        return redirect('datacar');
    }

    public function hapus($id)
    {
        $cars = Car::find($id);

        if ($cars) {
            $cars->delete();
            return redirect('datacar')->with('success', 'Data mobil berhasil dihapus.');
        } else {
            return redirect('datacar')->with('error', 'Data mobil tidak ditemukan.');
        }
    }
}
