<?php

use App\Http\Controllers\Admin\MapController;
use Illuminate\Support\Facades\Route;
Route::group(["middleware" =>"member","prefix" => "admin/map"], function(){
    Route::get("map", [MapController::class, "map"]);
    Route::get("getCoordinate", [MapController::class, "getCoordinate"]);
});