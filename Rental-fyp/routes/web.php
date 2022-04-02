<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PropertyDetailController;

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

Route::get('/', [HomeController::class, 'home'])->name('homepage');

Route::get('/submit-property', [PropertyController::class, 'create'])->name('property.create');
Route::post('submit-property', [PropertyController::class, 'store'])->name('property.store');

Route::get('property-catelog', [PropertyController::class, 'catelog'])->name('property.catelog');
Route::get('property-detail/{id}', [PropertyDetailController::class, 'detail'])->name('property.detail');

Route::get('about-us', [AboutUsController::class, 'aboutUs'])->name('about-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('admin')->namespace('App\\Http\\Controllers')->group(function(){

    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');

});

// Route::get('/dashboard', ['Admin/AdminController::class'], 'dashboard')->name('admin.dashboard');
