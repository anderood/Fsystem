<?php

use App\Http\Controllers\Users\UserController;
use Illuminate\Support\Facades\Route;

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::prefix('users')->group(function () {
    Route::post("/create", [UserController::class, 'createUser']);
});
