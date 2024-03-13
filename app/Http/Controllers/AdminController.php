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
    public function user() {
        return view('admin.user.user');
    }
}
