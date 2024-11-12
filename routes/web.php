<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StoreController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/model', function () {
//    $user = new User();
//    $user->name ='Utilizador Teste';
//    $user->email ='email@teste.com';
//    $user->password =bcrypt('secret');
//    $user->save();

    //Criar uma loja para um user
//    $user = User::find(10);
//    $store = $user->store()->create([
//        'name' => 'Test Store',
//        'description' => 'Test Store of IT products',
//        'mobile_phone' => '93X-XXX-XXX',
//        'slug' => 'Test-Store'
//    ]);
//
//    dd($store);

    // Criar um produto para uma store

    // Criar uma category

    // Adicionar um product para uma category ou vice-versa


//    return User::all();
});

Route::group(['middleware' => ['auth']], function(){
    Route::prefix('admin')->name('admin.')->group(function () {

//    Route::prefix('stores')->name('stores.')->group(function () {
//
//        Route::get('/', [StoreController::class, 'index'])->name('index');
//        Route::get('/create', [StoreController::class, 'create'])->name('create');
//        Route::post('/store', [StoreController::class, 'store'])->name('store');
//
//        Route::get('/{store}/edit', [StoreController::class, 'edit'])->name('edit');
//        Route::post('/update/{store}', [StoreController::class, 'update'])->name('update');
//
//        Route::get('/destroy/{store}', [StoreController::class, 'destroy'])->name('destroy');
//    });

        Route::resource('stores', StoreController::class);
        Route::resource('products', ProductController::class);
    });
});

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
