<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PropertyDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Admin\HomeController;

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
Route::get('property-detail/{title}', [PropertyDetailController::class, 'detail'])->name('property.detail');

Route::get('map', [MapController::class, 'map'])->name('map');

Route::get('about', [AboutUsController::class, 'about'])->name('about');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin',
        'as' => 'admin.',
    ], function () {
        Route::get('home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home.index');
    });


    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function () {
        Route::get('property', [App\Http\Controllers\User\PropertyController::class, 'index'])->name('property.index');
        Route::get('/submit-property', [PropertyController::class, 'create'])->name('property.create');
        Route::post('submit-property', [PropertyController::class, 'store'])->name('property.store');
        Route::get('property-catelog', [PropertyController::class, 'catelog'])->name('property.catelog');
        Route::get('property-detail/{title}', [PropertyDetailController::class, 'detail'])->name('property.detail');
        Route::get('map', [MapController::class, 'map'])->name('map');
    });
});


require __DIR__ . '/auth.php';


// Route::prefix('admin')->namespace('App\\Http\\Controllers')->group(function(){

//     Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');

// });

// Route::get('/dashboard', ['Admin/AdminController::class'], 'dashboard')->name('admin.dashboard');
