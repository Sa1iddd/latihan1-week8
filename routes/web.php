<?php

use Illuminate\Support\Facades\Route;

// Route untuk Signin dan Signup
Route::get('/signin', function () {
    return view('auth.signin'); // Ganti dengan path view form signin
})->name('signin');

Route::post('/signin', function () {
    // Logic untuk memproses data signin
})->name('signin.process');

Route::get('/signup', function () {
    return view('auth.signup'); // Ganti dengan path view form signup
})->name('signup');

Route::post('/signup', function () {
    // Logic untuk memproses data signup
})->name('signup.process');

// Route untuk Home
Route::get('/', function () {
    return view('home'); // Ganti dengan path view halaman utama
})->name('home');

// Route untuk Blog
Route::get('/blog', function () {
    return view('blog.index'); // Ganti dengan path view daftar artikel blog
})->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('blog.detail', ['slug' => $slug]); // Ganti dengan path view detail artikel
})->name('blog.detail');

// Route untuk Category
Route::get('/category/{slug}', function ($slug) {
    return view('category.index', ['slug' => $slug]); // Ganti dengan path view artikel kategori
})->name('category.index');

// Route untuk Author
Route::get('/author/{username}', function ($username) {
    return view('author.index', ['username' => $username]); // Ganti dengan path view artikel penulis
})->name('author.index');

// Route untuk Privacy Policy
Route::get('/privacy-policy', function () {
    return view('privacy-policy'); // Ganti dengan path view halaman kebijakan privasi
})->name('privacy-policy');
