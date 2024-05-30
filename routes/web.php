<?php

use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Controls\ControlController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Origins\OriginController;
use App\Http\Controllers\Transactions\TransactionController;
use App\Http\Controllers\Types\TypeController;
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

Route::controller(LoginController::class)->group(function () {
    Route::get("login", 'index')->name("login");
    Route::post("login", 'store')->name("login.store");
    Route::get("logout", 'destroy')->name("login.destroy");
});

Route::prefix('fsystem')->group(function () {

    Route::get("/", function () {
        return view('home');
    });

    Route::namespace("admin")->group(function () {
        Route::get("/users/", [UserController::class, 'index'])->name('admin.home_admin');
        Route::get("/users/create", [UserController::class, 'show'])->name('admin.create_admin');
        Route::get("/users/{id}", [UserController::class, 'edit'])->name('admin.edit_admin');
        Route::put("/users/{id}", [UserController::class, 'update'])->name('admin.update');
        Route::post("/users/create", [UserController::class, 'createUser']);
    });

    Route::namespace("members")->group(function () {
        Route::get("/members/", [MemberController::class, 'index'])->name('members.home_members');
        Route::get("/members/create", [MemberController::class, 'show'])->name('members.create_members');
        Route::get("/members/{id}", [MemberController::class, 'getMemberById']);
        Route::post("/members/create", [MemberController::class, 'createMember']);
    });

    Route::namespace("categories")->group(function () {
        Route::get("/categories/", [CategoryController::class, 'index'])->name('categories.home_categories');
        Route::get("/categories/create", [CategoryController::class, 'show'])->name('categories.create_category');
        Route::post("/categories/create", [CategoryController::class, 'createCategory']);
        Route::get("/categories/{id}", [CategoryController::class, 'edit'])->name('categories.edit_category');
        Route::put("/categories/{id}", [CategoryController::class, 'update'])->name('categories.update');
    });

    Route::namespace("origins")->group(function () {
        Route::get("/origins/", [OriginController::class, 'index'])->name('origins.home_origins');
        Route::get("/origins/create", [OriginController::class, 'create'])->name('origins.create_origins');
        Route::post("/origins/create", [OriginController::class, 'store']);
        Route::get("/origins/{id}", [OriginController::class, 'edit']);
    });

    Route::namespace("types")->group(function () {
        Route::get("/types/", [TypeController::class, 'index'])->name('types.home_types');
        Route::get("/types/create", [TypeController::class, 'show'])->name('types.create_types');
        Route::post("/types/create", [TypeController::class, 'store']);
        Route::get("/types/{id}", [TypeController::class, 'edit'])->name('types.edit_types');
        Route::put("/types/{id}", [TypeController::class, 'update'])->name('types.update');
    });

    Route::namespace("transactions")->group(function () {
        Route::get("/transactions/", [TransactionController::class, 'index'])->name('transactions.home_transactions');
        Route::get("/transactions/create", [TransactionController::class, 'show'])->name('transactions.create_transactions');
        Route::post("/transactions/create", [TransactionController::class, 'store']);
        Route::get("/transactions/{id}", [TransactionController::class, 'edit'])->name('transactions.edit_transactions');
        Route::put("/transactions/{id}", [TransactionController::class, 'update'])->name('transactions.update');
        Route::delete("/transactions/{id}/delete", [TransactionController::class, 'destroy']);
    });

    Route::namespace("controls")->group(function () {
        Route::get("/controls", [ControlController::class, 'index'])->name('controls.home_controls');
        Route::get("/controls/create", [ControlController::class, 'show'])->name('controls.create_controls');
        Route::post("/controls/create", [ControlController::class, 'store']);
        Route::get("/controls/{id}", [ControlController::class, 'edit']);
    });
});

