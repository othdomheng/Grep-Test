<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }

    public function register()
    {
        return view('Auth.register');
    }

    public function registerStore(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|min:9|max:25|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
    }

    public function loginPost(Request $request)
    {
        $this->validate($request, [
            'email_phone' => 'required',
            'password' => 'required|min:6'
        ]);
        $inputType = is_numeric($request->email_phone) ? 'phone' : 'email';
        if (Auth::attempt([$inputType => $request->email_phone, 'password' => $request->password])) {
            return redirect()->route('success');
        }
        return redirect()->route('login')->with('error', 'Email-Address or Password Are Wrong, Please Login again!');
    }

    public function success()
    {
        return view('success');
    }
}
