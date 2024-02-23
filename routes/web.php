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

Route::get('/', function () {
    return view('Selamat Datang');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'Nama : Yogianna Nur Febrianti, Nim  : 2241720261';
});

Route::get('/user/{yogianna}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post1}/comments/{comment5}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{articcle27}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});

// Route::get('/user/{yogianna?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

