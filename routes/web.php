<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Home page';
    return view('home.content', ['title' => $title]);
});
Route::get('/blog', function () {
    return view('blog.blog-content');
});
Route::get('/blog-post/{$slug}', function () {
    $posts = Post::all();
    return view('blog.blog-post',compact('posts'));
})->name('slug');
Route::get('/blog-list', [PostController::class, 'index']);
//Route::get('/blog-list', function () {
//
//    return view('blog.blog-list');
//});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/services', function () {
    return view('home.services');
});
Route::get('/pricing', function () {
    return view('home.pricing');
});
Route::get('/project', function () {
    return view('home.project');
});
//Route::get('/admin-dashboard', function () {
//    return view('user');
//});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


//route group
Route::prefix('dashboard')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth')->name('user-profile');
    Route::get('/inbox', [AuthController::class, 'inbox'])->middleware('auth')->name('user-inbox');
    Route::get('/setting', [AuthController::class, 'setting'])->middleware('auth')->name('user-setting');
});

//if page not found load 404
//Route::fallback(function () {
//    return view('404');
//});
