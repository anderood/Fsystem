<?php

use App\Http\Controllers\Members\MemberController;
use Illuminate\Support\Facades\Route;

Route::get("/ping", function (){
    return "pong";
});

Route::prefix("members")->group(function (){
    Route::get("/", [MemberController::class, 'index']);
    Route::get("/{id}", [MemberController::class, 'getMemberById']);
});
