<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function () {
    Route::post("/create", [UserController::class, 'createUser']);
    Route::get("/users", [UserController::class, 'index']);
    Route::get("/users/{id}", [UserController::class, 'show']);
});
