<?php

namespace App\Http\Controllers\AdminExtracurricular;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Extracurricular;

class AdminExtracurricularHomeController extends Controller
{
    public function index() {
        $all_data = Extracurricular::orderBy('id', 'asc')->get();

        return view('admin_ekstrakulikuler.home',compact('all_data'));
    }
}
