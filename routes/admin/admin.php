<?php

use App\Http\Controllers\Admin\Admincontroller;
use Illuminate\Support\Facades\Route;
Route::group(["prefix" => "admin"], function(){
    Route::get("/", [Admincontroller::class, "login"]);
    Route::post("doLogin", [Admincontroller::class, "doLogin"]);
    Route::get("home", [Admincontroller::class, "home"])->middleware("member");
    Route::post("doLogout", [Admincontroller::class, "doLogout"]);
});