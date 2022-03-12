<?php

Route::prefix('admin')->group(function(){

    Route::get('/dashboard', 'Admin\AdminController@dashboard')->name('admin.dashboard');

});