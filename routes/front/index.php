<?php

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LogoController;
use App\Http\Controllers\Front\MemberController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LogoController::class, "logo"]);
Route::get("/index", [IndexController::class, "index"]);
Route::get("/shop", [ShopController::class, "shop"]);
Route::get("/item", [ShopController::class, "item"]);

Route::group(["prefix" => "member"], function () {
    Route::get("list", [MemberController::class, "list"]);
    Route::get("add", [MemberController::class, "add"]);
    Route::post("insert", [MemberController::class, "insert"]);
    // {}:參數(變數) ?:可能有,也可能沒有
    Route::get("edit/{id?}", [MemberController::class, "edit"]);
    Route::post("update", [MemberController::class, "update"]);
    Route::post("delete", [MemberController::class, "delete"]);
    Route::post("checkUser", [MemberController::class, "checkUser"]);
    Route::post("doLogin", [MemberController::class, "doLogin"]);
    Route::post("doLogout", [MemberController::class, "doLogout"]);
});