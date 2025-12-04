<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\GenralController;
use App\Http\Controllers\SLiderController;
use App\Http\Controllers\LandMarksController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

// Route::get('/', function () {
//     return view('layout.lapp');
// });



// routes/web.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/',[App\Http\Controllers\GenralController::class, 'Slider'])->name('welcome');

Route::get('/about',[App\Http\Controllers\GenralController::class, 'about'])->name('about');
Route::get('/contact',[App\Http\Controllers\GenralController::class, 'contact'])->name('contact');
Route::get('/gallery',[App\Http\Controllers\GenralController::class, 'gallery'])->name('gallery');
Route::get('/service',[App\Http\Controllers\GenralController::class, 'service'])->name('service');



Route::resource('Store',App\Http\Controllers\StoreController::class);
Route::resource('sliders',App\Http\Controllers\SLiderController::class);
Route::resource('landmarks',App\Http\Controllers\LandMarksController::class);
Route::resource('comment',App\Http\Controllers\CommentController::class);
Route::resource('gallery',App\Http\Controllers\GalleryController::class);
Route::resource('stores',App\Http\Controllers\StoreController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
});



