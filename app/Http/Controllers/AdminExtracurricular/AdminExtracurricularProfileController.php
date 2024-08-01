<?php

namespace App\Http\Controllers\AdminExtracurricular;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminExtracurricularProfileController extends Controller
{
    public function profile() {
        $all_data = Admin::with('rExtracurricular')->get();

        return view('admin_ekstrakulikuler.profile', compact('all_data'));
    }

    public function profile_submit(Request $request) {

        $admin_data = Admin::where('email', Auth::guard('admin')->user()->email)->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        if($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            
            $admin_data->password = Hash::make($request->password);
        }

        $admin_photo = $admin_data->photo;

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            unlink(public_path('uploads/'.$admin_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'admin_extracurricular_photo_'.time().'.'.$ext;
            $request->file('photo')->move(public_path('uploads/'),$final_name);

            $admin_photo = $final_name;

        }

        $admin_data = Admin::where('email', Auth::guard('admin')->user()->email)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $admin_photo,
        ]);
        // $admin_data->name = $request->name;
        // $admin_data->email = $request->email;
        // $admin_photo->photo = $admin_photo;
        // $admin_data->save();

        return redirect()->back()->with('success', 'Profile information is saved succesfully');
    }
}
