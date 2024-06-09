<?php

use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Types\TypeController;
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

Route::get("/types", [TypeController::class, 'index']);
Route::post("/types/create", [TypeController::class, 'store']);
Route::put("/types/{id}/update", [TypeController::class, 'update']);
Route::delete("/types/{id}/destroy", [TypeController::class, 'destroy']);

