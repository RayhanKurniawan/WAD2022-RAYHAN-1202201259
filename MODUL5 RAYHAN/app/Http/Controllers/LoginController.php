<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    public function log_stored(Request $request)
    {
        $credentials=$request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
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
            // 'konfirmasipassword' => 'min:6'
            // 'no_hp'=>'numeric',
        ]);
        // session()->regenerate();
        // User::create($validatedData);
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => $request->password,
        ]);
        $user->save();
        return redirect('/login')->with('success', 'Registration success. Please login!');
    }
        public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
        }
}
