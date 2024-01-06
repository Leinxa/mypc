<?php

use App\Http\Controllers\CasingController;
use App\Http\Controllers\CoolerController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\MotherboardController;
use App\Http\Controllers\PsuController;
use App\Http\Controllers\RakitanController;
use App\Http\Controllers\RamController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\userController;
use App\Http\Controllers\VgaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/login', [userController::class,'loginApi']);
Route::post('/register', [userController::class,'registerApi']);
Route::put('/profile', [userController::class,'registerProfile'])->middleware('auth:sanctum');

Route::get('/list/cpu', [CpuController::class,'index']);
Route::post('/list/cpu/insert', [CpuController::class,'create']);

Route::get('/list/psu', [PsuController::class,'index']);
Route::post('/list/psu/insert', [PsuController::class,'create']);

Route::get('/list/ram', [RamController::class,'index']);
Route::post('/list/ram/insert', [RamController::class,'create']);

Route::get('/list/vga', [VgaController::class,'index']);
Route::post('/list/vga/insert', [VgaController::class,'create']);

Route::get('/list/storage', [StorageController::class,'index']);
Route::post('/list/storage/insert', [StorageController::class,'create']);

Route::get('/list/cooler', [CoolerController::class,'index']);
Route::post('/list/cooler/insert', [CoolerController::class,'create']);

Route::get('/list/motherboard', [MotherboardController::class,'index']);
Route::post('/list/motherboard/insert', [MotherboardController::class,'create']);

Route::get('/list/casing', [CasingController::class,'index']);
Route::post('/list/casing/insert', [CasingController::class,'create']);

Route::get('/list/rakitan', [RakitanController::class,'index'])->middleware('auth:sanctum');
Route::post('/list/rakitan/insert', [RakitanController::class,'create'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
