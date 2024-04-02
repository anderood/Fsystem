<?php

use App\Http\Controllers\Members\MemberController;
use Illuminate\Support\Facades\Route;

Route::prefix("members")->group(function (){
    Route::get("/", [MemberController::class, 'index']);
});
