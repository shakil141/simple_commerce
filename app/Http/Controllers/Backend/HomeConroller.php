<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use App\Models\Menufacture;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HomeConroller extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }


    public function dashboard()
    {

        return view('backend.dashboard');
    }

    public function login_success(LoginRequest $request)
    {
       $admin_email = $request->admin_email;
       $admin_password = $request->admin_password;

       $result = DB::table('admins')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

        if($result == true)
        {

            return redirect()->route('dashboard');
        }
        else{

            $value = "Email & Password Invailed";

            Session::flash('alert-danger',$value);

            return redirect()->back();
        }
    }

    public function logout()
    {
        Session::flush();

        return redirect()->route('login');
    }
}
