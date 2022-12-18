<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function reg_index(){
        return view('RegisLogin\Register_Rayhan',[
            'title' => 'Register',
        ]);
    }
    // public function show(Request $request, $id)
    // {
    //     $value = $request->session()->get('key');
    
    //     //
    // }
    public function reg_stored(Request $request){
        $validatedData = $request->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
            'no_hp' => 'string',
            'konfirmasipassword' => 'required_with:password|same:password',
        ]);
        // session()->regenerate();
        User::create($validatedData);
        // $request = session();
        // $request->flash();
        // $request->session()->flash('status', 'Registrasi Berhasil');
        
        return redirect('/login');
    }

}
