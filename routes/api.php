<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('userprofile', [AuthController::class, 'userprofile']);

    Route::get('/posts', [PostController::class, 'index'])->name('allposts');
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::get('/posts/create', function () {
        return view('posts.create');
    });
    Route::get('/posts/{post}/edit', function (App\Models\Post $post) {
        return view('posts.edit', compact('post'));
    });
    Route::put('/posts/{post}', [PostController::class, 'update']);
    Route::delete('/posts/{post}', [PostController::class, 'destroy']);

    Route::post('/comments', [CommentController::class, 'store']);
    Route::get('/comments/{comment}/edit', function (App\Models\Comment $comment) {
        return view('comments.edit', compact('comment')); });
    Route::put('/comments/{comment}', [CommentController::class, 'update']);
    Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
});