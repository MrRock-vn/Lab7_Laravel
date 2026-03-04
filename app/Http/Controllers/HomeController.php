<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Nguyen Con Son Tung';
        $age = 20;
        $school = 'Đại học CNTT';
        
        return view('welcome', compact('name', 'age', 'school'));
    }

public function multiplication($n)
{
    // Kiểm tra xem n có phải là số hay không
    if (!is_numeric($n)) {
        $error = "Vui lòng nhập một số hợp lệ trên URL!";
        return view('cuu-chuong', compact('error'));
    }

    return view('cuu-chuong', compact('n'));
}
}