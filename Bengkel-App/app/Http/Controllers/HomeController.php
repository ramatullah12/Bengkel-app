<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Misalnya kita akan menampilkan produk terbaru di halaman Home

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 5 produk terbaru dari database
        $products = Product::latest()->take(5)->get();

        // Kirim data ke view 'home'
        return view('home', compact('products'));
    }
}
