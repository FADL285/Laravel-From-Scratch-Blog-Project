<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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

//Route::redirect('/', '/posts');
Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('posts/{post}', [PostController::class, 'show'])->name('post');
Route::post('posts/{post}/comments', [
    PostCommentsController::class,
    'store'
])
    ->name('comments')
    ->middleware('auth');

Route::group(['middleware' => 'guest'], function () {
    Route::get('register', [RegisterController::class, 'create'])->name(
        'register'
    );
    Route::post('register', [RegisterController::class, 'store']);

    Route::get('login', [SessionsController::class, 'create'])->name('login');
    Route::post('login', [SessionsController::class, 'store'])->name('login');
});

Route::post('logout', [SessionsController::class, 'destroy'])
    ->name('logout')
    ->middleware('auth');

Route::post('newsletter', NewsletterController::class)->name('newsletter');

// Admin
Route::group(['middleware' => 'can:admin', 'prefix' => 'admin'], function () {
    Route::redirect('/', 'posts');
    Route::resource('posts', AdminController::class)->except('show');
});
