<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use App\Http\Controllers\ElectricityBillController;

// Route::middleware('cors')->group(function () {
//     Route::prefix('electricity_bill')->group(function () {
//         Route::get('/payment_receipt', [ElectricityBillController::class, 'index']);
//     });
// });
// Route::prefix('electricity_bill')->group(function () {
//     Route::get('/payment_receipt', [ElectricityBillController::class, 'index']);
// });
Route::get('/payment_receipt', [ElectricityBillController::class, 'index']);
