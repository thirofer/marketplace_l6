<?php

use Illuminate\Support\Facades\Route;


Route::get('/model', function(){


    return \App\Models\User::all();

});



Route::group(['middleware'=>['auth']], function(){

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){


        Route::resource('stores', '\\App\\Http\\Controllers\\Admin\\StoreController');
        Route::resource('products', '\\App\\Http\\Controllers\\Admin\\ProductController');
        Route::resource('categories', '\\App\\Http\\Controllers\\Admin\\CategoryController');

        Route::post('photos/remove', '\\App\\Http\\Controllers\\Admin\\ProductPhotoController@removePhoto')->name('photo.remove');


    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
