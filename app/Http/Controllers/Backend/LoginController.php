<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index',[
            'tittle' => 'Login',
        ]);
    }

    public function authenticate()
    {
        // dd('dsfdfd');
        $credential = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $remember_me = request()->has('remember_me');




        if(Auth::attempt($credential,$remember_me))
        {
            // dd('login success !!!');
            if(!Auth::user()->is_active) {
                Auth::logout();
                return back()->with('LoginError', 'Your account is inactive !!!');
            }
            request()->session()->regenerate();

            return redirect()->intended('/dashboard');

        } else {
            return back()->with('LoginError', 'Login Failed !!!');
        }

        return back()->with('LoginError', 'Login Failed !!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin');
    }
}
