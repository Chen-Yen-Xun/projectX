<?php

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LogoController;
use App\Http\Controllers\Front\ShopController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LogoController::class, "logo"]);
Route::get("/index", [IndexController::class, "index"]);
Route::get("/shop", [ShopController::class, "shop"]);
Route::get("/item", [ShopController::class, "item"]);