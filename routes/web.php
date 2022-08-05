<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/commission', [HomeController::class, 'commission']);
Route::get('/commission/detail/{id}', [DetailController::class, 'detailhasil2']);
Route::get('/detail/{id}', [HomeController::class, 'detailhasil']);