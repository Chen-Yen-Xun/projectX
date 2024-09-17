<?php

use App\Http\Controllers\Admin\MemberController;
use Illuminate\Support\Facades\Route;

Route::group(["middleware" =>"member","prefix" => "admin/member"], function(){
    Route::get("list", [MemberController::class, "list"]);
    Route::get("edit/{id}", [MemberController::class, "edit"]);
    Route::post("update", [MemberController::class, "update"]);
    Route::post("delete", [MemberController::class, "delete"]);
    Route::post("level", [MemberController::class, "level"]);
});