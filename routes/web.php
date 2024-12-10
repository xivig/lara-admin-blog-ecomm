<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
     $title = 'Home page';
    return view('home.content',['title' => $title]);
});
Route::get('/blog', function () {
    return view('blog.blog-content');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/contact', function () {
    return view('home.contact');
});
Route::get('/services', function () {
    return view('home.services');
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
