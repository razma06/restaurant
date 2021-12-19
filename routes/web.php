<?php

use App\Http\Controllers\MenuController;
use App\Models\Menu;
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

Route::get('/', [MenuController::class, 'home']);

Route::get('/product', [MenuController::class, 'product']);

Route::get('/category/{name}', [MenuController::class, 'category']);

Route::resource('/admin', MenuController::class);