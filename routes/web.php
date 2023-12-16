<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

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
    return view('website.home');
});

Route::get('about', function () {
        return view('website.about'); 
});
    
Route::get('services', function () {
        return view('website.services'); 
});
Route::get('portfolio', function () {
        return view('website.portfolio'); 
});
Route::get('contact', function () {
        return view('website.contact'); 
});



Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('doLogin', [LoginController::class, 'doLogin'])->name('doLogin');

