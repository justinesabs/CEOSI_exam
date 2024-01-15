<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FruitController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/fruits', [FruitController::class, 'index'])->name('fruit.index');
Route::post('/fruits/create', [FruitController::class, 'create'])->name('fruit.create');
Route::post('/fruits', [FruitController::class, 'store'])->name('fruit.store');
Route::get('/fruits/{fruit}', [FruitController::class, 'edit'])->name('fruit.edit');
Route::put('/fruits/{fruit}', [FruitController::class, 'update'])->name('fruit.update');
Route::delete('/fruits/{fruit}', [FruitController::class, 'destroy'])->name('fruit.destroy');