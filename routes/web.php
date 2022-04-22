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
    return view('home');
})->name('home');

Route::get('/katalog', function () {
    return view('katalog');
})->name('katalog');

Route::get('/katalog/tovar_{id}', 'App\Http\Controllers\tovarLoadController@tovarLoad');

Route::get('/product_comparison', function(){
    return view('product_comparison');
})->name('p_comparison');

Route::get('/favorites', function(){
    return view('favorites');
})->name('favorites');

Route::post('/basket', function () {
    return view('basket');
})->name('basket');

Route::post('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/register', function () {
    return view('auth.register')->name('register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
