<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutosController;
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
    return redirect('/clients');
});

Route::resource('/clients', ClientsController::class)->except(['show']);
Route::resource('/products', ProdutosController::class)->except(['show']); 
Route::resource('/purchases', PedidosController::class);
