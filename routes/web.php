<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;


// 首頁
Route::get('/', function () {
    return view('welcome');
});

// API 路由
Route::get('/api/payment_receipt', [App\Http\Controllers\ElectricityBillController::class, 'index']);

// 以下為 SPA 路由，將所有未匹配的路徑導向 welcome.blade.php
Route::get('/{any}', function () {
    return view('welcome');  // welcome.blade.php 為 SPA 的入口
})->where('any', '.*');


// Route::get('/', function () {
//     return view('welcome', ['name' => 'abc']);
// });

// Route::get('/home', [PageController::class, 'home']);

// Route::get('/apple', function () {
//     return view('apple', ['fruits' => 'apple'], ['isLoggedIn' => false]);
// })->name('apple');

// Route::get('/home', function () {
//     return view('home', [
//         'title' => '首頁',
//         'heading' => '歡迎來到 Laravel',
//         'message' => '這是從路由傳遞過來的訊息。',
//     ]);
// });

// Route::get('/about', function () {
//     $title = '關於我們';
//     $description = '這是關於我們的頁面。';

//     return view('about', compact('title', 'description'));
// });

// Route::get('/products', function () {
//     $products = [
//         ['name' => '產品 A', 'price' => 100],
//         ['name' => '產品 B', 'price' => 200],
//     ];

//     return view('products', ['products' => $products]);
// });