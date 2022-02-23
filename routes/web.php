<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;

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

// PRAKTIKUM 1 ------------------------------------------------------------

// Route::get('/', function () {
//     return 'Hi! Selamat Datang di Website Laravel';
// });

// Route::get('/about', function () {
//     return 'NIM : 2041720016 <br> Nama : Atmayanti <br> Kelas : TI 2G';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Ini adalah halaman Artikel dengan ID : '.$id;
// });


// PRAKTIKUM 2.1 ------------------------------------------------------------

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);


// PRAKTIKUM 2.2 ------------------------------------------------------------

// Route::get('/', [HomeController::class, 'index']);

// Route::get('/about', [AboutController::class, 'index']);

// Route::get('/articles/{id}', [ArticleController::class, 'index']);


// PRAKTIKUM 3 ------------------------------------------------------------

Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group( function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/marble-edu-games', [CategoryController::class, 'marble_edu_games']);
    Route::get('/marble-and-friends-kids-games', [CategoryController::class, 'marble_and_friends_kids_games']);
    Route::get('/riri-story-books', [CategoryController::class, 'riri_story_books']);
    Route::get('/kolak-kids-songs', [CategoryController::class, 'kolak_kids_songs']);
});

Route::prefix('news')->group( function () {
    Route::get('/', [NewsController::class, 'index']);
    Route::get('/{slug}', [NewsController::class, 'new']);
});

Route::prefix('program')->group( function () {
    Route::get('/', [ProgramController::class, 'index']);
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan_industri']);
});

Route::get('/about-us', [AboutController::class, 'index']);
