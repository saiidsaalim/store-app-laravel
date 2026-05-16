<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        //request parameter untuk filter berdasarkan produk
        $nama = request()->query('name');
        $products = Product::with('category')
            ->when($nama, function ($query) use ($nama) {
                $query->where('name', 'like', '%' . $nama . '%');
            })
            ->get();


        // $products = Product::latest()->get();
        $data = $products->map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'price' => (float) $item->price,
                'description' => $item->description,        
                'stock' => $item->stock,
                'image' => env('APP_URL') . Storage::url('products/' . $item->image),
                'category' => [
                    'id' => $item->category->id,
                    'name' => $item->category->name,
                ],

            ];
        });
        return response()->json($data);
    }

    public function show($id)
    {
        $item = Product::findOrFail($id);
        $data = [
            'id' => $item->id,
            'name' => $item->name,
            'price' => (float) $item->price,
            'description' => $item->description,
            'stock' => $item->stock,
            'image' => env('APP_URL') . Storage::url('products/' . $item->image),
            'category' => [
                'id' => $item->category->id,
                'name' => $item->category->name,
            ],
        ];
        return response()->json($data);
    }
}
