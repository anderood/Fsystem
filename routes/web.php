<?php

use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Transactions\TransactionController;
use App\Http\Controllers\Types\TypeController;
use App\Http\Controllers\Origins\OriginController;
use App\Http\Controllers\Movements\MovementController;
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
Route::get("/ping", function (){
    return 'pong';
});

Route::get("/members", [MemberController::class, 'index']);
Route::post("/members/create", [MemberController::class, 'store']);
Route::put("/members/{id}/update", [MemberController::class, 'update']);
Route::delete("/members/{id}/destroy", [MemberController::class, 'destroy']);

Route::get("/types", [TypeController::class, 'index']);
Route::post("/types/create", [TypeController::class, 'store']);
Route::put("/types/{id}/update", [TypeController::class, 'update']);
Route::delete("/types/{id}/destroy", [TypeController::class, 'destroy']);

Route::get("/origins", [OriginController::class, 'index']);
Route::post("/origins/create", [OriginController::class, 'store']);
Route::put("/origins/{id}/update", [OriginController::class, 'update']);
Route::delete("/origins/{id}/delete", [OriginController::class, 'destroy']);


Route::get("/transactions", [TransactionController::class, 'index']);
Route::post("/transactions/create", [TransactionController::class, 'store']);
Route::put("/transactions/{id}/update", [TransactionController::class, 'update']);
Route::delete("/transactions/{id}/delete", [TransactionController::class, 'destroy']);

Route::get("/movements", [MovementController::class, 'index']);
Route::post("/movements/create", [MovementController::class, 'store']);
Route::put("/movements/{id}/update", [MovementController::class, 'update']);
Route::delete("/movements/{id}/destroy", [MovementController::class, 'destroy']);


