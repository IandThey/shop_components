<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/katalog', function(){
    return view('katalog');
})->name('katalog');

Route::get('/about_company', function(){
    return view('about_company');
})->name('about_company');

Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');

Route::get('/login', function(){
    if(session('login')){
        return redirect()->route('home');
    }
    return view('login');
})->name('login');

Route::post('/login', 'App\Http\Controllers\registerController@login_form');

Route::get('/register', function(){
    if(session('login')){
        return redirect()->route('home');
    }
    return view('register');
})->name('register');

Route::post('/register', 'App\Http\Controllers\registerController@register_form');

Route::get('/profile', 'App\Http\Controllers\profileController@profileLoad')->name('profile');

Route::get('/katalog', 'App\Http\Controllers\katalogController@directory_call_go')->name('katalog');

Route::get('/katalog/{type}', 'App\Http\Controllers\tovarsController@Unloading_go');

Route::get('/katalog/tovars/{id}','App\Http\Controllers\tovarController@G_tovar');

Route::get('/p_comparison', function(){
    return view('p_comparison');
})->name('p_comparison');

Route::get('/favorites', function(){
    return view('favorites');
})->name('favorites');

Route::get('/buy_add/tovar/{id}','App\Http\Controllers\buyController@buy');

Route::get('/remove','App\Http\Controllers\removeController@remove');

Route::get('/remove/bascet', 'App\Http\Controllers\removeController@remove_bascet');

Route::get('/zakaz','App\Http\Controllers\zakazController@zakaz');

Route::get('/zakazs','App\Http\Controllers\zakazsController@load_zakazs')->name('zakazs');