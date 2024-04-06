<?php

use App\Http\Controllers\Categories\CategoryController;
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

Route::prefix('admin')->group(function () {
    Route::get("/", [UserController::class, 'index']);
    Route::get("/create", [UserController::class, 'show'])->name('admin.create_admin');
    Route::get("/{id}", [UserController::class, 'obterUserById'])->name('admin.list_user_admin');
    Route::post("/create", [UserController::class, 'createUser']);
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

Route::prefix("types")->group(function (){
    Route::get("/", [App\Http\Controllers\Types\TypeController::class, 'index'])->name('types.list_types');
    Route::get("/create", [App\Http\Controllers\Types\TypeController::class, 'show'])->name('types.create_types');
});
