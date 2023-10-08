<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('products', ProductController::class);
});

Route::controller(RegisterController::class)->group(function() {
   Route::post('register', 'register');
   Route::post('login', 'login');
});