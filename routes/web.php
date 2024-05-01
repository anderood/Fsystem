<?php

use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Controls\ControlController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Members\MemberController;
use App\Http\Controllers\Origins\OriginController;
use App\Http\Controllers\Transactions\TransactionController;
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

Route::get("/", function () {
    return view('home');
});

Route::controller(LoginController::class)->group(function () {
    Route::get("login", 'index')->name("login");
    Route::post("login", 'store')->name("login.store");
    Route::get("logout", 'destroy')->name("login.destroy");
});

Route::prefix('fsystem')->group(function () {

    Route::namespace("admin")->group(function () {
        Route::get("/", [UserController::class, 'index'])->name('admin.home_admin');
        Route::get("/admin/create", [UserController::class, 'show'])->name('admin.create_admin');
        Route::get("/admin/{id}", [UserController::class, 'obterUserById'])->name('admin.list_user_admin');
        Route::post("/admin/create", [UserController::class, 'createUser']);
    });

    Route::namespace("members")->group(function () {
        Route::get("/members/", [MemberController::class, 'index'])->name('members.home_members');
        Route::get("/members/create", [MemberController::class, 'show'])->name('members.create_members');
        Route::get("/members/{id}", [MemberController::class, 'getMemberById']);
        Route::post("/members/create", [MemberController::class, 'createMember']);
    });

    Route::namespace("categories")->group(function () {
        Route::get("/categories/", [CategoryController::class, 'index'])->name('categories.list_categories');
        Route::get("/categories/create", [CategoryController::class, 'show'])->name('categories.create_category');
        Route::post("/categories/create", [CategoryController::class, 'createCategory']);
        Route::get("/categories/{id}", [CategoryController::class, 'getCategoryById']);
    });

    Route::namespace("origins")->group(function () {

        Route::get("/origins/", [OriginController::class, 'index'])->name('origins.list_origins');
        Route::get("/origins/create", [OriginController::class, 'create'])->name('origins.create_origins');
        Route::post("/origins/create", [OriginController::class, 'store']);
        Route::get("/origins/{id}", [OriginController::class, 'edit']);
    });

    Route::namespace("types")->group(function () {
        Route::get("/types/", [App\Http\Controllers\Types\TypeController::class, 'index'])->name('types.list_types');
        Route::get("/types/create", [App\Http\Controllers\Types\TypeController::class, 'show'])->name('types.create_types');
        Route::post("/types/create", [App\Http\Controllers\Types\TypeController::class, 'store']);
        Route::get("/types/{id}", [App\Http\Controllers\Types\TypeController::class, 'edit']);
    });

    Route::namespace("transactions")->group(function () {
        Route::get("/transactions/", [TransactionController::class, 'index'])->name('transactions.list_transactions');
        Route::get("/transactions/create", [TransactionController::class, 'show'])->name('transactions.create_transactions');
        Route::post("/transactions/create", [TransactionController::class, 'store']);
        Route::get("/transactions/{id}", [TransactionController::class, 'edit']);
    });

    Route::namespace("controls")->group(function () {
        Route::get("/controls", [ControlController::class, 'index'])->name('controls.list_controls');
        Route::get("/controls/create", [ControlController::class, 'show'])->name('controls.create_controls');
        Route::post("/controls/create", [ControlController::class, 'store']);
        Route::get("/controls/{id}", [ControlController::class, 'edit']);
    });
});

