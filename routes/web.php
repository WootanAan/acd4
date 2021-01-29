<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
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

Route::get('/', function () {
	echo "Aan suseno";
    // return view('welcome');
});

Route::get('/home', function () {
	echo "ini home";
});

// Route kategori
Route::resource('/categories', CategoryController::class);

// Route products
Route::resource('/products', ProductController::class);

//Route supliers
Route::resource('/suppliers', SupplierController::class);