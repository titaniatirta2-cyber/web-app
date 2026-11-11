<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // Menampilkan form / halaman kalkulator segitiga awal
    public function segitiga() {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['luas'] = 0;
        return view('segitiga', $data);
    } 

    // Proses perhitungan luas segitiga
    public function hitungSegitiga(Request $request) { 
        $data['judul'] = 'Kalkulator Luas Segitiga'; 
        // Menangkap input alas dan tinggi dari form 
        $data['alas'] = $request->input('alas');
        $data['tinggi'] = $request->input('tinggi'); 
        
        // Rumus Luas Segitiga = 1/2 * alas * tinggi
        $data['luas'] = 0.5 * $data['alas'] * $data['tinggi'];
        
        // Render kembali ke view dengan membawa data hasil
        return view('segitiga', $data); 
    }
}