<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;
use App\Http\Middleware;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/table', function () {
    return view('dashboard.table');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
     return view('auth/register');
});

Route::post('/register', [AuthController::class, 'registerSave']);
Route::post('/login', [AuthController::class, 'dologin']);

Route::resource('products', ProductController::class);
    


//Route::resource('products', [ProductController::class])name->();

//Route::resource('/dashboard',\App\Http\BukuController::class);


 //Route::middleware([AuthController::class])->group( function () {
  // Route::get('register', 'register')->name('register');
   // Route::post('register','registerSave')->name('register.save');
//});

    //Route::get('login', 'login')->name('login');
    //Route::post('login','loginAction')->name('login.action');




