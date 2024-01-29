<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\posts\CommentController;
use App\Http\Controllers\TestController;
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

Route::view('/', 'welcome');

Route::redirect('/home', '/');

Route::get('/test', TestController::class);     //$ php artisan make:controller TestController


Route::get('posts', [PostController::class, 'index'])->name('posts');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('posts/{photo}', [PostController::class, 'delete'])->name('posts.delete');
Route::put('posts/{post}/like', [PostController::class, 'like'])->name('posts.like');

Route::resource('posts/{post}/comments', CommentController::class); //Автоматически создает все вышеперечисленное





//CRUD (create, read, update, delete)

//route::fallback() если не нашлось ничего 