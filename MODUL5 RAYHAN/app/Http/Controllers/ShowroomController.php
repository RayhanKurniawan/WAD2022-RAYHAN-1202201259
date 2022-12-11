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

    public function create()
    {
        return view('Showroom.create');
    }

    public function store(Request $request)
    {

    }
    public function reg_stored(Request $request){
        $request->validate([
            'name' => 'string',
            'owner' => 'string',
            'brand' => 'string',
            'purchase_date' => 'datetime',
            'description' => 'text',
            'image' => 'string',
            'status' => 'enum',
        ]);
        
        $Showroom = new Showroom([
            'name' => $request->name,
            'owner' => $request->owner,
            'brand' => $request->brand,
            'datetime' => $request->datetime,
            'description' => $request->description,
            'image' => $request->image,
            'status' => $request->status,
        ]);
        $Showroom->save();

        return redirect('/Showroom');
    }

    public function destroy($id)
    {   

        Showroom::find($id)->delete();

        return redirect('/Showroom');  
    }
}
