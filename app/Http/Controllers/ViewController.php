<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function dashboard()
    {
        $data['title'] = 'Dashboard - E-Parking Electro';
        return view('admin/dashboard', $data);
    }

    public function tables_page()
    {
        $data['title'] = 'Tables - E-Parking Electro';
        return view('admin/tables', $data);
    }

    public function profile()
    {
        $data['title'] = 'Profile - E-Parking Electro';
        return view('admin/profile', $data);
    }
}
