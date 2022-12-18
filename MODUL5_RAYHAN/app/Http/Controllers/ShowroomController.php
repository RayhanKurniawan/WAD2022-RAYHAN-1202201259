<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShowroomController extends Controller
{

    public function index()
    {
        $Showrooms=Showroom::orderBy('id','desc')->get();
        return view('Showroom.index', compact('Showrooms'));
    }

    // public function create()
    // {
    //     return view('Showroom.create');
    // }

    // public function store(Request $request){
        
    // }
    public function kirimmobil(Request $request){
        $images = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $images);
        Showroom::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'owner' => $request->owner,
            'brand' => $request->brand,
            'purchase_date' => $request->purchase_date,
            'description' => $request->description,
            'image' => $images,
            'status' => $request->status,
        ]);
        $showroom = showroom::all();
        return view('Showrooms.ListCar_Rayhan', compact('showroom'),[
            'title' => 'Add',
            'nama' => "Rayhan"
        ]);
    }

    public function destroy($id)
    {   

        Showroom::find($id)->delete();

        return redirect('/Showroom');  
    }
}

