<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowroomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('RegisLogin.Index_Rayhan');
});

// Route::get('/login', function () {
//     return view('RegisLogin.Login_Rayhan');
// });

Route::get('/login',[LoginController::class, 'log_index']);
Route::post('/login',[LoginController::class, 'login']);

Route::get('/register',[LoginController::class, 'reg_index']);
Route::post('/register', [LoginController::class, 'reg_stored']);

Route::get('/add', function () {
    return view('Showrooms.Add_Rayhan',[
        'title' => "Add Car",
        'nama' => "Rayhan",
    ]);
});
Route::get('/detail', function () {
    return view('Showrooms.Detail_Rayhan',[
        'title' => "Car Detail",
        'nama' => "Rayhan",
    ]);
});
Route::get('/edit', function () {
    return view('Showrooms.Edit_Rayhan',[
        'title' => "Edit Car",
        'nama' => "Rayhan",
    ]);
});
Route::get('/listcar', function () {
    return view('Showrooms.ListCar_Rayhan',[
        'title' => "List Car",
        'nama' => "Rayhan",
    ]);
});
Route::get('/home', function () {
    return view('Showrooms.Home_Rayhan',[
        'title' => "Home",
        'nama' => "Rayhan",
    ]);
});
Route::get('/profile', function () {
    return view('Showrooms.Profile_Rayhan',[
        'title' => "User Profile",
        'nama' => "Rayhan",
    ]);
});
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('tambah', [ShowroomController::class, 'create']);
Route::post('tambahmobil', [ShowroomController::class, 'kirimmobil']);

