<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/model', function(){

//    $products = \App\Models\Product::all(); //select * from products

//    $user = new \App\Models\User();
//    $user   = \App\Models\User::find(41);

//    $user -> name = 'TESTEZAO';
//    $user->save();




// Mass Assignment = Atribuição em massa
//        $user = \App\Models\User::create([
//        'name' => 'Thiago Rodrigues',
//        'email' => 'thirofer@gmail.com',
//        'password' => bcrypt('123345566')
//    ]);

//    return $products;

    //Mass Update
//    $user = \App\Models\User::find(41);
//    $user->update([
//       'email' => 'thinforj@gmail.com'
//    ]);
//
//    dd($user);
//
//    $user = \App\Models\User::find(25);
//    return $user->store;
//
//    return \App\Models\User::all() ;

//    $loja = \App\Models\Store::find(1);
//    return $loja->products;
//    $loja->products()->where('id', 1)->get();

//    $categoria = \App\Models\Category::find(1);
//    $categoria ->products;


//    $user= \App\Models\User::find(10);
//    $store = $user->store()->create([
//        'name'=>'Loja THINFORJ',
//        'description' => 'Loja de teste para PDVs, trazendo soluções em tecnologia para você!',
//        'mobile_phone' => '21998919772',
//        'phone'=> '21998919772',
//        'slug'=>'loja-thinforj'
//    ]);

//    $store= \App\Models\Store::find(10);
//    $product = $store->products()->create([
//        'name' => 'Sistemas integrados' ,
//        'description' => 'Elaboração de sistemas prontos para web, acessados de qualquer dispositivo, em qualquer lugar.',
//        'body' => 'Sistemas completos' ,
//        'price' => 3500.50,
//        'slug' => 'sistemas-integrados',
//    ]);

//    \App\Models\Category::create([
//       'name' => 'Sistema PDV',
//        'description' => 'Tipo de sistema de PDV',
//        'slug' => 'sistema-pdv'
//    ]);
//
//    $product= \App\Models\Product::find(40);
//    $product->categories()->detach([1]);


    return \App\Models\User::all();

});



Route::group(['middleware'=>['auth']], function(){

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function(){

//        Route::prefix('stores')->name('stores.')->group(function() {

//        Route::get('/', '\\App\\Http\\Controllers\\Admin\\StoreController@index')->name('index');
//        Route::get('/create', '\\App\\Http\\Controllers\\Admin\\StoreController@create')->name('create');
//        Route::post('/store', '\\App\\Http\\Controllers\\Admin\\StoreController@store')->name('store');
//        Route::get('/{store}/edit', '\\App\\Http\\Controllers\\Admin\\StoreController@edit')->name('edit');
//        Route::post('/update/{store}', '\\App\\Http\\Controllers\\Admin\\StoreController@update')->name('update');
//        Route::get('/destroy/{store}','\\App\\Http\\Controllers\\Admin\\StoreController@destroy')->name('destroy');
//
//        });
        Route::resource('stores', '\\App\\Http\\Controllers\\Admin\\StoreController');
        Route::resource('products', '\\App\\Http\\Controllers\\Admin\\ProductController');
        Route::resource('categories', '\\App\\Http\\Controllers\\Admin\\CategoryController');

        Route::post('photos/remove', '\\App\\Http\\Controllers\\Admin\\ProductPhotoController@removePhoto')->name('photo.remove');


    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
