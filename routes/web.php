<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
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

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [UserController::class, 'login']);  //login post

Route::get('/', [ProductController::class, 'index']);  //product page
Route::get('detail/{id}', [ProductController::class, 'productDetail']); //detail page

Route::post('/add_to_cart', [ProductController::class, 'addToCart']);

Route::get('/logout', function(){
    Session::forget('user');
return redirect('login');
});

Route::get('/cartlist', [ProductController::class, 'mycartlist']);