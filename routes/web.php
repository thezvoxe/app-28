<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', function () {
    return view('admin');
});





Route::get('/index2', function () {
    return view('index2');
});




Route::get('/tambahkategori', function () {
    return view('tambahkategori');
});
Route::get('/editkategori', function () {
    return view('editkategori');
});
Route::get('/detailkategori', function () {
    return view('detailkategori');
});







Route::get('/user', function () {
    return view('user');
});

Route::get('/kategori', function () {
    return view('posts.index');
});


Route::get('/buku', function () {
    return view('buku');
});

Route::get('/peminjam', function () {
    return view('peminjam');
});


