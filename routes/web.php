<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use GuzzleHttp\Client;
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
    return view('welcome');
});

Route::get('/helloworld', function () {
    echo "<h1>Hello World!</h1>";
});

Route::get('/helloworld/{name}/{email?}', function ($name, $email = null){
    echo "<h1> Olá $name </h1>";
    echo "<h1> email: $email </h1>";
})->where('name', '[A-Za-z]+');

Route::get('/helloworld/{name}/{email?}', function ($name, $email = null){
    echo "<h1> Olá $name </h1>";
    echo "<h1> email: $email </h1>";
})->name('ola');


Route::get("/users", [UsersController::class, 'index']);
Route::get("/products", [ProductController::class, 'index']);
Route::get("/product/add/{produto}", [ProductController::class, 'addProduct']);
Route::get("/request", [ClientController::class, 'store']);

// Route::get('/product', function(){
//     return view('product');
// });
