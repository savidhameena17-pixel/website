<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', [AuthController::class, 'contact']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');
?>
