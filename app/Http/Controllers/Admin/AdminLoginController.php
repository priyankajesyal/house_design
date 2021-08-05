<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin:admin')->except(['create','logout']);
    }

    public function create()
    {
        return view('admin.login.create');
    }

    public function login(Request $request)
    {
        $input = $request->all();
        //  dd($request->all());
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = array('email' => $input['email'], 'password' => $input['password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            //    dd(Auth::guard('admin')->user());
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('admin.login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }


    public function logout()
    {
        //   dd(Auth::guard('admin')->user());
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}