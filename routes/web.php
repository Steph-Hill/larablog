<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;

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
Route::get('/', [PostController::class,"index"])->name('post.index');



Route::middleware(['auth'])->group(function(){

    Route::resource('posts',PostController::class)->except('index');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});



require __DIR__.'/auth.php';
