<?php

use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Users\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('cadastros')->group(function () {
    Route::get("/create", [UserController::class, 'show']);
    Route::post("/create", [UserController::class, 'createUser'])->name('admin.create');
    Route::get("/users", [UserController::class, 'index']);
    Route::get("/users/{id}", [UserController::class, 'show']);
});

Route::prefix("members")->group(function (){
    Route::post("/create", [MemberController::class, 'create']);
});
