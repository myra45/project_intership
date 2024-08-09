<?php

namespace App\Http\Controllers\AdminExtracurricular;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresensiController extends Controller
{
    public function index() {
        return view('admin_ekstrakulikuler.presensi_table');
    }

    public function form() {
        return view('admin_ekstrakulikuler.form_presensi');
    }
}
