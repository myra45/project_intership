<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index() {
        return view('admin.home');
    }
    public function form() {
        return view('admin.form');
    }

    public function sign_up() {
        return view('reusable.sign_up');
    }

    public function table() {
        return view('admin.table');
    }
}
