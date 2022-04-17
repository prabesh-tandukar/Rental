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

Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('homepage');

// Route::get('/submit-property', [PropertyController::class, 'create'])->name('property.create');
// Route::post('submit-property', [PropertyController::class, 'store'])->name('property.store');

// Route::get('property-catelog', [PropertyController::class, 'catelog'])->name('property.catelog');
// Route::get('property-detail/{title}', [PropertyDetailController::class, 'detail'])->name('property.detail');

// Route::get('map', [MapController::class, 'map'])->name('map');

// Route::get('about', [AboutUsController::class, 'about'])->name('about');
// Route::get('contact', [ContactController::class, 'contact'])->name('contact');

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
        Route::get('home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
        Route::get('property', [App\Http\Controllers\User\PropertyController::class, 'index'])->name('property.index');
        Route::get('/submit-property', [App\Http\Controllers\User\PropertyController::class, 'create'])->name('property.create');
        Route::post('submit-property', [App\Http\Controllers\User\PropertyController::class, 'store'])->name('property.store');
        Route::get('property-catelog', [App\Http\Controllers\User\PropertyController::class, 'index'])->name('property.catelog');
        Route::get('property-detail/{title}', [App\Http\Controllers\User\PropertyDetailController::class, 'detail'])->name('property.detail');
        Route::get('map', [App\Http\Controllers\User\MapController::class, 'map'])->name('map');
        Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');

        Route::get('about', [App\Http\Controllers\User\AboutUsController::class, 'about'])->name('about');
        Route::get('contact', [App\Http\Controllers\User\ContactController::class, 'contact'])->name('contact');

        Route::get('tenant', [App\Http\Controllers\User\TenantController::class, 'index'])->name('tenant.index');
        Route::get('tenant/create', [App\Http\Controllers\User\TenantController::class, 'create'])->name('tenant.create');
        Route::post('tenant/create', [App\Http\Controllers\User\TenantController::class, 'store'])->name('tenant.store');
        Route::get('tenant/edit', [App\Http\Controllers\User\TenantController::class, 'edit'])->name('tenant.edit');
        Route::post('tenant/edit', [App\Http\Controllers\User\TenantController::class, 'update'])->name('tenant.update');
        Route::get('tenant/destroy', [App\Http\Controllers\User\TenantController::class, 'destroy'])->name('tenant.destroy');
    });
});

// Route::group([
//     'prefix' => 'user',
//     'as' => 'user.',
// ], function () {
//     Route::get('tenant/create', [App\Http\Controllers\User\TenantController::class, 'create'])->name('tenant.create');
//     Route::post('tenant/create', [App\Http\Controllers\User\TenantController::class, 'store'])->name('tenant.store');
// });


require __DIR__ . '/auth.php';


// Route::prefix('admin')->namespace('App\\Http\\Controllers')->group(function(){

//     Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');

// });

// Route::get('/dashboard', ['Admin/AdminController::class'], 'dashboard')->name('admin.dashboard');
