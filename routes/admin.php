<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\posts\CommentController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['active', 'is.admin'])->group(function(){
    Route::redirect('/', '/admin/posts')->name('admin');   
    Route::get('posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('posts/{post}', [PostController::class, 'show'])->name('admin.posts.show');
    Route::get('posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
    Route::delete('posts/{photo}', [PostController::class, 'delete'])->name('admin.posts.delete');
    Route::put('posts/{post}/like', [PostController::class, 'like'])->name('admin.posts.like');

Route::resource('posts/{post}/comments', CommentController::class); //Автоматически создает все вышеперечисленное

});
