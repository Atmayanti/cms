<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// // PRAKTIKUM 1

// Route::get('/', function () {
//     return 'Hi! Selamat Datang di Website Laravel';
// });

// Route::get('/about', function () {
//     return 'NIM : 2041720016 <br> Nama : Atmayanti <br> Kelas : TI 2G';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Ini adalah halaman Artikel dengan ID : '.$id;
// });


// PRAKTIKUM 2

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);