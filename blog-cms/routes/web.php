<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
