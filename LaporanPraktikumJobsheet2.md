# **Laporan Praktikum Jobsheet 02 Routing, Controller dan View**
---

## Nama  : Yogianna Nur Febrianti
## Kelas : TI 2F
## Absen : 27


### **Langkah-langkah Praktikum 1**:

a. Pada bagian ini, kita akan membuat dua buah route dengan ketentuan sebagai berikut.

| No | Http Verb | Url | Fungsi |
|-- |-------|-----|-----|
| 1 | get | /hello | Tampilkan String Hello ke browser.
| 2 | get | /world | Tampilkan String World ke browser.

Kita akan menggunakan project minggu sebelumnya yaitu PWL_2024.

b. Buka file routes/web.php. Tambahkan sebuah route untuk nomor 1 seperti di bawah
ini:
``` php
use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
 return 'Hello World';
});
```
c. Buka browser, tuliskan URL untuk memanggil route tersebut:
localhost/PWL_2024/public/hello. Perhatikan halaman yang muncul apakah sudah
sesuai dan jelaskan pengamatan Anda.

<img src = img/praktikum1c.png>

d. Untuk membuat route kedua, tambahkan route /world seperti di bawah ini:
```php
use Illuminate\Support\Facades\Route;
Route::get('/world', function () {
 return 'World';
});
```
e. Bukalah pada browser, tuliskan URL untuk memanggil route tersebut:
localhost/PWL_2024/public/world. Perhatikan halaman yang muncul apakah sudah
sesuai dan jelaskan pengamatan Anda.

<img src = img/praktikum1e.png>

f. Selanjutnya, cobalah membuat route ’/’ yang menampilkan pesan ‘Selamat Datang’.
```php
Route::get('/', function () {
    return view('Selamat Datang');
});
```

<img src = img/praktikum1f.png>

g. Kemudian buatlah route ‘/about’ yang akan menampilkan NIM dan nama Anda.
```php
Route::get('/about', function () {
 return 'Nama : Yogianna Nur Febrianti, Nim  : 2241720261';
});
```

<img src = img/praktikum1g.png>

### **Langkah-langkah Praktikum 2**:

Untuk membuat routing dengan parameter dapat dilakukan dengan cara berikut ini.

a. Kita akan memanggil route /user/{name} sekaligus mengirimkan parameter berupa nama user $name seperti kode di bawah ini
``` php
    Route::get('/user/{name}', function ($name) {
        return 'Nama saya '.$name;
    });
```
    
b. Jalankan kode dengan menuliskan URL untuk memanggil route tersebut: localhost/PWL_2024/public/user/NamaAnda. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum2b.png>

c. Selanjutnya, coba tuliskan URL: localhost/PWL_2024/public/user/. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum2c.png>

d. Suatu route, juga bisa menerima lebih dari 1 parameter seperti kode berikut ini. Route menerima parameter $postId dan juga $comment.
```php
Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
```
e. Jalankan kode dengan menuliskan URL untuk memanggil route tersebut: localhost/PWL_2024/public/posts/1/comments/5. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikumcodingan2e.png>

<img src = img/praktikum2e.png>

f. Kemudian buatlah route /articles/{id} yang akan menampilkan output “Halaman Artikel dengan ID {id}”, ganti id sesuai dengan input dari url.

<img src = img/praktikumcodingan2f.png>

<img src = img/praktikum2f.png>

### **Langkah-langkah Praktikum 3**:

Untuk membuat routing dengan optional parameter dapat dilakukan dengan cara berikut ini

a. Kita akan memanggil route /user sekaligus mengirimkan parameter berupa nama user $name dimana parameternya bersifat opsional.
```php
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});
```
b. Jalankan kode dengan menuliskan URL: localhost/PWL_2024/public/user/. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum3b.png>

c. Selanjutnya tuliskan URL: localhost/PWL_2024/public/user/NamaAnda. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum3c.png>

d. Ubah kode pada route /user menjadi seperti di bawah ini.
```php
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
```
e. Jalankan kode dengan menuliskan URL: localhost/PWL_2024/public/user/. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.
```php
Route::get('/user/{yogianna?}', function ($name=null) {
    return 'Nama saya '.$name;
});
```
<img src = img/praktikum3e.png>

```php
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});
```
<img src = img/praktikum3eJhon.png>

### **Langkah-langkah Praktikum 4**:

a. Untuk membuat controller pada Laravel telah disediakan perintah untuk menggenerate struktur dasarnya. Kita dapat menggunakan perintah artisan diikuti dengan definisi nama
controller yang akan dibuat. 
```
php artisan make:controller WelcomeController
```
<img src = img/praktikum4a.png>

b. Buka file pada app/Http/Controllers/WelcomeController.php. Struktur pada controller dapat digambarkan sebagai berikut:
```php
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
//
}
```
c. Untuk mendefinisikan action, silahkan tambahkan function dengan access public. 

