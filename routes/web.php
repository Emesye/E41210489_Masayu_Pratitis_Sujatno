<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/home', HomeController::class);
Route::resource('/admin', DashboardController::class);

Route::get('masayu', function () {
    return "haloo";
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/about', function(){
    return view('about',[
        "judul" => "About",
        "nama" => "Masayu Pratitis",
        "Nim" => "E41210489",
        "image" => "yoona.jpg"
    ]);
});
Route::get('/dashboard', function(){
    return view('dashboard',[
        "judul" => "Dashboard"
    ]);
});
Route::get('/blog', function(){
    $blog_post=[
        [
            "judul" => "Blog Pertama",
            "Penulis" => "Masayu Pratitis",
            "body" =>"Donat adalah panganan yang digoreng dibuat dari tepung terigu, gula pasir, ragi, roti dan mentega. dan umumnya donat berbentuk seperti cincin dengan 
            lubang ditengah, namun kini seiring berkembangnya jaman donat sekarang tersedia dengan berbagai macam toping danventuk yang lucu"
        ],
        [
            "judul" => "Blog Kedua",
            "Penulis" => "Adisti yudia",
            "body" =>"Pecel merupakan panganan khas madiun yang umumnya disajikan dengan nasi panas dengan kulupan atau sayuran rebus serta bumbu kacang, 
            sambal pecel sendiri terbuat dari kacang yang digiling halus,cabai,asam jawa,daun jeruk dan berbagai macam jenis bahan lainnya."
        ]
        ];
    return view('blog',[
        "judul" => "Blog",
        "postingan"=> $blog_post
    ]);

});


Route::get('/admin', function(){
    return view('admin',[
        "judul" => "Dashboard"
    ]);
});