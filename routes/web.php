<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meng', function () {
    return "Mengrizzkuyy";
});

Route::redirect('/mengci', '/meng');

Route::fallback(function () {
    return "Halaman tidak ada skuyyy";
});

Route::view('/hello', 'hello', ['name' => 'Rizki Haddi']);

Route::get('/hello-skuy', function () {
    return view('hello', ['name' => 'Rizki Haddi Prayoga']);
});

Route::get('/login', function () {
    return view('auth.login', ['name' => 'Rizki Haddi Prayoga']);
});