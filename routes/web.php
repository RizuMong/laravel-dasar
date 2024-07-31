<?php

use App\Http\Controllers\HelloController;
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

Route::get('/products/{id}', function ($productId) {
    return "Products $productId";
})->name('product.detail');

Route::get('/products/{product}/item/{item}', function ($productId, $itemId) {
    return "Products $productId, Item $itemId";
})->name('product.item.detail');

Route::get('/categories/{id}', function ($categoriesId) {
    return "Category nya : $categoriesId";
})->where('id', '[0-9]+')->name('category.detail');

Route::get('/users/{id?}', function ($userId = "User tidak ditemukan") {
    return "Users : $userId";
})->name('user.detail');

Route::get('/produk/{id}', function ($id) {
    $link = route('product.detail', ['id' => $id]);

    return "Link $link";
});

Route::get("/product/redirect/{id}", function ($id) {
    return redirect()->route('product.detail', ['id' => $id]);
});

Route::get('/controller/request', [HelloController::class, 'request']);
Route::get('/controller/hello', [HelloController::class, 'hello']);