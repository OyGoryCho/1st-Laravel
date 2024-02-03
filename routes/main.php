<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
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

Route::view('/', 'welcome')->name('home');

Route::redirect('/home', '/');
Route::middleware('guest')->group(function(){      //накладывает на всех в группе app/http/kernel.php -> 'guest'
    Route::get('register', [AuthController::class, 'index'])->name('register');
    Route::post('register', [AuthController::class, 'store'])->name('register.store');
    
    Route::get('login', [AuthController::class, 'index'])->name('login')->withoutMiddleware('guest');
    Route::post('login', [AuthController::class, 'store'])->name('login.store');
});



Route::get('/test', TestController::class)->name('test')->middleware(LogMiddleware::class);     //$ php artisan make:controller TestController

Route::get('blog', [BlogController::class, 'index'])->name('blog');
Route::get('blog/{post}', [BlogController::class, 'show'])->name('blog.show');



//CRUD (create, read, update, delete)

//route::fallback() если не нашлось ничего 