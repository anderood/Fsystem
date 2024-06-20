<?php

use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Transactions\TransactionController;
use App\Http\Controllers\Types\TypeController;
use App\Http\Controllers\Origins\OriginController;
use App\Http\Controllers\Movements\MovementController;
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
    return 'pong';
});

Route::get("/members", [MemberController::class, 'index'])->name('members.home_members');
Route::get("/members/create", [MemberController::class, 'create'])->name('members.create_members');
Route::get("/members/{id}", [MemberController::class, 'edit'])->name('members.edit');
Route::post("/members/create", [MemberController::class, 'store']);
Route::put("/members/{id}/update", [MemberController::class, 'update']);
Route::delete("/members/{id}/destroy", [MemberController::class, 'destroy'])->name('members.delete');

Route::get("/types", [TypeController::class, 'index'])->name('types.home_types');
Route::get("/types/create", [TypeController::class, 'create'])->name('types.create_types');
Route::get("/types/{id}", [TypeController::class, 'edit'])->name('types.edit');
Route::post("/types/create", [TypeController::class, 'store'])->name('types.store');
Route::put("/types/{id}/update", [TypeController::class, 'update'])->name('types.update');
Route::delete("/types/{id}/destroy", [TypeController::class, 'destroy'])->name('types.delete');

Route::get("/origins", [OriginController::class, 'index'])->name('origins.home_origins');
Route::get("/origins/create", [OriginController::class, 'create'])->name('origins.create_origins');
Route::post("/origins/create", [OriginController::class, 'store']);
Route::get("/origins/{id}", [OriginController::class, 'edit'])->name('origins.edit');
Route::put("/origins/{id}/update", [OriginController::class, 'update'])->name('origins.update');
Route::delete("/origins/{id}/delete", [OriginController::class, 'destroy'])->name('origins.delete');


Route::get("/transactions", [TransactionController::class, 'index'])->name('transactions.home_transactions');
Route::get("/transactions/create", [TransactionController::class, 'create'])->name('transactions.create_transactions');
Route::get("/transactions/{id}", [TransactionController::class, 'edit'])->name('transactions.edit');
Route::post("/transactions/create", [TransactionController::class, 'store']);
Route::put("/transactions/{id}/update", [TransactionController::class, 'update'])->name('transactions.update');
Route::delete("/transactions/{id}/delete", [TransactionController::class, 'destroy'])->name('transactions.delete');

Route::get("/movements", [MovementController::class, 'index'])->name('movements.home_movements');
Route::get("/movements/create", [MovementController::class, 'create'])->name('movements.create_movements');
Route::post("/movements/create", [MovementController::class, 'store']);
Route::get("/movements/{id}", [MovementController::class, 'edit'])->name('movements.edit');
Route::put("/movements/{id}/update", [MovementController::class, 'update'])->name('movements.update');
Route::delete("/movements/{id}/destroy", [MovementController::class, 'destroy'])->name('movements.delete');

Route::get("/users", [UserController::class, 'index'])->name('users.home_users');
Route::get("/users/create", [UserController::class, 'create'])->name('users.create_users');
Route::post("/users/create", [UserController::class, 'store']);
Route::get("/users/{id}", [UserController::class, 'edit'])->name('users.edit');
Route::put("/users/{id}/update", [UserController::class, 'update'])->name('users.update');
Route::delete("/users/{id}/destroy", [UserController::class, 'destroy'])->name('users.delete');


