<?php

use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Origins\OriginController;
use App\Http\Controllers\Transactions\TransactionController;
use App\Http\Controllers\Transactions\TransactionsController;
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

Route::prefix('admin')->group(function () {

    Route::namespace("admin")->group(function () {
        Route::get("/", [UserController::class, 'index'])->name('admin.list_users_admin');
        Route::get("/create", [UserController::class, 'show'])->name('admin.create_admin');
        Route::get("/{id}", [UserController::class, 'obterUserById'])->name('admin.list_user_admin');
        Route::post("/create", [UserController::class, 'createUser']);
    });

});

Route::prefix("members")->group(function (){
    Route::get("/", [MemberController::class, 'index'])->name('members.list_members');
    Route::get("/create", [MemberController::class, 'show'])->name('members.create_members');
    Route::get("/{id}", [MemberController::class, 'getMemberById']);
    Route::post("/create", [MemberController::class, 'createMember']);
});

Route::prefix("categories")->group(function(){
    Route::get("/", [CategoryController::class, 'index'])->name('categories.list_categories');
    Route::get("/create", [CategoryController::class, 'show'])->name('categories.create_category');
    Route::post("/create", [CategoryController::class, 'createCategory']);
    Route::get("/{id}", [CategoryController::class, 'getCategoryById']);
});

Route::prefix("origins")->group(function(){
    Route::get("/", [OriginController::class, 'index'])->name('origins.list_origins');
    Route::get("/create", [OriginController::class, 'create'])->name('origins.create_origins');
    Route::post("/create", [OriginController::class, 'store']);
    Route::get("/{id}", [OriginController::class, 'edit']);
});

Route::prefix("types")->group(function (){
    Route::get("/", [App\Http\Controllers\Types\TypeController::class, 'index'])->name('types.list_types');
    Route::get("/create", [App\Http\Controllers\Types\TypeController::class, 'show'])->name('types.create_types');
    Route::post("/create", [App\Http\Controllers\Types\TypeController::class, 'store']);
    Route::get("/{id}", [App\Http\Controllers\Types\TypeController::class, 'edit']);
});

Route::prefix("transactions")->group(function (){
    Route::get("/", [TransactionController::class, 'index'])->name('transactions.list_transactions');
    Route::get("/create", [TransactionController::class, 'show'])->name('transactions.create_transactions');
    Route::post("/create", [TransactionController::class, 'store']);
    Route::get("/{id}", [TransactionController::class, 'edit']);
});


