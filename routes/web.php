<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ResellerController;
use Illuminate\Support\Facades\Route;

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
//

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);

Route::post('/store', [UserController::class, 'store']);


Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/reseller', [ResellerController::class, 'index']);
Route::get('/reseller/add', [ResellerController::class, 'addreseller']);
Route::get('/reseller/register', [UserController::class, 'register']);


