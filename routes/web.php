<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;

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

// INDEX
Route::get('/', [ProductController::class, 'index']);

// DETAILS
Route::get('/product/{id}', [DetailController::class, 'index']);


// LOGIN
Route::get('/login', function () {
    return view('login', ['name' => 'Application']);
});
Route::post('/login', [UserController::class, 'login']);

// LOGOUT
Route::get('/logout', function() {
    Session::forget('user');
    return redirect('/');
});