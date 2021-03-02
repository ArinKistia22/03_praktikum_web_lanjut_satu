<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\productController;
use App\Http\Controllers\programController;
use Illuminate\Support\Facades\View;

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
Route::get('/home',[homeController::class, 'home']);

Route::prefix('product')->group(function () {
    Route::get('/marbel-edu-games', [productController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [productController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [productController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [productController::class, 'kolakkidssongs']);
});


Route::get('news', [newsController::class,'news']);
Route::get('news/{String}', [newsController::class,'newsString'] );

Route::prefix('program')->group(function () {
    Route::get('/karir', [programController::class, 'karir']);
    Route::get('/magang', [programController::class, 'magang']);
    Route::get('/kunjungan-industri', [programController::class, 'kunjunganindustri']);
});

Route::get('/about-us', [aboutController::class, 'aboutus'] );

Route::get('/contact-us', [contactController::class, 'contactus'] );
