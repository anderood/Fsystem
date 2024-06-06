<?php

use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Origins\OriginController;
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
//Route::get("/ping", function (){
//    return "pong";
//});

Route::get("/members", [MemberController::class, 'index']);

Route::get("/origins", [OriginController::class, 'index']);
Route::post("/origins/create", [OriginController::class, 'store']);
Route::put("/origins/{id}/update", [OriginController::class, 'update']);
Route::delete("/origins/{id}/delete", [OriginController::class, 'destroy']);

