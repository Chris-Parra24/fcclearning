<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ForumController2;
use App\Http\Controllers\HomeController;
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


Route::get('/', HomeController::class)->name('home');
Route::get('/forum', [ForumController::class,'index'])->name('forum.index');
Route::get('/forum/{categoria}', [ForumController::class,'show'])->name('forum.show');
Route::get('/forum/{categoria}/{id}', [ForumController::class,'show_item'])->name('forum.show.item');
// Route::get('/', function () {
//     return view('inicio.home');
// })->name('home');

// Route::get('/forum',function(){
//     return view('inicio.forum');
// })->name('forum');

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
    
    Route::get('/forumlog',[ForumController2::class,'index'])->name('forumlog');

    Route::get('/forumlog/{categoria}',[ForumController2::class,'show'])->name('forumlog.show');
    Route::get('/forumlog/{categoria}/{id}',[ForumController2::class,'item'])->name('forumlog.item');

    Route::get('/resourceslog',function(){
        return "Recursos";
    })->name('resourceslog');

    Route::get('/helplog',function(){
        return "Ayuda";
    })->name('helplog');
});
