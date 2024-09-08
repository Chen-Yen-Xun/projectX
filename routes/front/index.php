<?php

use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\LogoController;
use Illuminate\Support\Facades\Route;

Route::get("/", [LogoController::class, "logo"]);
Route::get("/index", [IndexController::class, "index"]);