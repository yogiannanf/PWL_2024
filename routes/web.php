<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
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

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

// Route::get('/about', function () {
//     return 'Nama : Yogianna Nur Febrianti, Nim  : 2241720261';
// });

Route::get('/user/{yogianna}', function ($name) {
    return 'Nama saya '.$name;
});
    
Route::get('/posts/{post1}/comments/{comment5}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '.$id;
// });

// Route::get('/user/{yogianna?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'about']);

Route::get('/articles/{id}', [ArticleController::class,'articles']);

use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Yogianna Nur Febrianti']);
// });

Route::get('/greeting', [WelcomeController::class, 'greeting']);