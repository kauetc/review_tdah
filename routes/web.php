<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\UserController;
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


Route::get('/dashboard', function (Request $request) {
    // return (new Controller)->index($request);
    return view('dashboard');
})->name('dashboard');

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

Route::get('/subcategories', function(Request $request){
    return (new SubCategoriesController)->browse($request);
})->name('subcategories');

Route::get('/categories/create', function(Request $request){
    return (new CategoriesController)->create($request);
})->name('categories_create');

Route::post('/categories/new', function(Request $request){
    return (new CategoriesController)->save($request);
})->name('categories_new');

Route::get('/categories', function(Request $request){
    return (new CategoriesController)->browse($request);

})->name('categories');

Route::get('/categories/{id}', function(Request $request){
    return (new CategoriesController)->browse($request);
})->name('categories_detail');

Route::get('/reviews', function(Request $request){
    return (new ReviewsController)->browse($request);
})->name('reviews');

Route::get('/settings', function(Request $request){
    return (new SettingsController)->browse($request);
})->name('settings');

Route::get('/profile', function(Request $request){
    return (new UserController)->profile($request);
})->name('profile');