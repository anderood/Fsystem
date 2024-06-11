<?php

use App\Http\Controllers\Members\MemberController;
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
    return "pong";
});

Route::get("/members", [MemberController::class, 'index']);

Route::get("/movements", [MovementController::class, 'index']);
Route::post("/movements/create", [MovementController::class, 'store']);
Route::put("/movements/{id}/update", [MovementController::class, 'update']);
Route::delete("/movements/{id}/destroy", [MovementController::class, 'destroy']);