<img src = img/praktikum4c.png>

d. Setelah sebuah controller telah didefinisikan action, kita dapat menambahkan controller tersebut pada route. Ubah route /hello menjadi seperti berikut:
```php
Route::get(‘/hello’, [WelcomeController::class,’hello’]);
```
<img src = img/praktikum4d1.png>

<img src = img/praktikum4d2.png>

e. Buka browser, tuliskan URL untuk memanggil route tersebut:
localhost/PWL_2024/public/hello. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum4e.png>

f. Modifikasi hasil pada praktikum poin 2 (Routing) dengan konsep controller. Pindahkan logika eksekusi ke dalam controller dengan nama PageController.

| Resource | POST | GET | PUT |DELETE |
|-- |-------|-----|-----| -----|
| / | | Tampilkan Pesan ‘Selamat Datang’ | | |
| | | PageController : index | | |
| /about | | Tampilkan Nama dan NIM | | |
| | | PageController : about | | |
| /articles/{id} | | Tampilkan halaman dinamis ‘Halaman Artikel dengan Id {id}’ id diganti sesuai input dari url | | |
| | | PageController : articles | | |

<img src = img/praktikum4f1.png>

<img src = img/praktikum4f2.png>

<img src = img/praktikum4f3.png>

<img src = img/praktikum4f4.png>

<img src = img/praktikum4f5.png>

g. Modifikasi kembali implementasi sebelumnya dengan konsep Single Action Controller. Sehingga untuk hasil akhir yang didapatkan akan ada HomeController, AboutController dan ArticleController. Modifikasi juga route yang
digunakan.

<img src = img/praktikum4g1.png>

<img src = img/praktikum4g2.png>

<img src = img/praktikum4g3.png>

<img src = img/praktikum4g4.png>

<img src = img/praktikum4g5.png>

<img src = img/praktikum4g6.png>

<img src = img/praktikum4g7.png>

### **Langkah-langkah Praktikum 5**:

a. Untuk membuatnya dilakukan dengan menjalankan perintah berikut ini di terminal.
```
php artisan make:controller PhotoController --resource
```
Perintah ini akan men generate sebuah controller dengan nama PhotoController yang berisi method method standar untuk proses CRUD
<img src = img/praktikum5a.png>

b. Setelah controller berhasil degenerate, selanjutnya harus dibuatkan route agar dapat terhubung dengan frontend. Tambahkan kode program berikut pada file web.php.
```
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
```
<img src = img/praktikum5b.png>

c. Jalankan cek list route (php artisan route:list)

<img src = img/praktikum5c.png>

d. Pada route list semua route yang berhubungan untuk crud photo sudah di generate oleh laravel. Jika tidak semua route pada resource controller dibutuhkan dapat dikurangi dengan
mengupdate route pada web.php menjadi seperti berikut ini.
```php
Route::resource('photos', PhotoController::class)->only([
 'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
 'create', 'store', 'update', 'destroy'
]);
```
<img src = img/praktikum5d.png>

### **Langkah-langkah Praktikum 6**:

a. Pada direktori app/resources/views, buatlah file hello.blade.php

<img src = img/praktikum6a.png>

```php
<!-- View pada resources/views/hello.blade.php -->
<html>
    <body>
        <h1>Hello, {{ $name }}</h1>
    </body>
</html>
```

b. View tersebut dapat dijalankan melalui Routing, dimana route akan memanggil View sesuai dengan nama file tanpa ‘blade.php’. (Catatan: Gantilah Andi dengan nama Anda)

<img src = img/praktikum6b.png>

c. Jalankan code dengan membuka url localhost/PWL_2024/public/greeting. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum6c.png>


### **Langkah-langkah Praktikum 7**:

a. Buatlah direktori blog di dalam direktori views.

b. Pindahkan file hello.blade.php ke dalam direktori blog.

<img src = img/praktikum7b.png>

c. Selanjutnya lakukan perubahan pada route

<img src = img/praktikum7c.png>

### **Langkah-langkah Praktikum 8**:

a. Buka WelcomeController.php dan tambahkan fungsi baru yaitu greeting.

<img src = img/praktikum8a.png>

b. Ubah route /greeting dan arahkan ke WelcomeController pada fungsi greeting.

<img src = img/praktikum8b.png>

c. Jalankan code dengan membuka url localhost/PWL_2024/public/greeting. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum8c.png>

### **Langkah-langkah Praktikum 9**:

a. Buka WelcomeController.php dan tambahkan ubah fungsi greeting

<img src = img/praktikum9a.png>

b. Ubah hello.blade.php agar dapat menampilkan dua parameter.

<img src = img/praktikum9b.png>

c. Jalankan code dengan membuka url localhost/PWL_2024/public/greeting. Perhatikan halaman yang muncul dan jelaskan pengamatan Anda.

<img src = img/praktikum9c.png>