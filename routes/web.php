<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function (Request $request) {
    // return (new Controller)->index($request);
    return view('login');
})->name('login');

Route::post('/login/auth', function(Request $request){
    return (new AuthController)->login($request);
})->name('auth');

Route::get('/register', function(Request $request){
    return view('register');
})->name('register');

Route::post('/register/create', function(Request $request){
    return (new AuthController)->register($request);
})->name('create_user');