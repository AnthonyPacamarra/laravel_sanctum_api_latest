<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::get('logout', [AuthController::class, 'logout']);

Route::view('/', 'homePage')->name('home');

// Route::middleware('auth')->group(function () {
//     Route::view('/', 'homePage')->name('home');

//     Route::get('/posts', [PostController::class, 'index'])->name('allposts');
//     Route::post('/posts', [PostController::class, 'store']);
//     Route::get('/posts/{post}', [PostController::class, 'show']);
//     Route::get('/posts/create', function () {
//         return view('posts.create'); });
//     Route::get('/posts/{post}/edit', function (App\Models\Post $post) {
//         return view('posts.edit', compact('post')); });
//     Route::put('/posts/{post}', [PostController::class, 'update']);
//     Route::delete('/posts/{post}', [PostController::class, 'destroy']);
// });

// Route::post('/comments', [CommentController::class, 'store']);
// Route::get('/comments/{comment}/edit', function(App\Models\Comment $comment) { return view('comments.edit', compact('comment')); });
// Route::put('/comments/{comment}', [CommentController::class, 'update']);
// Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::view('/','homePage')->name('home');

//     // Route::post('comments', [CommentController::class, 'store']);
//     // Route::put('comments/{comment}', [CommentController::class, 'update']);
//     // Route::delete('comments/{comment}', [CommentController::class,
//     // 'destroy']);
// });