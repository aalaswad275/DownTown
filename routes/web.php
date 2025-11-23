<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\GenralController;
use App\Http\Controllers\SLiderController;
use App\Http\Controllers\LandMarksController;
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

Route::get('/',[App\Http\Controllers\GenralController::class, 'Slider'])->name('slider');
// Route::get('/', [App\Http\Controllers\GenralController::class, 'slider'])->name('slider');

Route::get('/admin', function () {
    return view('layout.backapp');
});

Route::resource('Store',App\Http\Controllers\StoreController::class);
Route::resource('sliders',App\Http\Controllers\SLiderController::class);
Route::resource('landmarks',App\Http\Controllers\LandMarksController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
