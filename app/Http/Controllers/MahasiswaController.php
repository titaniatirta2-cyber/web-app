<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    // Daftar mahasiswa
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'Anton', 'alamat' => 'Surabaya', 'gender' => 'L'],
            ['nama' => 'Budi',  'alamat' => 'Kediri',   'gender' => 'L'],
            ['nama' => 'Ani',   'alamat' => 'Malang',   'gender' => 'P'],
            ['nama' => 'Sinta', 'alamat' => 'Surabaya', 'gender' => 'P'],
        ];
        return view('mahasiswa', compact('mahasiswa'));
    }

    // Kalkulator luas segitiga (parameter dari URL)
    public function segitiga($alas = null, $tinggi = null)
    {
        $luas = ($alas !== null && $tinggi !== null) ? 0.5 * $alas * $tinggi : null;
        return view('segitiga', compact('alas', 'tinggi', 'luas'));
    }
}