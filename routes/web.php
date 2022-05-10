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
    return view('inicio.home');
})->name('home');

Route::get('/forum',function(){
    return view('inicio.forum');
})->name('forum');

Route::get('/about',function(){
    return view('inicio.about');
})->name('about');

Route::get('/resources',function(){
    return view('inicio.means');
})->name('resources');

Route::get('/help',function(){
    return view('inicio.help');
})->name('help');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/forumlog',function(){
        return view('forum.forumlog');
    })->name('forumlog');
});
