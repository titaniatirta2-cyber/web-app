<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Halaman Home
    public function home() {
        return view('home');
    }

    // Halaman Product
    public function product() {
        return view('product');
    }

    // Halaman About
    public function about() {
        return view('about');
    }

    // Halaman Detail Produk Berdasarkan Harga (URL Parameter)
    public function detail($harga) {
        return view('detail', ['harga' => $harga]);
    }
}