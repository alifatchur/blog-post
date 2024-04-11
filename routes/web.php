<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostAdminController;
use App\Http\Controllers\PostController;
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
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);

Route::get('/', function () {
    return redirect('posts');
});

// USER
Route::resource('posts', PostController::class);
// ADMIN
// Dashboard
Route::get('index', function () { return view('auth.admin.index'); } )->name('index');
// Posts
Route::resource('data-posts', PostAdminController::class);
Route::get('data-posts-edit/{id}', [PostAdminController::class, 'edit'])->name('data-posts-edit');
// Route::get('data-posts-edit', function () { return view('auth.admin.data-post-edit'); } )->name('data-posts-edit');
