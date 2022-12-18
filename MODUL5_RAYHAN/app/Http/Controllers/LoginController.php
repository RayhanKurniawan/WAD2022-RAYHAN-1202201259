<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     *
     */
    public function log_index(){
        return view('RegisLogin.Login_Rayhan',[
            'title' => 'Login',
        ]);
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('showrooms');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function reg_index(){
        return view('RegisLogin\Register_Rayhan',[
            'title' => 'Register',
        ]);
    }
    public function reg_stored(Request $request){
        $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'no_hp' => 'string',
            'konfirmasipassword' => 'required_with:password|same:password',
        ]);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => $request->password,
        ]);
        $user->save();
        return redirect('/login')->with('success', 'Registration success. Please login!');
    }
}