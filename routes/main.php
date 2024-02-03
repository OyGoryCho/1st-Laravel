<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\LogMiddleware;
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

Route::view('/', 'home.index')->name('home');

Route::redirect('/home', '/');
Route::middleware('guest')->group(function(){      //накладывает на всех в группе app/http/kernel.php -> 'guest'
    Route::get('register', [RegisterController::class, 'index'])->name('register');
    Route::post('register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('login', [LoginController::class, 'index'])->name('login')->withoutMiddleware('guest');
    Route::post('login', [LoginController::class, 'store'])->name('login.store');
});



Route::get('/test', TestController::class)->name('test')->middleware(LogMiddleware::class);     //$ php artisan make:controller TestController

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');



//CRUD (create, read, update, delete)

//route::fallback() если не нашлось ничего 