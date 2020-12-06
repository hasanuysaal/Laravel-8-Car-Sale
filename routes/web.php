<?php

use App\Http\Controllers\HomeController;
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

/*
Route::get('/', function () {
    return view('welcome');
})->name("laravel");
*/

Route::get('/', function () {
    return view('home.index');
});

Route::redirect('/anasayfa', '/home');


//Route::get('/home', [HomeController::class, 'index']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->name("test");;
Route::get('/about', [HomeController::class, 'aboutus'])->name("aboutus");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
