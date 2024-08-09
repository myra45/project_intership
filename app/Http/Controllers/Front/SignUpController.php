<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function sign_up() {
        return view('front.sign_up');
    }
    public function sign_up_submit(Request $request) {
        // Validasi input
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    
        // Buat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        // Log in user
        Auth::login($user);
    
        // Redirect ke halaman home atau dashboard
        return redirect()->route('home');
    }
    
}

