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

        Route::get('property', [App\Http\Controllers\Admin\PropertyController::class, 'index'])->name('property.index');
        Route::get('approve/{id}', [App\Http\Controllers\Admin\PropertyController::class, 'approve'])->name('property.approve');
        Route::put('approve/update/{$id}', [App\Http\Controllers\Admin\PropertyController::class, 'update'])->name('property.update');

        Route::get('aboutus', [App\Http\Controllers\Admin\AboutUsController::class, 'index'])->name('aboutUs.index');
        Route::get('aboutus/create', [App\Http\Controllers\Admin\AboutUsController::class, 'create'])->name('aboutUs.create');
        Route::post('aboutus/create', [App\Http\Controllers\Admin\AboutUsController::class, 'store'])->name('aboutUs.store');
        Route::get('aboutus/{about}/edit', [App\Http\Controllers\Admin\AboutUsController::class, 'edit'])->name('aboutUs.edit');
        Route::put('aboutus/{about}/edit', [App\Http\Controllers\Admin\AboutUsController::class, 'update'])->name('aboutUs.update');
        Route::delete('aboutus/{about}', [App\Http\Controllers\Admin\AboutUsController::class, 'destroy'])->name('aboutUs.destroy');

        Route::get('contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact.index');
    });


    Route::group([
        'prefix' => 'user',
        'as' => 'user.',
    ], function () {
        Route::get('home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');

        Route::get('property', [App\Http\Controllers\User\PropertyController::class, 'index'])->name('property.index');
        Route::get('property/create', [App\Http\Controllers\User\PropertyController::class, 'create'])->name('property.create');
        Route::post('property/create', [App\Http\Controllers\User\PropertyController::class, 'store'])->name('property.store');
        Route::get('property/{property}/edit', [App\Http\Controllers\User\PropertyController::class, 'edit'])->name('property.edit');
        Route::put('property/{property}/edit', [App\Http\Controllers\User\PropertyController::class, 'update'])->name('property.update');
        Route::delete('/property/{about}', [App\Http\Controllers\Admin\AboutUsController::class, 'destroy'])->name('property.destroy');
        

        Route::get('property-catalog', [App\Http\Controllers\User\PropertyController::class, 'index'])->name('property.catalog');
        Route::get('/search', [App\Http\Controllers\User\PropertyController::class, 'search'])->name('search');
        Route::get('submission', [App\Http\Controllers\User\PropertyController::class, 'submission'])->name('submission');

        Route::get('property-detail/{id}', [App\Http\Controllers\User\PropertyDetailController::class, 'index'])->name('property.detail');

        Route::get('map', [App\Http\Controllers\User\MapController::class, 'map'])->name('map');

        Route::get('dashboard', [App\Http\Controllers\User\DashboardController::class, 'index'])->name('dashboard');

        Route::get('about', [App\Http\Controllers\User\AboutUsController::class, 'about'])->name('about');

        Route::get('contact', [App\Http\Controllers\User\ContactController::class, 'create'])->name('contact');
        Route::post('contact', [App\Http\Controllers\User\ContactController::class, 'store'])->name('contact.store');

        Route::get('tenant', [App\Http\Controllers\User\TenantController::class, 'index'])->name('tenant.index');
        Route::get('tenant/create', [App\Http\Controllers\User\TenantController::class, 'create'])->name('tenant.create');
        Route::post('tenant/create', [App\Http\Controllers\User\TenantController::class, 'store'])->name('tenant.store');
        Route::get('tenant/edit', [App\Http\Controllers\User\TenantController::class, 'edit'])->name('tenant.edit');
        Route::post('tenant/edit', [App\Http\Controllers\User\TenantController::class, 'update'])->name('tenant.update');
        Route::post('tenant/destroy', [App\Http\Controllers\User\TenantController::class, 'destroy'])->name('tenant.destroy');

        Route::get('payment', [App\Http\Controllers\User\PaymentController::class, 'payment'])->name('payment');
        Route::post('khalti/verify', [App\Http\Controllers\User\PaymentController::class, 'verify'])->name('ajax.khalti.verify_payment');
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
