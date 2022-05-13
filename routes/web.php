<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\ForumController2;
use App\Http\Controllers\HelpController;
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
    Route::get('/forumlog/create',[ForumController2::class,'create'])->name('forumlog.create');
    Route::get('/forumlog/{categoria}',[ForumController2::class,'show'])->name('forumlog.show');
    Route::get('/forumlog/{categoria}/{id}',[ForumController2::class,'item'])->name('forumlog.item');
    Route::post('/forumlog/store/{user_id}',[ForumController2::class,'store'])->name('forumlog.store');
    Route::post('/forumlog/edit/{user_id}/{forum_id}',[ForumController2::class,'edit'])->name('forumlog.edit');
    Route::put('/forumlog/update/{forum}',[ForumController2::class,'update'])->name('forumlog.update');
    Route::post('/forumlog/reply/{user_id}/{forum}',[ForumController2::class,'reply'])->name('forumlog.reply');

    // Route::get('/resourceslog',function(){
    //     return "Recursos";
    // })->name('resourceslog');
    Route::get('/resources2', [ResourceController::class,'index'])->name('resourceslog');
    Route::get('/resources2/{tipo}', [ResourceController::class,'show'])->name('resources.show');
    Route::get('/resources2/create', [ResourceController::class,'create'])->name('resources.create');
    Route::post('/resources2/store/{user_id}', [ResourceController::class,'store'])->name('resources.store');
    
    // Route::get('/helplog',function(){
    //     return "Ayuda";
    // })->name('helplog');
    Route::get('/helplog', [HelpController::class,'index'])->name('helplog.index');
    Route::get('/helplog/rules', [HelpController::class,'rules'])->name('helplog.rules');
    Route::get('/helplog/steps', [HelpController::class,'steps'])->name('helplog.steps');
});


//Routes for resources
// Route::get('/resources2', [ResourceController::class,'index'])->name('resources.index');
// Route::post('/resources2/create', [ResourceController::class,'create'])->name('resources.create');
// Route::get('/resources2/store', [ResourceController::class,'store'])->name('resources.store');

