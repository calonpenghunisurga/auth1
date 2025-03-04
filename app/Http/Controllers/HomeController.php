<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() //Nama kelas (index) yang dipanggil di routes/web.php
    {
        return view('admin.dashboard'); //Menampilkan view admin.dashboard
    }
}
