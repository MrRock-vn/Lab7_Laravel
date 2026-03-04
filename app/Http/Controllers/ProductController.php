<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        // 1. Tạo dữ liệu giả
        $products = [
            ['name' => 'iPhone 15 Pro Max', 'price' => 32000000],
            ['name' => 'Samsung Galaxy S24', 'price' => 25000000],
            ['name' => 'Xiaomi Redmi Note 13', 'price' => 5000000],
            ['name' => 'Tai nghe Sony WH-1000XM5', 'price' => 8500000],
            ['name' => 'Macbook M3 Air', 'price' => 28000000],
        ];

        // 2. Trả về view và truyền mảng products
        return view('products', compact('products'));
    }
}