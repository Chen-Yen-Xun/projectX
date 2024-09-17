<?php

use App\Http\Controllers\Admin\ChartController;
use Illuminate\Support\Facades\Route;
Route::group(["prefix" => "admin/chart"], function(){
    Route::get("chart", [ChartController::class, "chart"]);
    Route::get("getList", [ChartController::class, "getList"]);
});