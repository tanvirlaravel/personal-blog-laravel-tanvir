<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/", [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::get("posts/{posts}", [PostController::class, 'show'])->name('posts.show');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');

Route::get('posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('posts/{id}/', [PostController::class, 'update'])->name('posts.update');
