<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard() {
        return view('admin.dashboard.dashboard');
    }
    public function product() {
        return view('admin.product.product');
    }

    
    public function film() {
        return view('admin.film.film');
    }
    public function serial () {
        return view('admin.serial.serial');
    }
    public function laporan () {
        return view('admin.laporan.laporan');
    }
    public function banner ()
    {
        return view('admin.banner.banner');
    }
}
