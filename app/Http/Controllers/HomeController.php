<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::limit(4)->get(); // Mengambil 4 produk terbaru
        return view('pages.public.home', compact('products')); // Mengirim data produk ke view
    }
}
